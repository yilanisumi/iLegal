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
      <?php 
        if($_GET['cat'] == "namechange"){
          echo "Name Change";
        }else{
          echo $_GET['cat']; 
        }

        $categorie = strtolower($_GET['cat']);
        include("templates/database-connector.php");
        $sql = $conn->prepare("SELECT * FROM documents WHERE Category = ?;");
        $sql->bind_param("s", $categorie);
        $sql->execute();
        $result = $sql->get_result();
      ?>
    </h3>

    <ul class="ui grid forms-list">
      <?php 
        for($i = 0; $i < $result->num_rows; $i++){
          $form = $result->fetch_assoc();
          include("templates/form-card.php");
        }
      ?>
    </ul>

    <!-- Scripts -->
    <?php include('all-scripts.php');?>
  </body>
</html>