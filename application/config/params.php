<?php defined('BASEPATH') or exit('No direct script access allowed');  

$params = array();

$params['userModelClassName'] = 'CPUser';
$params['title'] = 'Mather LifeWays Institute on Aging Online Course Portal';
$params['adminEmail'] = 'admin@courseportal.matherlifewaysinstituteonaging.com';
$params['supportEmail'] = 'support@courseportal.matherlifewaysinstituteonaging.com';
$params['noReplyEmail'] = 'NO-REPLY@courseportal.matherlifewaysinstituteonaging.com';

$params['googleAnalytics']['accountID'] = 'UA-36363866-1';

$params['reCaptcha']['privateKey'] = '6LfoftgSAAAAAA0U102uNfbQ-FmJraQ1-PahYn5h';
$params['reCaptcha']['publicKey'] = '6LfoftgSAAAAADPNNNQh_50aIjqXayHiEy3uqOwk';

return $params;
?>
