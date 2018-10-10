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
      $form_id = $_GET['id'];
      $sql = $conn->prepare("SELECT * FROM documents WHERE Id = ?;");
      $sql->bind_param('s', $form_id);
      $sql->execute();
      $ans = $sql->get_result();
      $row = $ans->fetch_assoc();
    ?>

    <h2> <?php echo $row["FileName"] ?> </h2>
    <form class="ui form account-info">
      <?php 
        $sql = $conn->prepare("SELECT * FROM pdf_structure WHERE pdf_id = ?;");
        $sql->bind_param('s', $form_id);
        $sql->execute();
        $form = $sql->get_result();
        $field = $form->fetch_assoc();
        for($i = 0; $i <= $form->num_rows; $i++){
          if($field["type"] == "Tx"){
            include("templates/text_field.php");
          }else if($field["type"] == "Btn"){
            include("templates/checkbox_field.php");
          }
        }
      ?>
      <button class="ui button float-right">Save</button>
      <!-- <div class="field custom-margin-bot-none">
        <label>*Yes No Question*</label>
      </div>
      <div class="inline fields">
        <div class="field">
          <div class="ui radio checkbox">
            <input type="radio" name="q1" value="yes">
            <label>Yes</label>
          </div>
        </div>
        <div class="field">
          <div class="ui radio checkbox">
            <input type="radio" name="q1" value="no">
            <label>No</label>
          </div>
        </div>
      </div>
      <button class="ui button float-right">Save</button>
    </form> -->


    <!-- Scripts -->
    <?php include('all-scripts.php');?>
  </body>
</html>