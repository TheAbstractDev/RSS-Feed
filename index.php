<!DOCTYPE html>
<html lang="fr">
<head>
	<meta name="description" content="Gestion de flux RSS" />
	<title>RSS Feed</title>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,400italic' rel='stylesheet' type='text/css'>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta charset="utf-8">
	<link rel="stylesheet/less" type="text/css" href="asset/css/style.less" />
	<script src="asset/less/less.js" type="text/javascript"></script>
</head>
<body>

	<div id="bg">
		<div id="overlay">
		<a href="connect.php" id="connecter">Se connecter</a>
		<h2>Bienvenue sur RSS Feed</h2>
		<h3>RSS Feed est le moyen le plus simple pour suivre votre Actualité</h3>
			<div id="signIn">
				<form action="PHP/suscribe.php" method="POST">
					<input type="text" class="inputt" name="prenom" placeholder="Prenom" />
					<input type="text" class="inputt" name="nom" placeholder="Nom" />
					<input type="text" class="inputt" name="email" placeholder="Email" />
					<input type="text" class="inputt" name="login" placeholder="Nom d'utilisateur" />
					<input type="password" class="inputt" name="pwd" placeholder="Mot de passe" />
					<input type="password" class="inputt" name="pwdConfirm" id="pwd" placeholder="Confimez votre mot de passe" />
					<input type="submit" name="suscribe" id="suscr" value="S'inscrire" />
				</form>
			</div>
		</div>
	</div>
</body>
</html>