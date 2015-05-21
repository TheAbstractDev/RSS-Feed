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

$all = new Rss();
$dataAll = $all->viewAll($connect);


foreach ($dataAll as $value) {

    if (simplexml_load_file($value['link'])) {
        $link = simplexml_load_file($value['link']);
        $name = $link->channel->title;
        $title = $link->channel->item->title;
        $pubDate = $link->channel->item->pubDate;
        $description = $link->channel->item->description;
        
    } else {
        echo "<h1> Nous n'avons pas pu acceder aux flux demandées.. Verifiez votre connexion internet. </h1>";
    }

    ?>
    <div id="article">
        <h2><?php echo $name; ?></h2><br>
        <strong><?php echo $title; ?></strong><br>
        <span><?php echo $pubDate; ?></span><br>
        <p><?php echo $description; ?></p><br>
    </div>
    <?php
}
?>