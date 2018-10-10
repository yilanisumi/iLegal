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

    <ul class="ui three column grid categories-list">      
      <li class="row">
        <div class="column">
          <a href="forms.php?cat=Adoption">
            <img src="../assets/icons/adoption.png"><br>
            <span>Adoption</span>
          </a>
        </div>
        <div class="column">
          <a href="forms.php?cat=Civil">
            <img src="../assets/icons/civil.png"><br>
            <span>Civil</span>
          </a>
        </div>
        <div class="column">
          <a href="forms.php?cat=Crime">
            <img src="../assets/icons/crime.png"><br>
            <span>Crime</span>
          </a>
        </div>
      </li>
      <li class="row">
        <div class="column">
          <a href="forms.php?cat=Family">
            <img src="../assets/icons/family.png"><br>
            <span>Family</span>
          </a>
        </div>
        <div class="column">
          <a href="forms.php?cat=Fee">
            <img src="../assets/icons/feee.png"><br>
            <span>Fee</span>
          </a>
        </div>
        <div class="column">
          <a href="forms.php?cat=namechange">
            <img src="../assets/icons/name_change.png"><br>
            <span>Name Change</span>
          </a>
        </div>
      </li>
      <li class="row">
        <div class="column">
          <a href="forms.php?cat=Probate">
            <img src="../assets/icons/probate.png"><br>
            <span>Probate</span>
          </a>
        </div>
        <div class="column">
          <a href="forms.php?cat=Claim">
            <img src="../assets/icons/small_claimsss.png"><br>
            <span>Claim</span>
          </a>
        </div>
        <div class="column">
          <a href="forms.php?cat=Traffic">
            <img src="../assets/icons/traffic.png"><br>
            <span>Traffic</span>
          </a>
        </div>
      </li>
    </ul>

    <!-- Scripts -->
    <?php include('all-scripts.php');?>
  </body>
</html>