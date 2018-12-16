<?php
$title = "Accueil";
ob_start();
?>

<div class="home-container">
  <h1 class="page-title">Devenez exposant sur le marché de Noël de Charleville-Mézières&nbsp;!</h1>
  <img src="public/img/logo2.png" class="home-image" alt="Noel en ardenne">
  <p class="home-text">Après le succès rencontré par le marché de Noël de la ville de Charleville-Mézières lors de l'hiver précédent,
    les différents services municipaux se sont données comme objectif de faire de l'édition 2019 un événement encore plus merveilleux! </p>
  <p class="home-caption">Vous souhaitez participer avec nous à faire de cet évènement un grand succès? <br>Inscrivez-vous en ligne dès maintenant!</p>
  <a href="index.php?router=mainRouter&action=inscription" class="waves-effect waves-light btn-large signup-button">Inscription</a>
</div>

<?php
 $content = ob_get_clean();
 require "view/element/template/basicTemplate.php";
?>
