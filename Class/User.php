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
class User
{
    private $_login;
    private $_nom;
    private $_prenom;
    private $_email;
    private $_emailConfirm;
    private $_pwd;
    private $_pwdConfirm;
    private $_token;
    private $_img = 0;
    private $_id;

    /**
     * GetLogin
     * @return string $_login
     */
    public function getLogin() 
    {
        return $this->_login;
    }

     /**
     * SetLogin
     * set
     * @param string $login about this param
     * @return string $login
     */
    public function setLogin($login) 
    {
        $this->_login = $login;
    }

     /**
     * GetNom
     * return
     * @return string $_nom
     */
    public function getNom() 
    {
        return $this->_nom;
    }

     /**
     * SetNom
     * set
     * @param string $nom about this param
     * @return string $nom
     */
    public function setNom($nom) 
    {
        $this->_nom = $nom;
    }

     /**
     * GetPrenom
     * return
     * @return string $_prenom
     */
    public function getPrenom() 
    {
        return $this->_prenom;
    }

     /**
     * SetPrenom
     * set
     * @param string $prenom about this param
     * @return no
     */
    public function setPrenom($prenom) 
    {
        $this->_prenom = $prenom;
    }

     /**
     * GetEmail
     * return
     * @return string $_email
     */
    public function getEmail() 
    {
        return $this->_email;
    }

     /**
     * SetEmail
     * set
     * @param string $email about this param
     * @return string $email
     */
    public function setEmail($email) 
    {
        $this->_email = $email;
    }

     /**
     * GetEmailConfirm
     * return confirm email
     * @return string $_email
     */
    public function getEmailConfirm() 
    {
        return $this->_email;
    }

     /**
     * SetEmailConfirm
     * set confirm email
     * @param string $emailConfirm about this param
     * @return no
     */
    public function setEmailConfirm($emailConfirm) 
    {
        $this->_emailConfirm = $emailConfirm;
    }

     /**
     * GetPwd
     * return pwd
     * @return string ($_pwd)
     */
    public function getPwd() 
    {
        return $this->_pwd;
    }

     /**
     * SetPwd
     * what the function does
     * @param string $pwd about this param
     * @return string $pwd
     */
    public function setPwd($pwd) 
    {
        $this->_pwd = $pwd;
    }

     /**
     * GetPwdConfirm
     * what the function does
     * @return string $_pwdConfirm
     */
    public function getPwdConfirm() 
    {
        return $this->_pwdConfirm;
    }

     /**
     * SetPwdConfrim
     * what the function does
     * @param string $pwdConfirm about this param
     * @return no
     */
    public function setPwdConfrim($pwdConfirm) 
    {
        $this->_pwd = $pwdConfirm;
    }

      /**
     * GetToken
     * what the function does
     * @return string ($_token)
     */
    public function getToken() 
    {
        return $this->_token;
    }

     /**
     * GetToken
     * what the function does
     * @param string $token about this param
     * @return no
     */
    public function setToken($token) 
    {
        $this->_token = $token;
    }

     /**
     * GetImg
     * what the function does
     * @return string $_img
     */
    public function getImg() 
    {
        return $this->_img;
    }

     /**
     * SetImg
     * what the function does
     * @param string $img about this param
     * @return no
     */
    public function setImg($img) 
    {
        $this->_img = $img;
    }

     /**
     * GetId
     * what the function does
     * @return int $_id
     */
    public function getId() 
    {
        return $this->_id;
    }

     /**
     * SetId
     * what the function does
     * @param int $id about this param
     * @return no
     */
    public function setId($id) 
    {
        $this->_id = $id;
    }

     /**
     * Inscription
     * suscribe the user
     * @param string $connect about this param
     * @return no
     */
    public function inscription($connect) 
    {
        $exist = "SELECT login FROM user";
        $reqExist = $connect->prepare($exist);
        $reqExist->execute();
        $dataExist = $reqExist->fetchAll();
    
        foreach ($dataExist as $value) {
            $login = $value['login'];
        }

        if (isset($_POST['prenom']) && isset($_POST['nom']) && isset($_POST['email']) && isset($_POST['login']) && isset($_POST['pwd']) && isset($_POST['pwdConfirm'])) {
            $this->_nom = $_POST['nom'];
            $this->_prenom = $_POST['prenom'];
            $this->_login = $_POST['login'];
            $this->_pwd = $_POST['pwd'];
            $this->_pwdConfirm = $_POST['pwdConfirm'];
            $this->_email = $_POST['email'];

            if ($this->_pwd == $this->_pwdConfirm) {
                $this->_pwd = sha1($this->_pwdConfirm);
                $insertAccount = "INSERT INTO user VALUES ('', :nom, :prenom, :login, :email, :pwd, :img)";
                $register = $connect->prepare($insertAccount);
                $register->execute(
                    array(
                    ':nom' => $this->_nom,
                    ':prenom' => $this->_prenom,
                    ':login' => $this->_login,
                    ':email' => $this->_email,
                    ':pwd' => $this->_pwd,
                    ':img' => 0)
                );
            }
        } else {
            die("pb");
            exit();
        }
    }

