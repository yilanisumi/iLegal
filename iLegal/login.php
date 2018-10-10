<?php 
  session_start();
  session_unset();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Meta Tags -->
    <?php include("meta-tags.php");?>

    <title>ILegalSelfHelp</title>

    <!-- CSS link -->
    <?php include("all-css.php");?>
  </head>
  <body>
    
    <?php include("templates/big-logo-header.php") ?>

    <form class = "ui form custom-margin-hor-big grey-label" action="helpers/loginCheck.php", method="post">
      <div class="field">
        <label>Email</label>
        <input type="text" name="loginEmail" placeholder="Email">
      </div>
      <div class="field">
        <label>Password</label>
        <input type="password" name="loginPassword" placeholder="Password">
      </div>
      <button class="ui button" type="submit">Login</button>
      <a class="float-right" href="recover.php">Forgot Password</a>
      <a class="float-right custom-pad-hor-small" href="signup.php">Create New Account</a>
    </form>

    <!-- Scripts -->
    <?php include('all-scripts.php');?>
  </body>
</html>