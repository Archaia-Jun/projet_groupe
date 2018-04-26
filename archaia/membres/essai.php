<html lang="fr">
<head>
<meta charset="UTF-8">
<title>Gestion des membres</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
<link rel="stylesheet" type="text/css" href="css/myStyle.css"/>
</head>
<body>

	<?php require_once ("entete.php")?>
	<div class="container col-md-6 col-xs-12">
		<div class="pane panel-info spacer">
			<div class="panel-heading">Liste des membres</div>
			<div class="panel-body">
            	<table class="table table-striped"> <!-- couleur des lignes alternées -->
            		<thead>
            			<tr>
            				<th>Numero</th> <th>Identifiant</th> <th>Email</th> <th>Image</th> <th>Messages</th> <th>Rôle</th>
            			</tr>
            	</thead>
                <tbody>
                 <!--On commence par récupérer les champs-->
                
    <?php
    $identifiant = $_POST['identifiant'];
    $password = $_POST['password'];
    $image = $_POST['image'];
    $civilite = $_POST['civilite'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $age = $_POST['age'];
    $mail = $_POST['mail'];
    $pays = $_POST['pays'];

    if(isset($_POST['identifiant'])) {
        $identifiant = $_POST['identifiant'];
    }
    else {
        $identifiant ="";
    }
    if(isset($_POST['password'])) {
        $password = $_POST['password'];
    }
    else {
        $password ="";
    }
    if(isset($_POST['image'])) {
        $image = $_POST['image'];
    }
    else {
        $image ="";
    }
    if(isset($_POST['civilite'])) {
        $civilite = $_POST['civilite'];
    }
    else {
        $civilite ="";
    }
    if(isset($_POST['nom'])) {
        $nom = $_POST['nom'];
    }
    else {
        $nom ="";
    }
    if(isset($_POST['prenom'])) {
        $prenom = $_POST['prenom'];
    }
    else {
        $prenom ="";
    }
    if(isset($_POST['age'])) {
        $age = $_POST['age'];
    }
    else {
        $age ="";
    }
    if(isset($_POST['mail'])) {
        $mail = $_POST['mail'];
    }
    else {
        $mail ="";
    }
    if(isset($_POST['pays'])) {
        $pays = $_POST['pays'];
    }
    else {
        $pays ="";
    }
    // On vérifie si les champs sont vides
    if(empty($identifiant) OR empty($password) OR empty($civilite) OR empty($nom) OR empty($prenom) OR empty($age) OR empty($mail) OR empty($pays)) {
        echo "<font color='red'> $civilite Attention, des champs sont vides !</font>";
    }
    else{
        // on ouvre le connexion 
        $connect = mysqli_connect('localhost', 'root', 'root') or die('Vous n\'êtes pas connecté '. mysqli_error($connect));

        // sélection de la base  
        mysqli_select_db($connect, 'archaia') or die('Erreur de selection '.mysqli_error($connect));

        // on écrit la requête sql
        $sql = "INSERT INTO membres(numero, identifiant, civilite, nom, prenom, age, mail, pays, image, messages, role) VALUES(null, '$identifiant', '$civilite', '$prenom', '$nom', $age, '$mail', '$pays', '$image', 0, 'membre')";
        
        // on insère les informations du formulaire dans la table
        mysqli_query($connect, $sql) or die('Erreur SQL !'.$sql.'<br>'.mysqli_error($connect));

        // on affiche le résultat pour le visiteur
        echo "Hello $identifiant, veuillez confirmer votre inscription en cliquant sur le lien du mail de confirmation !";
        mysqli_close($connect);  // on ferme la connexion
    } 
?>

                <!---->
                <?php
                require_once ("connexion.php");
                $req = "SELECT * FROM membres";
                $ps = $pdo -> prepare ($req);
                $ps->execute();
                ?>

                <?php  
                while ($mbr=$ps->fetch()){?>
                	    <!-- commentaires : fetch = relier toutes les lignes de la table -->
                <tr>
                	<td><?php echo htmlspecialchars($mbr['numero'])?></td>
                	<td><?php echo htmlspecialchars($mbr['identifiant'])?></td>
                	<td><?php echo htmlspecialchars($mbr['mail'])?></td>
                	<td><img src="images/<?php echo htmlspecialchars($mbr['image'])?>"></td>
                    <td><?php echo htmlspecialchars($mbr['messages'])?></td>
                    <td><?php echo htmlspecialchars($mbr['role'])?></td>
                </tr>
                	
                <?php }?>
                </tbody>
			</table>
			</div>
            <img src="">
		</div>
		
		</div>
	
</body>
</html>

