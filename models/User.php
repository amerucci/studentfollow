<?php
require_once('connection.php');

class User extends Databases
{

    public function logIn()
    {
        $login =  $this->connect()->prepare('SELECT * FROM users WHERE login =:nom AND passwd=:mdp ');
        $login->bindParam(':nom', $_POST['login'], PDO::PARAM_STR);
        $login->bindParam(':mdp', $_POST['passwd'], PDO::PARAM_STR);
        $login->execute();
        $login = $login->fetch(PDO::FETCH_ASSOC);
        echo $login['login'];
        if (is_array($login)) {
            $_SESSION["name"] = $login['login'];
            $_SESSION["rule"] = $login['rule'];
            if ($login['rule'] == 1) {
                $this->redirect('admin', '0');
            } else if ($login['rule'] == 2) {
                $this->redirect('student', '0');
            } else {
                $this->redirect('/', '0');
            }
        }
    }

    public function addUser()
    {

        $login                  = htmlspecialchars($_POST['login']);
        $passwd                 = htmlspecialchars($_POST['passwd']);
        $email                  = htmlspecialchars($_POST['email']);
        $rule                   = htmlspecialchars($_POST['rule']);

        //Chiffrage mot de passe

        $passwd = "amabvmpm" . sha1($passwd . "h2w8fevn@O") . "7385";
        var_dump($passwd);

        $ajouter =  $this->connect()->prepare('INSERT INTO users (login, passwd, email, rule) VALUES (:login, :passwd, :email, :rule)');
        $ajouter->bindParam(':login', $login, PDO::PARAM_STR);
        $ajouter->bindParam(':passwd', $passwd, PDO::PARAM_STR);
        $ajouter->bindParam(':email', $email, PDO::PARAM_STR);
        $ajouter->bindParam(':rule', $rule, PDO::PARAM_STR);
        $estceok = $ajouter->execute();
       
        if ($estceok) {
            echo '<div class="container mt-3"><div class="col-12 alert alert-success">votre enregistrement a été ajouté avec succés</div></div>';
            $this->redirect('../admin', '3');
        } else {
            echo '<div class="container mt-3"><div class="col-12 alert alert-danger">Veuillez recommencer svp, une erreur est survenue</div></div>';
            die;
        }
    }

    public function ifExist()
    {

        $login                  = htmlspecialchars($_POST['login']);

        $verification =  $this->connect()->prepare('SELECT login FROM users WHERE login =:pseudo');
        $verification->bindParam(':pseudo', $login, PDO::PARAM_STR);
        $verification->execute();
        //     $verification->debugDumpParams();
        //    die;


        $verification = $verification->fetch(PDO::FETCH_ASSOC);
        if (is_array($verification)) {
            //echo "Ce pseudo est déjà pris";
            echo '<div class="container mt-3"><div class="col-12 alert alert-danger">Ce pseudo est déjà pris</div></div>';
        } else {
            $this->addUser();
        }
    }
}
