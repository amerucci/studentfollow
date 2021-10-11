
<?php

//var_dump($_GET);
require_once(__DIR__.'/controllers/frontController.php');
require_once(__DIR__.'/controllers/homeController.php');
require_once(__DIR__.'/controllers/adminController.php');


$page='';
if(isset($_GET['page'])){
    $page = explode('/', $_GET['page']);
}

if($page==''){
    echo logIn();
}

else if($page[0]=='admin'){
    if(!empty($page[1]) && $page[1]=="users"){
        echo addUser();
    }
    else{
        
        echo adminPanel();
    }
}

else if($page[0]=='student'){
    echo "Vous êtes sur la page d'un apprenant";
    // if(!empty($page[1])){
    //     echo singlePost();
    // }
    // else{
        
    //     echo all();
    // }
}

else if($page[0]=='article'){
    if(!empty($page[1])){
        echo singlePost();
    }
    else{
        echo all();
    }

}else if($page='login'){
   echo logIn();
  
  }




//var_dump($page);

?>