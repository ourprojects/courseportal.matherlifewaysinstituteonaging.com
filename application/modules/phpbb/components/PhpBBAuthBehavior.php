<?php
/**
 *
 * @author Louis DaPrato <l.daprato@gmail.com>
 * @version 1.0
 */

class PhpBBAuthBehavior extends CBehavior
{
	
	/**
	 * Logs a user into phpBB. User will be added to phpBB database if not found.
	 * 
	 * @param CActiveRecord|PhpBBUserBehavior $user The user active record with attached and enabled phpBBUserBehavior or the behavior itself.
	 * @param IUserIdentity $identity The identity of the user logging in.
	 * @param boolean $allowAutoLogin Whether this user should be automatically logged into phpBB on future visits.
	 * @param string $passwordAttribute The name of the plain text password attribute of the user's identity. 
	 * Needed to add the user if they do not exist in the phpBB DB.
	 * @param string $behaviorName The name of the PhpBBUserBehavior. 
	 * This parameter is only necessary if passing the active record with attached behavior.
	 */
	public function phpbbLogin($user, $identity, $allowAutoLogin, $passwordAttribute = 'password', $behaviorName = 'PhpBBUserBehavior')
	{
		if($user !== null)
		{
			if($user instanceof CActiveRecord)
			{
				$user = $user->asa($behaviorName);
			}
			$phpBB = PhpbbModule::getInstance();
			if(!$phpBB->getUserIdFromName($identity->getName()) && $identity->canGetProperty($passwordAttribute))
			{
				$user->phpBBAddUser($identity->{$passwordAttribute});
			}
			return $phpBB->login($identity, '', $allowAutoLogin);
		}
		return false;
	}
	
	public function phpbbLogout()
	{
		PhpbbModule::getInstance()->logout();
	}
	
}