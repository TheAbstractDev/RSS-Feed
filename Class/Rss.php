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

 /** 
 * Class User
 * @category   Home
 * @package    PackageHome
 * @author     Original Author <author@example.com>
 * @license    http://www.php.net/ License
 * @link       http://pear.php.net/package/PackageName
 */
class Rss
{
    private $_url;
    private $_flux;
    private $_name;
    private $_item;

    /**
     * SetUrl
     * Set
     * @param string $url about this param
     * @return no
     */
    public function setUrl($url)
    {
        $this->_url = $url;  
    }

    /**
     * GetUrl
     * Set
     * @return string $_url
     */
    public function getUrl()
    {
        return $this->_url;
    }

    /**
     * SetFlux
     * Set
     * @param string $flux about this param
     * @return no
     */
    public function setFlux($flux)
    {
        $this->_flux = $flux;  
    }


    /**
     * GetFlux
     * Set
     * @return string $_flux
     */
    public function getFlux()
    {
        return $this->_flux;
    }


    /**
     * SetName
     * Set
     * @param string $name about this param
     * @return no
     */
    public function setName($name)
    {
        $this->_name = $name;  
    }

     /**
     * GetName
     * Set
     * @return no
     */
    public function getName()
    {
        return $this->_name;
    }

     /**
     * SetItem
     * Set
     * @param string $item about this param
     * @return no
     */
    public function setItem($item)
    {
        $this->_item = $item;  
    }

     /**
     * GetItem
     * Set
     * @return no
     */
    public function getItem()
    {
        return $this->_item;
    }

    /**
     * AddFlux
     * Add
     * @param string $connect about this param
     * @return no
     */
    public function addFlux($connect)
    {
        $link = "";

        if (isset($_POST['url']) && !empty($_POST['url'])) {
            $this->_url = $_POST['url'];
            $this->_flux = simplexml_load_file($this->_url);
            $donnees = $this->_flux->channel;
            $this->_item = $donnees->item;
            $this->_name = $donnees->title;

            
            $checkFlux = "SELECT COUNT(link) AS t FROM sites WHERE id_user = :uid AND link = :link";
            $reqCheck = $connect->prepare($checkFlux);
            $reqCheck->execute(
                array(
                ':uid' => $_SESSION['id'],
                ':link' => $this->_url)
            );
            
            $dataCheck = $reqCheck->fetch();
            
            if ($dataCheck['t'] == 0) {
                $insertFlux = "INSERT INTO sites VALUES ('', :uid, :name, :url, 1, 0)";
                $reqFlux = $connect->prepare($insertFlux);
                $reqFlux->execute(
                    array(
                    ':uid' => $_SESSION['id'],
                    ':name' => $this->_name,
                    ':url' => $this->_url)
                );
            } else {
                $active = "UPDATE sites SET active = 1 WHERE id_user = :uid AND link = :url";
                $reqActive = $connect->prepare($active);
                $reqActive->execute(
                    array(
                    ':uid' => $_SESSION['id'],
                    ':url' => $this->_url)
                );
            }

        } else {
            die("pb");
        }
    
    }

     /**
     * ShowFlux
     * Show
     * @param string $connect about this param
     * @return $dataFlux
     */
    public function showFlux($connect)
    {
        $selectFlux = "SELECT id_site, name, link FROM sites WHERE id_user = :uid AND active = 1";
        $reqSelect = $connect->prepare($selectFlux);
        $reqSelect->execute(
            array(
            ':uid' => $_SESSION['id'])
        );
        $dataFlux = $reqSelect->fetchAll();

        return $dataFlux;
    }


