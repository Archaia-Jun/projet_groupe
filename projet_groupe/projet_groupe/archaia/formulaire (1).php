<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8">
		<title>Formulaire</title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
		<link rel="stylesheet" type="text/css" href="css/myStyle.css"/>
	</head>

	<body>

		<h1>Inscription</h1>

		<!--<form action="membre_form.php" method="post">

		    <fieldset>
	        	<legend>Compte personnel</legend> Titre du champ  
				
				<p>
					<label for="pseudo">Identifiant</label>
		        	<input type="text" name="pseudo" id="pseudo" />
		    	</p>
				<p>
					<label for="password">Mot de passe</label>
		        	<input type="password" name="password" id="password" />
		        </p>
				<p>
					<label for="email">E-Mail</label>
		        	<input type="email" name="email" id="email" />
		    	</p>

		    	<input type="submit" value="Valider" />

	   		</fieldset>

		</form>-->
		<form action="membres.php" method="post">

		    <fieldset>
	        	<legend>Compte personnel</legend> <!-- Titre du champ --> 
				
				<p>
					<label for="pseudo">Identifiant</label>
		        	<input type="text" name="pseudo" id="pseudo" />
		    	</p>
				<p>
					<label for="password">Mot de passe</label>
		        	<input type="password" name="password" id="password" />
		        </p>
				<p>
					<label for="mail">E-Mail</label>
		        	<input type="email" name="mail" id="mail" />
		    	</p>

		    	<input type="submit" value="Valider" />

	   		</fieldset>

		</form>

	</body>

</html>
