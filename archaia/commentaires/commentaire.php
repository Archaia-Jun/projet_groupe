<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Formulaire</title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
		<link rel="stylesheet" type="text/css" href="css/myStyle.css"/>
	</head>
	<body>
		<h1>Poster un commentaire</h1>
		<form action="post_commentaire.php" method="post"> 
			<p>
				<label for="commentaire">Commentaire</label><br>
		        <textarea name="commentaire" id="commentaire" rows="20" cols="100"></textarea>
		    </p>
		    <p><input type="submit" value="Poster"/></p>	
		</form>
	</body>
</html>