    /**
     * DetailFlux
     * Detail
     * @param string $connect about this param
     * @return $dataDetail
     */
    public function detailFlux($connect)
    {
        $viewDetailFlux = "SELECT link FROM sites WHERE id_user = :uid AND id_site = :get";
        $reqDetail = $connect->prepare($viewDetailFlux);
        $reqDetail->execute(
            array(
            ':uid' => $_SESSION['id'],
            ':get' => $_GET['id'])
        );
        $dataDetail = $reqDetail->fetch();

        if (simplexml_load_file($dataDetail['link'])) {
            $this->_flux = simplexml_load_file($dataDetail['link']);
            $donnees = $this->_flux->channel;
            $this->_item = $donnees->item;
            $this->_name = $donnees->title;
        
            return $dataDetail;
        } else {
            echo "<h1> Nous n'avons pas pu acceder au flux demandée.. Verifiez votre connexion internet. </h1>";
        }


    }

    /**
     * DeleteFlux
     * Delete
     * @param string $connect about this param
     * @return no
     */
    public function deleteFlux($connect)
    {
        $delete = "UPDATE sites SET active = 0 WHERE id_user = :uid AND id_site = :get";
        $reqDelete = $connect->prepare($delete);
        $reqDelete->execute(
            array(
            ':uid' => $_SESSION['id'],
            ':get' => $_GET['id'])
        );
    }

    /**
     * ShowDeleteFlux
     * ShowDelete
     * @param string $connect about this param
     * @return $dataDelete
     */
    public function showDeletedFlux($connect)
    {
        $showDeleted = "SELECT id_site, name, link FROM sites WHERE id_user = :uid AND active = 0";
        $reqDeleted = $connect->prepare($showDeleted);
        $reqDeleted->execute(
            array(
            ':uid' => $_SESSION['id'])
        );
        $dataDeleted = $reqDeleted->fetchAll();

        return $dataDeleted;
    }

    /**
     * RestoreFlux
     * Restore
     * @param string $connect about this param
     * @return no
     */
    public function restoreFlux($connect)
    {
        $restore = "UPDATE sites SET active = 1 WHERE id_user = :uid AND id_site = :url";
        $reqRestore = $connect->prepare($restore);
        $reqRestore->execute(
            array(
            ':uid' => $_SESSION['id'],
            ':url' => $_GET['id'])
        );
    }

    /**
     * AddFavoris
     * AddFav
     * @param string $connect about this param
     * @return no
     */
    public function addFavoris($connect)
    {
        $favoris = "UPDATE sites SET favoris = 1 WHERE id_user = :uid AND id_site = :url";
        $reqFavoris = $connect->prepare($favoris);
        $reqFavoris->execute(
            array(
            ':uid' => $_SESSION['id'],
            ':url' => $_GET['id'])
        );
    }

    /**
     * ViewFavoris
     * ViewFav
     * @param string $connect about this param
     * @return $dataFavoris
     */
    public function viewFavoris($connect)
    {
        $viewFavoris = "SELECT id_site, name, link FROM sites WHERE id_user = :uid AND active = 1 AND favoris = 1";
        $reqViewFavoris = $connect->prepare($viewFavoris);
        $reqViewFavoris->execute(
            array(
            ':uid' => $_SESSION['id'])
        );
        $dataFavoris = $reqViewFavoris->fetchAll();

        return $dataFavoris;
    }

    /**
     * DeleteFavoris
     * DelFav
     * @param string $connect about this param
     * @return no
     */
    public function deleteFavoris($connect)
    {
        $deleteFavoris = "UPDATE sites SET favoris = 0 WHERE id_user = :uid AND id_site = :get";
        $reqDeleteFavoris = $connect->prepare($deleteFavoris);
        $reqDeleteFavoris->execute(
            array(
            ':uid' => $_SESSION['id'],
            ':get' => $_GET['id'])
        );
    }


    /**
     * ViewAll
     * ViewA
     * @param string $connect about this param
     * @return $dataAll
     */
    public function viewAll($connect)
    {
        $viewAllFlux = "SELECT name, link FROM sites WHERE id_user = :uid AND active = 1";
        $reqAll = $connect->prepare($viewAllFlux);
        $reqAll->execute(
            array(
            ':uid' => $_SESSION['id'])
        );
        $dataAll = $reqAll->fetchAll();

        return $dataAll;
    }

}

?>