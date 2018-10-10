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
    <?php 
      include("helpers/auto-redirect.php");
      include("templates/top-bar.php");
      include("templates/database-connector.php");
      $sql = $conn->prepare("SELECT * FROM user WHERE Email = ?");
      $sql->bind_param('s', $_SESSION['email']);
      $sql->execute();
      $result = $sql->get_result();
      $user = $result->fetch_assoc();
      if(empty($user)){
        header("Location: login.php");
      }
    ?>

    <h3 class="master-center">Account Info</h3>
    <form class = "ui form account-info" action="helpers/edit-account.php" method="post">
      <label>First Name</label>
      <input type="text" name="fn" value="<?php echo $user['FirstName'] ?>" readonly="readonly">
      <label>Middle Initial</label>
      <input type="text" name="mn" value="<?php echo $user['MiddleName'] ?>" readonly="readonly">
      <label>Last Name</label>
      <input type="text" name="ln" value="<?php echo $user['LastName'] ?>" readonly="readonly">
      <label>Date of Birth (yyyy-mm-dd)</label>
      <input type="text" name="dob" value="<?php echo $user['DOB'] ?>" readonly="readonly">
      <label>Email</label>
      <input type="text" name="email" value="<?php echo $user['Email'] ?>" readonly="readonly">
      <label>Phone Number</label>
      <input type="text" name="phone" value="<?php echo $user['PhoneNumber'] ?>" readonly="readonly">
      <label>Driver Licence</label>
      <input type="text" name="dl" value="<?php echo $user['DLNumber'] ?>" readonly="readonly">
      <label>Address</label>
      <input type="text" name="addr" value="<?php echo $user['Address1'] . $user['Address2'] ?>" readonly="readonly">
      <label>City</label>
      <input type="text" name="city" value="<?php echo $user['City'] ?>" readonly="readonly">
      <label>State</label>
      <input type="text" name="state" value="<?php echo $user['State'] ?>" readonly="readonly">
      <label>Zip Code</label>
      <input type="text" name="zip" value="<?php echo $user['ZipCode'] ?>" readonly="readonly">
      <button class="ui button custom-margin-top-small" type="button" id="edit-account">Edit</button>
      <button class="ui button custom-margin-top-small hidden" type="button" id="cancel-edit">Cancel</button>
      <button class="ui red button float-right custom-margin-top-small" type="button" id="logout">Logout</button>
      <button class="ui green button float-right custom-margin-top-small hidden" type="submit" id="save-info">Save</button>
    </form>

    <!-- Scripts -->
    <?php include('all-scripts.php');?>
  </body>
</html>