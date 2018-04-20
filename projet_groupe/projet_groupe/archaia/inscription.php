<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>

<?php

<form method="post" action="traitement.php">
<div class="row">
<div class="col-lg-8 mb-4">
<h3>Inscrivez-vous</h3>
<form name="inscription" id="contactForm" novalidate>
<div class="control-group form-group">
<div class="controls">
<label>Nom:</label>
<input type="text" class="form-control" id="nom" required data-validation-required-message="Please enter your name.">
<p class="help-block"></p>
</div>
</div>
<div class="control-group form-group">
<div class="controls">
<label>Prenom:</label>
<input type="text" class="form-control" id="prenom" required data-validation-required-message="Please enter your first name.">
<p class="help-block"></p>
</div>
</div>
<div class="control-group form-group">
<div class="controls">
<label>Âge:</label>
<input type="age" class="form-control" id="age" required data-validation-required-message="Veuillez saisir votre âge.">
</div>
</div>
<div class="control-group form-group">
<div class="controls">
<label>Addresse Mail:</label>
<input type="email" class="form-control" id="email" required data-validation-required-message="Veuillez saisir votre adresse mail.">
</div>
</div>
<div class="control-group form-group">
<div class="controls">
<label>Message:</label>
<textarea rows="10" cols="100" class="form-control" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
</div>
</div>
<div id="success"></div>
// For success/fail messages 
<input type="submit" class="btn btn-primary" id="BouttonValidation">
</form>

?>

</body>

</html>