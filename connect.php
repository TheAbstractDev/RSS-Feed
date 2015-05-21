<!DOCTYPE html>
<html lang="fr">
<head>
	<meta name="description" content="Connexion" />
	<title>Connexion - RSS Feed</title>
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
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
			<div id="back">
				<a href="index.php" id="circle">	
					<i class="fa fa-angle-left"></i>
				</a>
				<h2 id="connecth2">Connexion à RSS Feed</h2>
				<h3>Connectez vous a votre compte pour retrouver toute votre actualité</h3>
				<div id="connectForm">
					<form action="PHP/fetch.php" method="POST">
						<input type="text" class="inputt" name="login" placeholder="Nom d'utilisateur" />
						<input type="password" class="inputt" name="pwd" id="pwd" placeholder="Mot de passe" />
						<input type="checkbox" name="check" id="check" />
						<label for="check" id="checkLabel"></label> <span>Se souvenir de moi</span>
						<input type="submit" name="suscribe" id="connect" value="Connexion" />
					</form>
					<a href="PHP/forgot.php" id="forgotLink" title="mot de passe oublié">Mot de passe oublié ?</a>
				</div>
			</div>
		</div>
	</div>
</body>
</html>