<?php

class EUserDbHttpSession extends CDbHttpSession
{

	public $userIdColumnType = 'integer';

	/**
	 * Creates the session DB table.
	 * @param CDbConnection $db the database connection
	 * @param string $tableName the name of the table to be created
	 */
	protected function createSessionTable($db, $tableName)
	{
		switch($db->getDriverName())
		{
			case 'mysql':
				$blob = 'LONGBLOB';
				break;
			case 'pgsql':
				$blob = 'BYTEA';
				break;
			case 'sqlsrv':
			case 'mssql':
			case 'dblib':
				$blob = 'VARBINARY(MAX)';
				break;
			default:
				$blob = 'BLOB';
				break;
		}
		$db->createCommand()->createTable($tableName, array(
			'id' => 'CHAR(32) NOT NULL PRIMARY KEY',
			'user_id' => $this->userIdColumnType,
			'expire' => 'integer',
			'data' => $blob,
		));
	}

	/**
	 * Session write handler.
	 * Do not call this method directly.
	 * @param string $id session ID
	 * @param string $data session data
	 * @return boolean whether session write is successful
	 */
	public function writeSession($id, $data)
	{
		// exception must be caught in session write handler
		// http://us.php.net/manual/en/function.session-set-save-handler.php
		try
		{
			$expire = time() + $this->getTimeout();
			$db = $this->getDbConnection();
			$user = Yii::app()->getUser();
			if($db->createCommand()->select('id')->from($this->sessionTableName)->where($db->quoteColumnName($this->sessionTableName.'.id').'=:id', array(':id' => $id))->queryScalar() === false)
			{
				$db->createCommand()->insert(
						$this->sessionTableName,
						array(
							'id' => $id,
							'user_id' => $user->getId(),
							'data' => $data,
							'expire' => $expire,
						)
				);
			}
			else
			{
				$db->createCommand()->update(
						$this->sessionTableName,
						array(
							'user_id' => $user->getId(),
							'data' => $data,
							'expire' => $expire
						),
						$db->quoteColumnName($this->sessionTableName.'.id').'=:id',
						array(':id' => $id)
				);
			}
		}
		catch(Exception $e)
		{
			if(YII_DEBUG)
				echo $e->getMessage();
			// it is too late to log an error message here
			return false;
		}
		return true;
	}

}