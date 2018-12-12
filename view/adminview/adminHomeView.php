<?php

$title = 'Accueil administrateur';
ob_start();
?>

<h1 class="page-title">Page d'accueil</h1>
<div class="home-container">
  <p class="home-caption">Vous etês connecté en tant qu'administrateur de la ville de <?php echo $_SESSION['name']; ?> </p>
  <p class="home-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
    Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
  <div style="text-align: center;">
    <a href="index.php?router=admin&action=show_application" class="waves-effect waves-light btn-large button-expo">Voir les dossiers</a>
  </div>

</div>

<?php
 $content = ob_get_clean();
 require "view/element/template/basicTemplate.php";
?>
