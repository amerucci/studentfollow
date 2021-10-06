<?php
session_start();
if(!$_SESSION["name"]) {
  header("Location:../");
  }

  ?>

<?php include "parts/header.php"; ?>
<?php include "parts/navbar.php"; ?>




<?php echo $_SESSION["name"]; ?>
    <div class="container">
</div>
  
  <?php if(!empty($loopArticle)){echo $loopArticle;} ?>
</div>

<?php if(!empty($thePost)){echo $thePost;} ?>


