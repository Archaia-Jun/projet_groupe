<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8">
		<title>Formulaire</title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
		<link rel="stylesheet" type="text/css" href="css/myStyle.css"/>
	</head>
	<body>
		<h1>Vous voulez publier un article ?</h1>
		<form action="valid_publication.php" method="post">
		    <fieldset>
	        	<legend>Article</legend> <!-- Titre du champ --> 
				<p>
					<label for="titre">Titre</label>
		        	<input type="text" name="titre" id="titre"/>
		    	</p>
				<p>
					<label for="image">Image</label>
		        	<input type="file" name="image" id="image"/>
		        </p>
		        <p>
					<label for="donnees">Données</label><br>
		        	<textarea name="donnees" id="donnees" rows="20" cols="50"></textarea>
		        </p>
		        <p>
					<label for="texte">Texte</label><br>
		        	<textarea name="texte" id="texte" rows="50" cols="100"></textarea>
		        </p>
				<p>
					<label for="infos">Infos complémentaires</label><br>
		        	<textarea name="infos" id="infos" rows="20" cols="100"></textarea>
		        </p>
				<p>
					<label for="sources">Sources</label>
		        	<input type="url" name="sources" id="sources" rows="20" cols="50"/>
		        </p>
		    </fieldset>
		    <p><input type="submit" value="Envoyer l'article"/></p>	
		</form>
	</body>
</html>
