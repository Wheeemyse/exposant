<?php

$title = 'Accueil membre';
ob_start();
?>

<h1 class="page-title">Mon espace exposant</h1>

<div class="home-container">
  <p class="home-caption">Bienvenue dans votre espace <?php echo $_SESSION['name']; ?> </p>
  <p class="home-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
    Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
  <div style="Text-align: center;">
    <a href="index.php?router=user&action=form_application" class="waves-effect waves-light btn-large button-expo">Deposer son dossier</a><br>
    <a href="index.php?router=user&action=show_user_application" class="waves-effect waves-light btn-large button-expo">Afficher son dossier</a>
  </div>
</div>

<?php
 $content = ob_get_clean();
 require "view/element/template/basicTemplate.php";
?>
