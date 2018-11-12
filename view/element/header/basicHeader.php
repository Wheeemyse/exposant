<?php
  if(isset($_SESSION["user_email"])){ ?>

    <nav>
      <a href="index.php">Accueil</a>
      <a href="index.php?router=user&action=home">Profil</a>
      <a href="index.php?router=login&action=signout">Deconnexion</a>
    </nav>

<?php }
else{ ?>

  <nav>
    <a href="index.php">Accueil</a>
    <a href="index.php?router=mainRouter&action=connection">Connexion</a>
    <a href="index.php?router=mainRouter&action=inscription">Inscription</a>
  </nav>

<?php } ?>
