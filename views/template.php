<?php
session_start();
if (!$_SESSION["name"] || $_SESSION["rule"] != 1) {
  header("Location:../");
}



?>

<!-- <?php echo $_SESSION["name"]; ?>
<?php echo $_SESSION["rule"]; ?> -->

<?php include "parts/header.php"; ?>
<?php include "parts/navbar.php"; ?>

<div class="container-fluid d-flex h-100 flex-wrap">





  <?php if (!empty($userForm)) {
    echo $userForm;
  } ?>
  <?php if (!empty($userList)) {
    echo $userList;
  } ?>

</div>