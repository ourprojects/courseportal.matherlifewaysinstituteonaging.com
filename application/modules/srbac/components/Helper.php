<?php

/**
 * Helper class file.
 *
 * @author Spyros Soldatos <spyros@valor.gr>
 * @link http://code.google.com/p/srbac/
 */
/**
 * Helper is a class providing static methods that are used across srbac.
 *
 * @author Spyros Soldatos <spyros@valor.gr>
 * @package srbac.components
 * @since 1.0.0
 */
class Helper {
	const SUCCESS = 0;
	const OVERWRITE = 1;
	const ERROR = 2;

	/**
	 * Marking words / phrases that are missing translation by adding a red * after
	 * the word / phrase
	 * @param CMissingTranslationEvent $event
	 */
	public static function markWords($event) {
		if (self::findModule('srbac')->debug) {
			$event->message .= "*";
		}
	}

	/**
	 * Check if authorizer is assigned to a user.
	 * Until Authorizer is assigned to a user all users have access to srbac
	 * administration. Also all users have access to srbac admin if srbac debug
	 * attribute is true
	 * @return true if authorizer is assigned to a user
	 */
	public static function isAuthorizer() {
		if (self::findModule('srbac')->debug) {
			return false;
		}
		$criteria = new CDbCriteria();
		$criteria->condition = "itemname = '" . self::findModule('srbac')->superUser . "'";
		$authorizer = Assignments::model()->find($criteria);
		if ($authorizer !== null) {
			return true;
		}
		return false;
	}

	/**
	 * If action is "install" checks for previous installations and if there's
	 * one asks for ovewrite. If action is "ovewrite" or there's not a previous
	 * installation performs the installation and returns the status of the
	 * installation
	 * @param String action
	 * @param int demo
	 * @return int status (0:Success, 1:Ovewrite, 2: Error)
	 */
	public static function install($action, $demo) {
		$db = Yii::app()->getAuthManager()->db;
		/* @var $db CDbConnection */
		$auth = Yii::app()->getAuthManager();
		/* @var $auth CDbAuthManager */
		$itemTable = $auth->itemTable;
		if ($action == "Install") {
			if (self::findModule("srbac")->isInstalled()) {
				return self::OVERWRITE; // Already installed
			} else {
				return  self::_install($demo);
			}
		} else {
			return self::_install($demo);
		}
	}

