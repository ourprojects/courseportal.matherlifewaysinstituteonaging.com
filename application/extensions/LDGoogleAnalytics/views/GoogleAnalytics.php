var _gaq = _gaq || [];
<?php 
foreach($_data as $data)
	echo '_gaq.push(' . CJSON::encode($data) . ');' . PHP_EOL;
?>
(function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = '<?php echo Yii::app()->getRequest()->getIsSecureConnection() ? 'https://ssl' : 'http://www'; ?>.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
})();