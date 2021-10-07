<?php 
//$title="Détail de l'article".$post['title']."";
ob_start();



?>

<div class="d-flex align-items-center h-100">

<main class="form-signin">
  <form method="POST">
 
  

    <div class="form-floating mb-4">
    <label for="floatingInput">Identifiant</label>
      <input type="text" class="form-control" id="floatingInput" name="login" placeholder="Entrez votre identifiant">
    
    </div>
    <div class="form-floating mb-4">
    <label for="floatingPassword">Mot de passe</label>
      <input type="password" class="form-control" id="floatingPassword" name="passwd" placeholder="Entrez votre mot de passe">
      
    </div>

    <div class="form-floating mb-4">
    <label for="floatingPassword">mail</label>
      <input type="email" class="form-control" id="floatingPassword" name="email" placeholder="Entrez votre mot de passe">
      
    </div>

    <div class="form-floating mb-4">
    <label for="floatingPassword">rule</label>
      <input type="text" class="form-control" id="floatingPassword" name="rule" placeholder="Entrez votre mot de passe">
      
    </div>

    
    <button class="w-100 btn btn-lg btn-action" type="submit">Connexion</button>
   
  </form>
</main>
</div>


<?php 
//$metaDesc = $post['title'].' : '.$post['content'];
$thePost =  ob_get_clean();
require_once('template.php');

?>0