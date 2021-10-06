<?php
session_start();
if(!$_SESSION["name"] || $_SESSION["rule"]!=1) {
  header("Location:../");
  }

  ?>

<?php include "parts/header.php"; ?>
<?php include "parts/navbar.php"; ?>




<?php echo $_SESSION["name"]; ?>
<?php echo $_SESSION["rule"]; ?>
    <div class="container">
</div>
  
  <?php if(!empty($loopArticle)){echo $loopArticle;} ?>
</div>

<?php if(!empty($thePost)){echo $thePost;} ?>


