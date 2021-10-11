<?php

require_once(__DIR__ . '/../models/post.php');
require_once(__DIR__ . '/../models/User.php');
require_once(__DIR__ . '/../models/Admin.php');

/**
 * singlePost
 *
 * @return void
 */
function adminPanel()
{
    require(__DIR__ . '/../views/template.php');
}



/**
 * Adding user in database, display form and error message
 *
 * @return void
 */
function addUser()
{
    if (isset($_POST['login'])) {
        $adduser = new User;
        $adduser = $adduser->ifExist();
    }

        $alluser = new User;
        $alluser = $alluser->getAllUsers();


    require(__DIR__ . '/../views/userList.php');
    require(__DIR__ . '/../views/userForm.php');
    require_once(__DIR__ . '/../views/template.php');
    
}
