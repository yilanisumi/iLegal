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

    <form class = "ui form custom-margin-hor-big" action="helpers/signupHelper.php" method="post">
      <div class="field">
        <label>First Name</label>
        <input type="text" name="signupFirstName" placeholder="First Name">
      </div>
      <div class="field">
        <label>Middle Initial (Optional)</label>
        <input type="text" name="signupMiddleName" placeholder="Middle Initial (Optional)">
      </div>
      <div class="field">
        <label>Last Name</label>
        <input type="text" name="signupLastName" placeholder="Last Name">
      </div>
      <div class="field">
        <label>Email</label>
        <input type="text" name="signupEmail" placeholder="Email">
      </div>
      <div class="field">
        <label>Password</label>
        <input type="password" name="signupPassword" placeholder="Password">
      </div>
      <div class="field">
        <label>Confirm Password</label>
        <input type="password" name="signupConfirm" placeholder="Confirm Password">
      </div>
      <button class="ui button float-right custom-margin-top-small" type="submit">Create New Account</button>
      <a href="login.php">Log in with Existing Account</a>
    </form>

    <!-- Scripts -->
    <?php include('all-scripts.php');?>
  </body>
</html>