     /**
     * Connexion
     * Connect the user
     * @param string $connect about this param
     * @return no
     */
    public function connexion($connect)
    {
        $id;
        $login = "";
        $pwd = "";
        if (isset($_POST['login']) && isset($_POST['pwd'])) {
        
            $this->_login = $_POST['login'];
            $this->_pwd = sha1($_POST['pwd']);
            $connecting = "SELECT id_user, login, password FROM user WHERE login = :login AND password = :pwd";
            $reqCo = $connect->prepare($connecting);
            $reqCo->execute(
                array(
                ':login' => $this->_login,
                ':pwd' => $this->_pwd)
            );
        
            $dataCo = $reqCo->fetch();
            $id = $dataCo['id_user'];
            $login = $dataCo['login'];
            $pwd = $dataCo['password'];
        
            if ($login == $this->_login && $pwd == $this->_pwd) {
                $_SESSION['id'] = $id;
                $_SESSION['login'] = $this->_login;
                $basic = "../asset/img/no_user.jpg";
            
                if ($this->_img == 0) {
                    $insertImg = "INSERT INTO img VALUES ('', :id_user , :basic)";
                    $reqImg = $connect->prepare($insertImg);
                    $test = $reqImg->execute(
                        array(
                        ':id_user' => $_SESSION['id'],
                        ':basic' => $basic)
                    );
                
                    $updtImgInt = "UPDATE users SET img = 1 WHERE id_user = :id";
                    $reqUpdtImgInt = $connect->prepare($updtImgInt);
                    $reqUpdtImgInt->execute(
                        array(
                        ':id' => $_SESSION['id'])
                    );
                    $_SESSION['img'] = $basic;
                    $this->_img = 1;
                }
                header("Location: ../Main/home.php");
                exit();
            } else {
                // exit();
                die("Unable to connect");
            }
        } else {
            die("error");
        }
    }

     /**
     * Deconnexion
     * Disconnect
     * 
     * @return no
     */
    public function deconnexion() 
    {
        session_start();
        session_unset();
        session_destroy();
        header('Location: ../index.php');
        exit();
    }


     /**
     * Forgot
     * Resend a password
     * @param string $connect about this param
     * @return no
     */
    public function forgot($connect) 
    {
        if (isset($_POST['forgotMail']) && !empty($_POST['forgotMail']) && isset($_POST['confirmMail']) && !empty($_POST['confirmMail'])) {
            $this->_email = $_POST['forgotMail'];
            $this->_emailConfirm = $_POST['confirmMail'];
            if ($this->_email == $this->_emailConfirm) {
                $selectForgot = "SELECT email FROM user WHERE email = :email";
                $reqForgot = $connect->prepare($selectForgot);
                $reqForgot->execute(
                    array(
                    ':email' => $this->_email)
                );
                $dataForgot = $reqForgot->fetch();
                if ($dataForgot['email']) {
                    $link = "http://localhost:8080/PHP_Avance_RSS_Feed/PHP/create.php";
                    $message = "Cliquez sur ce lien pour creer un nouveau mot de passe " . $link;
                    $obj = "Nouveau mot de passe";
                    mail($this->_email, $obj, $message);
                }
            }
        }
    }

     /**
     * EditPassword
     * Edit the pwd
     * @param string $connect about this param
     * @return no
     */
    public function editPassword($connect) 
    {
        $recupPwd = "SELECT password FROM user WHERE id_user = :id";
        $recupPwd = $connect->prepare($recupPwd);
        $recupPwd->execute(
            array(
            ':id' => $_SESSION['id'])
        );
        $dataPwd = $recupPwd->fetch();
        $this->_pwd = $dataPwd['pwd'];
        if (isset($_POST['edit-password']) && !empty($_POST['edit-password']) && isset($_POST['edit-password-confirm']) && !empty($_POST['edit-password-confirm'])) {
            $pwd = $_POST['edit-password'];
            $confirm = $_POST['edit-password-confirm'];
            if ($pwd == $confirm) {
                $this->_pwd = sha1($_POST['edit-password']);
                $updtPwd = "UPDATE user SET password = :pwd WHERE id_user = :id";
                $reqUpdtPwd = $connect->prepare($updtPwd);
                $reqUpdtPwd->execute(
                    array(
                    ':pwd' => $this->_pwd,
                    ':id' => $_SESSION['id'])
                );
            }
        }
    }

