<?php

require_once(__DIR__.'/../models/post.php');
require_once(__DIR__.'/../models/User.php');

/**
 * singlePost
 *
 * @return void
 */
function logIn(){
  //echo __DIR__.'/../login.php';
  require(__DIR__.'/../login.php');
  if(isset($_POST['login'])&&isset($_POST['passwd'])){
    $userlogged = new User;
    $userlogged = $userlogged->logIn();
  }


    // $loginForm = new User();
    // $loginForm = $loginForm->thePost();
    // require(__DIR__.'/../views/viewPost.php');
}
