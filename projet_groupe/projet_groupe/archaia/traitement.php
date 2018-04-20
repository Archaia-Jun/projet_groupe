<?php
var_dump($_GET); // ou var_dump($_GET);
exit();
$to='junior.sekpon@gmail.com';
$subject=$_GET['sujet'];
$headers.='From: formulaire@truc.com'."\r\n";
$headers.=$_GET['nom']."\r\n";
$headers.=$_GET['prenom']."\r\n";
$headers.=$_GET['mail']."\r\n";
$headers.=$_GET['age']."\r\n";
$headers.=$_GET['adresse'];
$content=$_GET['message'];
mail($to, $subject, $content, $headers);
?>