	/**
	 * Performs the installation and returns the status
	 * @param int demo
	 * @return int status (0:Success, 1:Ovewrite, 2: Error)
	 */
	private static function _install($demo) {
		$db = Yii::app()->getAuthManager()->db;
		/* @var $db CDbConnection */
		$auth = Yii::app()->getAuthManager();
		/* @var $auth CDbAuthManager */
		$transaction = $db->beginTransaction();
		$itemTable = $auth->itemTable;
		$assignmentTable = $auth->assignmentTable;
		$itemChildTable = $auth->itemChildTable;
		try {
			// Drop tables
			$db->createCommand("drop table if exists " . $assignmentTable . ";")->execute();
			$db->createCommand("drop table if exists " . $itemChildTable . ";")->execute();
			$db->createCommand("drop table if exists " . $itemTable . ";")->execute();

			//create tables
			$sql = "create table " . $itemTable . " (name varchar(64) not null,
					type integer not null,
					description text,
					bizrule text,
					data text,
					primary key (name));";
			$db->createCommand($sql)->execute();
			$sql = "create table " . $itemChildTable . " (parent varchar(64) not null,
					child varchar(64) not null,
					primary key (parent,child),
					foreign key (parent) references " . $itemTable . " (name) on delete cascade on update cascade,
							foreign key (child) references " . $itemTable . " (name) on delete cascade on update cascade
									);";
			$db->createCommand($sql)->execute();
			$sql = "create table " . $assignmentTable . "(itemname varchar(64) not null,
					userid varchar(64) not null,
					bizrule text,
					data text,
					primary key (itemname,userid),
					foreign key (itemname) references " . $itemTable . " (name) on delete cascade on update cascade
							);";
			$db->createCommand($sql)->execute();
			//Insert Authorizer
			$sql = "INSERT INTO " . $itemTable . " (name, type) VALUES ('" . self::findModule('srbac')->superUser . "',2)";
			$db->createCommand($sql)->execute();
			if ($demo == 1) {
				//Insert Demo Data
				$sql = "INSERT INTO " . $itemTable . " (name, type) VALUES ('Administrator',". CAuthItem::TYPE_ROLE.")";
				$db->createCommand($sql)->execute();
				$sql = "INSERT INTO " . $itemTable . " (name, type) VALUES ('User',". CAuthItem::TYPE_ROLE.")";
				$db->createCommand($sql)->execute();
				$sql = "INSERT INTO " . $itemTable . " (name, type) VALUES ('Post Manager',". CAuthItem::TYPE_TASK.")";
				$db->createCommand($sql)->execute();
				$sql = "INSERT INTO " . $itemTable . " (name, type) VALUES ('User Manager',". CAuthItem::TYPE_TASK.")";
				$db->createCommand($sql)->execute();
				$sql = "INSERT INTO " . $itemTable . " (name, type) VALUES ('Delete Post',". CAuthItem::TYPE_OPERATION.")";
				$db->createCommand($sql)->execute();
				$sql = "INSERT INTO " . $itemTable . " (name, type) VALUES ('Create Post',". CAuthItem::TYPE_OPERATION.")";
				$db->createCommand($sql)->execute();
				$sql = "INSERT INTO " . $itemTable . " (name, type) VALUES ('Edit Post',". CAuthItem::TYPE_OPERATION.")";
				$db->createCommand($sql)->execute();
				$sql = "INSERT INTO " . $itemTable . " (name, type) VALUES ('View Post',". CAuthItem::TYPE_OPERATION.")";
				$db->createCommand($sql)->execute();
				$sql = "INSERT INTO " . $itemTable . " (name, type) VALUES ('Delete User',". CAuthItem::TYPE_OPERATION.")";
				$db->createCommand($sql)->execute();
				$sql = "INSERT INTO " . $itemTable . " (name, type) VALUES ('Create User',". CAuthItem::TYPE_OPERATION.")";
				$db->createCommand($sql)->execute();
				$sql = "INSERT INTO " . $itemTable . " (name, type) VALUES ('Edit User',". CAuthItem::TYPE_OPERATION.")";
				$db->createCommand($sql)->execute();
				$sql = "INSERT INTO " . $itemTable . " (name, type) VALUES ('View User',". CAuthItem::TYPE_OPERATION.")";
				$db->createCommand($sql)->execute();
			}
			$transaction->commit();
		} catch (CDbException $ex) {
			$transaction->rollback();
			return self::ERROR; //Error
		}
		return self::SUCCESS;
		//Success
	}

	/**
	 * Find a module searching in application modules and if it's not found there
	 * looks in modules' modules
	 * @param String $moduleID The model to find
	 * @return The module, if it's found else null
	 */
	public static function findModule($moduleID) {
		if (Yii::app()->getModule($moduleID)) {
			return Yii::app()->getModule($moduleID);
		}
		$modules = Yii::app()->getModules();
		foreach ($modules as $mod=>$conf) {
			if (Yii::app()->getModule($mod)) {
				return self::findInModule(Yii::app()->getModule($mod), $moduleID);
			}
		}
		return null;
	}

	/**
	 * Search for a child module
	 * @param String $parent The parent module
	 * @param String $moduleID The module to find
	 * @return The module, if it's not found returns null
	 */
	private static function findInModule($parent, $moduleID) {
		if ($parent->getModule($moduleID)) {
			return $parent->getModule($moduleID);
		} else {
			$modules = $parent->getModules();
			foreach ($modules as $mod => $conf) {
				return Helper::findInModule($parent->getModule($mod), $moduleID);
			}
		}
		return null;
	}

	/**
	 * Translates texts based on Yii version
	 * @param String $source The messages source
	 * @param String $text The text to transalte
	 * @return String The translated text
	 */
	public static function translate($source, $text, $lang = null) {
		return self::findModule("srbac")->tr->translate($source, $text, $lang);
	}

	/**
	 * Checks if a given version is supported by the current running Yii version
	 * @param String $checkVersion
	 * @return boolean True if the given version is supportedby the running Yii
	 * version
	 */
	public static function checkYiiVersion($checkVersion) {
		//remove dev builds
		$version = preg_replace("/[a-z]/", "", Yii::getVersion());
		$yiiVersionNoBuilds = explode("-", $version);
		$checkVersion = explode(".", $checkVersion);
		$yiiVersion = explode(".", $yiiVersionNoBuilds[0]);
		$yiiVersion[2] = isset($yiiVersion[2]) ? $yiiVersion[2]  : "0";
		if ($yiiVersion[0] > $checkVersion[0]) {
			return true;
		} else if ($yiiVersion[0] < $checkVersion[0]) {
			return false;
		} else {
			if ($yiiVersion[1] > $checkVersion[1]) {
				return true;
			} else if ($yiiVersion[1] < $checkVersion[1]) {
				return false;
			} else {
				if ($yiiVersion[2] > $checkVersion[2]) {
					return true;
				} else if ($yiiVersion[2] == $checkVersion[2]) {
					return true;
				} else {
					return false;
				}
			}
		}
		return false;
	}

	public static function checkInstall($key, $value) {
		if (in_array($key, explode(",", SrbacModule::PRIVATE_ATTRIBUTES))) {
			return;
		}
		$class = "";
		$out = array("", "");
		switch ($key) {
			case ($key == "userid" || $key == "username"):
				$class = "installNoError";
				$u = self::findModule("srbac")->getUserModel();
				$user = new $u;
				if (!$user->hasAttribute($value)) {
					$class = "installError";
					$out[1] = self::ERROR;
				}
				break;
			case "css":
				$class = "installNoError";
				$cssPublished = self::findModule("srbac")->isCssPublished();
				if (!$cssPublished) {
					$class = "installError";
					$out[1] = self::ERROR;
				}
				break;
			case (($key == "layout" && $value != "main" ) || $key == "notAuthorizedView" || $key == "imagesPath"
					|| $key == "header" || $key == "footer"):
					$class = "installNoError";
					$file = Yii::getPathOfAlias($value) . ".php";
					$path = Yii::getPathOfAlias($value);
					if (!file_exists($file) && !is_dir($path)) {
						$class = "installError";
						$out[1] = self::ERROR;
					}
					break;
			case ($key == "imagesPack"):
				$class = "installNoError";
				if (!in_array($value, explode(",", SrbacModule::ICON_PACKS))) {
					$class = "installError";
					$out[1] = self::ERROR;
				}
				break;
			case "debug":

				break;

		}
		$out[0] = "<tr><td valign='top'>" . (substr($key, 0, 1) == "_" ? substr($key, 1) : $key) . "</td>";
		$out[0] .= "<td><div class='$class'>";
		$out[0] .= (!is_array($value)) ? $value : implode(", ", $value);
		$out[0] .= "</div><div class='$class'></div></td>";
		return $out;
	}

	/**
	 * Gets all users array for autocomplete textbox
	 */
	public static function getAllusers($term){
		$mod = Helper::findModule("srbac");
		$cr = new CDbCriteria();
		$cr->compare($mod->username,$term,true);
		$users = Helper::findModule('srbac')->getUserModel()->findAll($cr);
		foreach ($users as $key => $user) {
			$list[] = array(
					"label"=>$user->{$mod->username},
					"value"=>$user->{$mod->username},
					"id"=>$user->{$mod->userid},
			);
		}
		return $list;
	}
}