<?php 
include "parts/header.php"; ?>

<div class="d-flex align-items-center h-100">

<main class="form-signin">
  <form method="POST">
    <img class="mb-4" src="public/img/followers.png" alt="" width="40" height="40">
    <span class="logotext"><span class="logotextbold">Student</span>Follow</span>
  

    <div class="form-floating mb-4">
    <label for="floatingInput">Identifiant</label>
      <input type="text" class="form-control" id="floatingInput" name="login" placeholder="Entrez votre identifiant">
    
    </div>
    <div class="form-floating mb-4">
    <label for="floatingPassword">Mot de passe</label>
      <input type="password" class="form-control" id="floatingPassword" name="passwd" placeholder="Entrez votre mot de passe">
      
    </div>

    
    <button class="w-100 btn btn-lg btn-action" type="submit">Connexion</button>
   
  </form>
</main>
</div>
<!-- <?php include "parts/footer.php"; ?> -->