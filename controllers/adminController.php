<?php

require_once(__DIR__.'/../models/post.php');
require_once(__DIR__.'/../models/User.php');
require_once(__DIR__.'/../models/Admin.php');

/**
 * singlePost
 *
 * @return void
 */
function adminPanel(){
    require(__DIR__.'/../views/template.php');
}

function addUser(){

    require(__DIR__.'/../views/userForm.php'); 
    if(isset($_POST['login'])){
        $adduser = new User;
        $adduser = $adduser->ifExist();
    }

}