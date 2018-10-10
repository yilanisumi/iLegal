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

    <h3 class="master-center">
      Saved Forms
    </h3>

    <ul class="ui grid forms-list">
      <?php 
        include("templates/database-connector.php");
        $sql = $conn->prepare("SELECT * FROM filled_pdfs WHERE UniqueIDOfUser = ?;");
        $sql->bind_param("s", $_SESSION['ID']);
        $sql->execute();
        $result = $sql->get_result();
        for($i = 0; $i < $result->num_rows; $i++){
          $form = $result->fetch_assoc();
          include("templates/saved-form-card.php");
        }
      ?>
    </ul>
    <form class="ui form forms-list" action="helpers/uploadpdf.php" method="post">
      <input type="file" name="pdf" accept="application/pdf">
      <button class="ui master-center button" type="submit">Upload</button>
    </form>

    <!-- Scripts -->
    <?php include('all-scripts.php');?>
  </body>
</html>