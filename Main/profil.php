<?php

/**
 * Short description for file
 *
 * Long description for file (if any)...
 *
 * PHP version 5
 *
 * LICENSE: This source file is subject to version 3.01 of the PHP license
 * that is available through the world-wide-web at the following URI:
 * http://www.php.net/license/3_01.txt.  If you did not receive a copy of
 * the PHP License and are unable to obtain it through the web, please
 * send a note to license@php.net so we can mail you a copy immediately.
 *
 * @category   Home
 * @package    PackageHome
 * @author     Original Author <author@example.com>
 * @author     Another Author <another@example.com>
 * @copyright  2015 Samsung Campus
 * @license    http://www.php.net/ License
 * @version    SVN: $Id$
 * @link       http://pear.php.net/package/PackageName
 * @see        NetOther, Net_Sample::Net_Sample()
 * @since      File available since Release 1.2.0
 * @deprecated File deprecated in Release 2.0.0
 */

session_start();

if (!isset($_SESSION['id'])) {
    header("Location: ../index.php");
}

require '../PHP/pdo_connect.php';
require '../Class/User.php';

$userInfo = new User();
$img = $userInfo->afficheImg($connect);


?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta name="description" content="Gestion de flux RSS" />
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
	<title>RSS Feed</title>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,400italic' rel='stylesheet' type='text/css'>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta charset="utf-8">
	<link rel="stylesheet/less" type="text/css" href="../asset/css/style.less" />
	<script src="../asset/less/less.js" type="text/javascript"></script>
</head>
<body>
    <?php require "../includes/nav.php"; ?>
	<div id="main">
		<h2 id="list">Votre Profil</h2>
    <?php $info = $userInfo->recupInfo($connect); ?>

    <div id="profil">
			<form method="post" action="../PHP/editProfil.php" enctype="multipart/form-data" id="formProfil">
				<label>Nom</label>
				<input type="text" name="edit-nom" class="profilInput" value="<?php echo $info['nom']; ?>" />
				<label>Prenom</label>
				<input type="text" name="edit-prenom" class="profilInput" value="<?php echo $info['prenom'] ?>" />
				<label>Login</label>
				<input type="text" name="edut-login" class="profilInput" value="<?php echo $info['login']?>" />
				<label>Email</label>
				<input type="text" name="edit-email" class="profilInput" value="<?php echo $info['email'] ?>" />
				<input type="submit" class="sub" name="submit" value="Modifier mon profil" />
			</form>
	</div>
    </div>

	<div id="photo">

		<img src="<?php echo $_SESSION['img']; ?>" alt="photo"/>
		<form action="../PHP/upload.php" method="POST" enctype="multipart/form-data">
			<input type="hidden" name="MAX_FILE_SIZE" value="100000" />      
			<input type="file" id="pic" name="pic" /><br>
			<button type="submit" id="upload">Envoyer <i class="fa fa-cloud-upload"></i></button>
		</form>

		<form action="../PHP/deletePic.php" method="POST">
			<button type="submit" name="del" id="delupload">Supprimer la photo</button>
		</form>

	</div>
</body>
</html>