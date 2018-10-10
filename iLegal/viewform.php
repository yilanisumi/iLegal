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
    
    <?php include("helpers/auto-redirect.php"); ?>
    <?php include("templates/top-bar.php") ?>

    <?php 
      include("templates/database-connector.php");
      $sql = $conn->prepare("SELECT * FROM documents WHERE Id = ?;");
      $sql->bind_param('s', $_GET['form_id']);
      $sql->execute();
      $ans = $sql->get_result();
      $row = $ans->fetch_assoc();
    ?>
    <!-- <embed src="../assets/pdf/form.pdf" type='/pdf'> -->
    <embed src="<?php echo "../assets/pdf/". $row['FileURL'] ?>" type='application/pdf'>

    <button class="ui button master-center"><a href="fillform.php?id=<?php echo $_GET['form_id']?>">Fill Out</a></button>
    <!-- <button class="ui button master-center" id="savepdf">Save</button> -->
    <!-- Scripts -->
    <?php include('all-scripts.php');?>
  </body>
</html>