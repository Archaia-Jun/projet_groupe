<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Formulaire</title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
		<link rel="stylesheet" type="text/css" href="css/myStyle.css"/>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	</head>
	<body>
		<form action="connect.php" method="post">
		    <fieldset>
	        	<legend>Se connecter</legend> 
				<p>
					<label for="identifiant">Identifiant</label>
		        	<input type="text" name="identifiant" id="identifiant"/>
		    	</p>
				<p>
					<label for="password">Mot de passe</label>
		        	<input type="password" name="password" id="password"/>
		        </p>
		    </fieldset>
		    <p>Vous ne vous êtes pas encore inscrit! <a href="inscription.php">Cliquez ici</a></p>
		    <p><button type="submit" id="submit">Valider</button></p>
		</form>
		<div id="connect">
			<!-- Nous allons afficher un retour en jQuery au visiteur -->

		</div>
		<script>
		$(document).ready(function(){
	    $("#submit").click(function(e){
	        e.preventDefault();
	        $.post(
	            'connect.php', // Un script PHP que l'on va créer juste après
	            {
	                identifiant : $("#identifiant").val(),  // Nous récupérons la valeur de nos input que l'on fait passer à connect.php
	                password : $("#password").val()
	            },
	            function(data){
	                if(data == 'Success'){
	                     // Le membre est connecté. Ajoutons lui un message dans la page HTML.
	                     $("#connect").html("<p>Vous avez été connecté avec succès !</p>");
	                }
	                else{
	                     // Le membre n'a pas été connecté. (data vaut ici "failed")
	                     $("#connect").html("<p>Erreur lors de la connexion...</p>");
	                }
	            },
	            'text'
	         );
	    });
	});
		</script>
	</body>
</html>
