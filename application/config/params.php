<?php   

return array(
		'userModelClassName' => 'CPUser',
		'title' => 'Mather LifeWays Institute on Aging Online Course Portal',
		'adminEmail' => 'admin@courseportal.matherlifewaysinstituteonaging.com',
		'supportEmail' => 'support@courseportal.matherlifewaysinstituteonaging.com',
		'noReplyEmail' => 'NO-REPLY@courseportal.matherlifewaysinstituteonaging.com',
		
		'googleAnalytics' => array(
					'accountID' => defined('YII_DEBUG') && YII_DEBUG ? null : 'UA-36363866-1',
		),
		
		'reCaptcha' => array(
					'privateKey' => '6LfoftgSAAAAAA0U102uNfbQ-FmJraQ1-PahYn5h',
					'publicKey' => '6LfoftgSAAAAADPNNNQh_50aIjqXayHiEy3uqOwk'
		)
		
);

?>
