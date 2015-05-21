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
	<link rel="stylesheet/less" type="text/css" href="../asset/css/style.less" />
	<script src="../asset/less/less.js" type="text/javascript"></script>
</head>
<body>

	<div id="bg">
		<div id="overlay">
			<div id="back">
				<a href="../connect.php" id="circle">	
					<i class="fa fa-angle-left"></i>
				</a>
				<h2 id="connecth2">Vous avez oublié votre mot de passe ?</h2>
				<h3>Entrez simplement votre adresse email et nous vous renverons un mail pour creer un nouveau mot de passe</h3>
				<div id="connectForm">
					<form action="fetchForgot.php" method="POST">
						<input type="email" class="inputt" name="forgotMail" placeholder="Email" />
						<input type="email" class="inputt" name="confirmMail" id="pwd" placeholder="Confirmez votre email" />
						<input type="submit" name="forgotSub" id="send" value="Envoyer" />
					</form>
				</div>
			</div>
		</div>
	</div>
</body>
</html>