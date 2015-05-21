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
require '../Class/Rss.php';

$show = new Rss();
$dataFlux = $show->showFlux($connect);
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
		<h2 id="list">Mes Flux</h2>
		<ul id="view">
    <?php 
    foreach ($dataFlux as $value) {
        ?>
     <li>
      <a href="viewDetailFlux.php?id=<?php echo $value['id_site']; ?>" title="Acceder au flux" class="flux"><?php echo $value['name']; ?></a><br>
					<a href="../PHP/addFavoris.php?id=<?php echo $value['id_site']; ?>" class="addFav" title="Ajouter aux favoris"><i class="fa fa-star"></i></a>
					<a href="../PHP/deleteFlux.php?id=<?php echo $value['id_site']; ?>" class="deleteFlux" title="Supprimer le flux"><i class="fa fa-trash-o"></i></a><br><br>
				</li>
				<?php
    }
    ?>
		</ul>
		<div id="other">
		<a href="viewFavoris.php" id="showFav">Voir les favoris</a>
		<a href="viewDeletedFlux.php" id="showDel">Voir les supprimées</a>
		</div>
	</div>
</body>
</html>