     /**
     * RecupInfo
     * RecupInfo
     * @param string $connect about this param
     * @return $dataRecup
     */
    public function recupInfo($connect)
    {
        $recup = "SELECT * FROM user WHERE id_user = :id";
        $reqRecup = $connect->prepare($recup);
        $reqRecup->execute(
            array(
            ':id' => $_SESSION['id'])
        );
        $dataRecup = $reqRecup->fetch();

        return $dataRecup;
    }

     /**
     * EditProfil
     * EditP
     * @param string $connect about this param
     * @return $dataRecup
     */
    public function editProfil($connect)
    {
        $data = $this->recupInfo($connect);
        
        $this->_nom = $data['nom'];
        $this->_prenom = $data['prenom'];
        $this->_login = $data['login'];
        $this->_email = $data['email'];

        if (isset($_POST['edit-nom']) && !empty($_POST['edit-nom'])) {   
            $this->_nom = $_POST['edit-nom'];
        }

        if (isset($_POST['edit-prenom']) && !empty($_POST['edit-prenom'])) {   
            $this->_prenom = $_POST['edit-prenom'];
        }

        if (isset($_POST['edit-login']) && !empty($_POST['edit-login'])) {   
            $this->_login = $_POST['edit-login'];
        }

        if (isset($_POST['edit-email']) && !empty($_POST['edit-email'])) {   
            $this->_email = $_POST['edit-email'];
        }

        $updtInfo = "UPDATE user SET nom = :nom, prenom = :prenom, login = :login, email = :email WHERE id_user = :id";
        $reqUpdtInfo = $connect->prepare($updtInfo);
        $reqUpdtInfo->execute(
            array(
            ':nom' => $this->_nom,
            ':prenom' => $this->_prenom,
            ':login' => $this->_login,
            ':email' => $this->_email,
            ':id' => $_SESSION['id'])
        );
        $_SESSION['login'] = $this->_login;     
    }

    /**
     * AfficheImg
     * AffImg
     * @param string $connect about this param
     * @return $dataImg
     */
    public function afficheImg($connect)
    {
        $affImg = "SELECT name FROM img WHERE id_user = :id";
        $affReq = $connect->prepare($affImg);
        $affReq->execute(
            array(
            ':id' => $_SESSION['id'])
        );
        $dataImg = $affReq->fetch();

        $_SESSION['img'] = $dataImg['name'];
        
        return $dataImg;

    }

    /**
     * UploadImg
     * UpImg
     * @param string $connect about this param
     * @return no
     */
    public function uploadImg($connect)
    {
        $goodExt = array( 'jpg' , 'jpeg' , 'gif' , 'png' );

        $_FILES['pic']['name'];
        $_FILES['pic']['type'];
        $_FILES['pic']['size'];
        $_FILES['pic']['tmp_name'];
        $_FILES['pic']['error'];

        if ($_FILES['pic']['error'] == 2 || $_FILES['pic']['error'] == 1) {
            die("Desole, la taille de l'image est trop grande");
        } else if ($_FILES['pic']['error'] == 3) {
            die("Une erreur est survenue lors de l'upload de l'image");
        } else if ($_FILES['pic']['error'] == 4) {
            die("Aucun fichier n'a été téléchargé");
        } else {

            $uploadExt = strtolower(substr(strrchr($_FILES['pic']['name'], '.'), 1));

            if (in_array($uploadExt, $goodExt)) {
                $filesName = "../asset/avatar/" . $_SESSION['id'] . "." . $uploadExt;

                $result = move_uploaded_file($_FILES['pic']['tmp_name'], $filesName);

                if ($result) {
                    $up = "UPDATE img SET name = :name WHERE id_user = :uid";
                    $upReq = $connect->prepare($up);
                    $upReq->execute(
                        array(
                        ':name' => $filesName,
                        ':uid' => $_SESSION['id'])
                    );
                }

            }
        }
    }

    /**
     * DeletePic
     * DelPic
     * @param string $connect about this param
     * @return no
     */
    public function deletePic($connect)
    {
        $basic = "../asset/img/no_user.jpg";

        if (isset($_POST['del'])) {
            $updPic = "UPDATE img set name = :basic WHERE id_user = :uid";
            $reqDelPic = $connect->prepare($updPic);
            $toto = $reqDelPic->execute(
                array(
                ':basic' => $basic,
                ':uid' => $_SESSION['id'])
            );

            $_SESSION['img'] = $basic;
        }
    }
}
?>