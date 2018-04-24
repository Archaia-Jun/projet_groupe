<?php

    /**
     * Nous créons deux variables : $identifiant et $password qui valent respectivement "Sdz" et "salut"
     */
     
    $identifiant = $_POST['identifiant'];
    $password = $_POST['password'];
 
    if(($_POST['identifiant']) && ($_POST['password'])){
            session_start();
            $_SESSION['identifiant'] = $identifiant;
            echo "Success";    
        }
        else{ // Sinon
            echo "Failed";
        }
?>