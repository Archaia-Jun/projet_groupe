<?php
try {
    $strConnection = 'mysql:host=localhost; dbname=archaia';
    $pdo=new PDO($strConnection, 'root', 'root');
} catch (PDOException $e) {
    $msg = 'ERREUR DE CONNECTION' .$e->getMessage();
    die($msg);
}
?>