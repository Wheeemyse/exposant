<div class="home-footer">
  <h3 class="footer-title">Noël en Ardenne</h3>

  <?php
  if(isset($_SESSION["user_type"]) && $_SESSION["user_type"] == 0){ ?>

    <p class="footer-separator">
      <a class="footer-link" href="index.php">Accueil</a>
      |
      <a class="footer-link" href="index.php?router=user&action=home">Profil</a>
      |
      <a class="footer-link" href="index.php?router=login&action=signout">Deconnexion</a>
    </p>
  <?php }
  elseif(isset($_SESSION["user_type"]) && $_SESSION["user_type"] == 1){ ?>
    <p class="footer-separator">
      <a class="footer-link" href="index.php">Accueil</a>
      |
      <a class="footer-link" href="index.php?router=admin&action=home">Profil</a>
      |
      <a class="footer-link" href="index.php?router=login&action=signout">Deconnexion</a>
    </p>
  <?php }
  else{ ?>
    <p class="footer-separator">
      <a class="footer-link" href="index.php">Accueil</a>
      |
      <a  class="footer-link" href="index.php?router=mainRouter&action=connection">Connexion</a>
      |
      <a  class="footer-link" href="index.php?router=mainRouter&action=inscription">Inscription</a>
    </p>
  <?php } ?>

  <p>© Tous droits réservés à Noel en Ardenne</p>
</div>
