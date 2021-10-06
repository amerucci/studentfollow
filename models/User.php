<?php
require_once('connection.php');

class User extends Databases{

    public function logIn(){
        $login =  $this->connect()->prepare('SELECT * FROM users WHERE login =:nom AND passwd=:mdp '); 
        $login->bindParam(':nom', $_POST['login'], PDO::PARAM_STR);
        $login->bindParam(':mdp', $_POST['passwd'], PDO::PARAM_STR);
        $login->execute();
        $login = $login->fetch(PDO::FETCH_ASSOC);
        echo $login['login'];
        if(is_array($login)){
            $_SESSION["name"] = $login['login'];
            if($login['rule']==1){
                $this->redirect('admin', '0');
            }
            else if($login['rule']==2){
                $this->redirect('student', '0');
            }
                else{
                $this->redirect('/', '0');
            }
        }
}
}