<?php
require_once ("connexion.php");
$req = "SELECT * FROM membres";
$ps = $pdo -> prepare ($req);
$ps->execute();
?>

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
            				<th>Code</th> <th>Identifiant</th> <th>Email</th> <th>Image</th> <th>Messages</th> <th>Rôle</th>
            			</tr>
            	</thead>
                <tbody>
                 <!--On commence par récupérer les champs-->
                <?php  
                    $identifiant = $_POST['pseudo'];
                    $mail = $_POST['mail'];
                    if(isset($identifiant)) {
                        $identifiant=$_POST['pseudo'];
                    }
                    else {
                        $identifiant="";
                    }

                    if(isset($_POST['mail'])) {
                        $mail=$_POST['mail'];
                    }
                    else {
                        $mail="";
                    }
                    // On vérifie si les champs sont vides
                    if(empty($identifiant) OR empty($_POST['password']) OR empty($mail)) {
                        echo '<font color="red">Attention, des champs sont vides !</font>';
                    }
                    else{
                    	// on ouvre le connexion 
                    	$connect = mysqli_connect('localhost', 'root', 'root') or die('Vous n\'êtes pas connecté '. mysqli_error($connect));

                        // sélection de la base  
                        mysqli_select_db($connect, 'archaia') or die('Erreur de selection '.mysqli_error($connect));

                        // on écrit la requête sql
                        $sql = "INSERT INTO membres(code, identifiant, email, image, messages, role) VALUES(null, '$identifiant', '$mail', 'image', 0, 'membre')";
                        
                        // on insère les informations du formulaire dans la table
                        mysqli_query($connect, $sql) or die('Erreur SQL !'.$sql.'<br>'.mysqli_error($connect));

                        // on affiche le résultat pour le visiteur
                        echo 'Vos infos ont été ajoutées.';
                        mysqli_close($connect);  // on ferme la connexion
                    } 
                ?>

                <?php while ($mbr=$ps->fetch()){?>
                	    <!-- commentaires : fetch = relier toutes les lignes de la table -->
                <tr>
                	<td><?php echo htmlspecialchars($mbr['code'])?></td>
                	<td><?php echo htmlspecialchars($mbr['identifiant'])?></td>
                	<td><?php echo htmlspecialchars($mbr['email'])?></td>
                	<td><?php echo htmlspecialchars($mbr['image'])?></td>
                    <td><?php echo htmlspecialchars($mbr['messages'])?></td>
                    <td><?php echo htmlspecialchars($mbr['role'])?></td>
                </tr>
                	
                <?php }?>
                </tbody>
			</table>
			</div>
		</div>
		
		</div>
	
</body>
</html>


