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
      Email Us
    </h3>

    <form class="ui form custom-margin-hor-big grey-label" action="helpers/emailHelper.php" method="post">
      <div class="field">
        <label>Subject</label>
        <input type="text" name="emailSubject" placeholder="">
      </div>
      <div class="field">
        <label>Content</label>
        <textarea rows="10" class="fluid"></textarea>
        <input type="hidden" name="emailContent">
      </div>
      <button class="ui button" type="submit">Send</button>
    </form>

    <!-- Scripts -->
    <?php include('all-scripts.php');?>
  </body>
</html>