
<?php

var_dump($_GET);



$page='';
if(isset($_GET['page'])){
    $page = explode('/', $_GET['page']);
}

if($page==''){
    require_once(__DIR__.'/controllers/frontController.php');
    echo all();
}

else if($page[0]='article'){
    require_once(__DIR__.'/controllers/frontController.php');
    echo singlePost();
}

var_dump($page);

?>