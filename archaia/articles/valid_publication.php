<?php
	require_once ("connexion.php");
	$req = "SELECT * FROM articles";
	$ps = $pdo -> prepare ($req);
	$ps->execute();
?>

<?php 
	require_once ("entete.php")
?>

<!--On commence par récupérer les champs-->

<?php
    $titre = $_POST['titre'];
    $image = $_POST['image'];
    $donnees = $_POST['donnees'];
    $texte = $_POST['texte'];
    $infos = $_POST['infos'];
    $sources = $_POST['sources'];

    if(isset($_POST['titre'])) {
        $titre = $_POST['titre'];
    }
    else {
        $titre = "";
    }
    if(isset($_POST['image'])) {
        $image = $_POST['image'];
    }
    else {
        $image = "";
    }
    if(isset($_POST['donnees'])) {
        $donnees = $_POST['donnees'];
    }
    else {
        $donnees = "";
    }
    if(isset($_POST['texte'])) {
        $texte = $_POST['texte'];
    }
    else {
        $texte = "";
    }
    if(isset($_POST['infos'])) {
        $infos = $_POST['infos'];
    }
    else {
        $infos = "";
    }
    if(isset($_POST['sources'])) {
        $sources = $_POST['sources'];
    }
    else {
        $sources = "";
    }
    // On vérifie si les champs sont vides
    if(empty($titre) OR empty($image) OR empty($donnees) OR empty($texte) OR empty($infos) OR empty($sources)) {
        echo '<font color="red">$identifiant Attention, des champs sont vides !</font>';
    }
    else{
    	// on ouvre le connexion 
    	$connect = mysqli_connect('localhost', 'root', 'root') or die('Vous n\'êtes pas connecté '. mysqli_error($connect));

        // sélection de la base  
        mysqli_select_db($connect, 'archaia') or die('Erreur de selection '.mysqli_error($connect));

        // on écrit la requête sql
        $sql = "INSERT INTO articles(code, titre, image, donnees, texte, infos, sources) VALUES(null, '$titre', '$image', '$donnees', '$texte', '$infos', '$sources')";
        
        // on insère les informations du formulaire dans la table
        mysqli_query($connect, $sql) or die('Erreur SQL !'.$sql.'<br>'.mysqli_error($connect));

        // on affiche le résultat pour le visiteur
        echo "Votre article à bien été envoyé, il sera traité par un modérateur!";
        mysqli_close($connect);  // on ferme la connexion
    } 
?>


