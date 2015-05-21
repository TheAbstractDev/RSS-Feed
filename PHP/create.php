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
?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<link rel="icon" type="image/png" href="" />
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
            <h2 id="connecth2">Bonjour, <?php echo $_SESSION['login']; ?></h2>
            <h3>Veuillez creer un nouveau mot de passe</h3>
            <div id="connectForm">
             <form action="fetchNewPwd.php" method="POST">
              <input type="password" class="inputt" name="edit-password" placeholder="Mot de passe" />
              <input type="password" class="inputt" name="edit-password-confirm" id="pwd" placeholder="Confirmez votre mot de passe" />
              <input type="submit" name="resend" id="send" value="Envoyer" />
          </form>
      </div>
  </div>
</div>

<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script type="text/javascript" src="asset/js/Vague.js-master/Vague.js"></script>
<script type="text/javascript" src="asset/js/main.js"></script>
</body>
</html>