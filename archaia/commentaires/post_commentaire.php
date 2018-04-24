<?php
	require_once ("connexion.php");
	$req = "SELECT * FROM commentaires";
	$ps = $pdo -> prepare ($req);
	$ps->execute();
?>

<?php 
	require_once ("entete.php")
?>

<!--On commence par récupérer les champs-->

<?php
    $commentaire = $_POST['commentaire'];
    if(isset($_POST['commentaire'])) {
        $commentaire = $_POST['commentaire'];
    }
    else {
        $commentaire="";
    }
    // On vérifie si les champs sont vides
    if(empty($commentaire)) {
        echo '<font color="red"> Attention, des champs sont vides !</font>';
    }
    else{
    	// on ouvre le connexion 
    	$connect = mysqli_connect('localhost', 'root', 'root') or die('Vous n\'êtes pas connecté '. mysqli_error($connect));

        // sélection de la base  
        mysqli_select_db($connect, 'archaia') or die('Erreur de selection '.mysqli_error($connect));

        // ne prend plus en compte les quotes
        $commentaire = mysqli_real_escape_string($connect, "$commentaire");

        // on écrit la requête sql
        $sql = "INSERT INTO commentaires(code, commentaire, article) VALUES(null, '$commentaire', 'article')";
        
        // on insère les informations du formulaire dans la table
        mysqli_query($connect, $sql) or die('Erreur SQL !'.$sql.'<br>'.mysqli_error($connect));

        // on affiche le résultat pour le visiteur
        echo "$commentaire";
        mysqli_close($connect);  // on ferme la connexion
    } 
?>


