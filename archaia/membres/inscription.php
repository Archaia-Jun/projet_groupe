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
		<form action="essai.php" method="post">
		    <fieldset>
	        	<legend>Compte personnel</legend> <!-- Titre du champ --> 
				<p>
					<label for="identifiant">Identifiant</label>
		        	<input type="text" name="identifiant" id="identifiant"/>
		    	</p>
				<p>
					<label for="password">Mot de passe</label>
		        	<input type="password" name="password" id="password"/>
		        </p>
		        <p>
					<label for="image">Image</label>
		        	<input type="file" name="image" id="image"/>
		        </p>
		    </fieldset>
		    <fieldset>
		    	<legend>Vos coordonnées</legend>
		    		<p><label for="civilite">Civilité</label>
				        <p>
				        	<input type="radio" name="civilite" value="M." id="M."/><label>M.</label>
				        	<input type="radio" name="civilite" value="Mme" id="Mme"/><label>Mme</label>
				    	</p>
			    	</p>
		    		<p>
						<label for="nom">Nom</label>
			        	<input type="text" name="nom" id="nom"/>
			    	</p>
			    	<p>
						<label for="prenom">Prénom</label>
			        	<input type="text" name="prenom" id="prenom"/>
			    	</p>
			    	<p>
						<label for="age">Age</label>
			        	<input type="number" name="age" id="age"/>
			    	</p>
					<p>
						<label for="mail">E-Mail</label>
			        	<input type="email" name="mail" id="mail"/>
			    	</p>
			    	<p>
						<label for="pays">Pays</label>
			        	<input type="text" name="pays" id="pays"/>
			    	</p>
		    </fieldset>
		    <fieldset>
		    	<legend>Votre intêret sur notre site</legend>
		    		<p>Cette partie est purement facultatif. Il permet d'en savoir un peu plus sur vous.</p>
		    		<p><label for="motivation">Qu'est-ce qui vous motive dans ce site?</label></p>
			        <p>
			        	<input type="checkbox" name="motivation" value="connaissances" id="connaissances"/><label>Apporter mes connaissances dans la civilisation</label><br>
			        	<input type="checkbox" name="motivation" value="voyage" id="voyage"/><label>Partager mes experiences, des voyages</label><br>
			        	<input type="checkbox" name="motivation" value="decouverte" id="decouverte"/><label>Découvrir la civilisation</label><br>
			    	</p>
			    	<p>
						<label for="civilisation">Quelle civilisation vous attire le plus?</label>
			        	<input type="text" name="civilisation" id="civilisation"/>
			    	</p>
			    	<p>
			    		<label for="ajout">D'autres choses à ajouter ?</label><br>
			    		<textarea name="ajout" id="ajout" rows="20" cols="100"></textarea>
			    	</p>
		    </fieldset>
		    <p><input type="submit" value="Valider"/></p>	
		</form>
	</body>
</html>
