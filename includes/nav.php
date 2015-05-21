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

?>
<nav>
 	<ul id="ul">
 		<li><a href="home.php" class="btn" title="accueil">Accueil</a></li>
 		<li><a href="addFlux.php" class="btn" title="ajouter un flux">Ajouter un flux</a></li>
 		<li>
 		<a href="viewFlux.php" class="btn" title="mes flux">Mes flux</a>
 		</li>
 		<li><a href="profil.php" class="btn" title="profil">Mon Profil</a></li>
 		<li><a href="../PHP/deco.php" class="btn" title="deconnexion">Deconnexion</a></li>
 		<li>
 			<a href="#" class="btn">
 				<img src="<?php echo $_SESSION['img']; ?>" class="link" alt="user img" />
 			</a>
 		</li>
 	</ul>
 		<span id="loginSession" class="link"><?php echo $_SESSION['login']; ?></span>
</nav>