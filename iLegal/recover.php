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

    <form class="ui form custom-margin-hor-big">
      <div class="field">
        <label>Account Email</label>
        <input type="text" name="recoverEmail" placeholder="Account Email">
      </div>
      <button class="ui button float-right">Send Password Recovery Email</button>
      <a href="login.php">< Back</a>
    </form>

    <!-- Scripts -->
    <?php include('all-scripts.php');?>
  </body>
</html>