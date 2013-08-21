<?php 
$this->pageTitle = t($agreement->name); 
$textParams = array(
		'{date}' => $userAgreement == null  || $userAgreement->getIsNewRecord() ? date($agreement->date_format) : $userAgreement->getFormattedAgreedOn(), 
		'{fullname}' => $user == null ? '?' : "{$user->firstname} {$user->lastname}"
);
?>

<div id="text"> <?php echo t($agreement->text, $textParams); ?> </div>
<?php if($user != null && ($userAgreement == null  || $userAgreement->getIsNewRecord())): ?>
<div id="agreed" style="text-align:center;color:red;"> <?php echo t('{fullname} has not yet agreed to the terms of this document.', $textParams); ?> </div>
<?php elseif($user != null): ?>
<div id="agreed" style="text-align:center;color:green;"> <?php echo t('{fullname} agreed to the terms of this document on {date}.', $textParams); ?> </div>
<?php endif; ?>
