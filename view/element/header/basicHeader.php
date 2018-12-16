<?php
  if(isset($_SESSION["user_type"]) && $_SESSION["user_type"] == 0){ ?>

    <div class="navbar-fixed">
      <nav class="navbar">
        <div class="nav-wrapper">
          <a href="index.php" class="brand-logo"><img src="public/img/logo2.png" class="logo" alt=""></a>
          <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
          <ul class="right hide-on-med-and-down">
            <li><a class="nav-link" href="index.php">Accueil</a></li>
            <li><a class="nav-link" href="index.php?router=user&action=home">Profil</a></li>
            <li><a  class="nav-link" href="index.php?router=login&action=signout">Deconnexion</a></li>
          </ul>
        </div>
      </nav>
    </div>

    <ul id="mobile-demo" class="sidenav">
      <li><a class="nav-link" href="index.php">Accueil</a></li>
      <li><a class="nav-link" href="index.php?router=user&action=home">Profil</a></li>
      <li><a  class="nav-link" href="index.php?router=login&action=signout">Deconnexion</a></li>
    </ul>
    <div class="parallax-container">
      <div class="parallax"><img src="public/img/header31.png"></div>
    </div>
    

<?php }
elseif(isset($_SESSION["user_type"]) && $_SESSION["user_type"] == 1){ ?>
  <div class="navbar-fixed">
    <nav class="navbar">
      <div class="nav-wrapper">
        <a href="index.php" class="brand-logo"><img src="public/img/logo2.png" class="logo" alt=""></a>
        <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down">
          <li><a class="nav-link" href="index.php">Accueil</a></li>
          <li><a class="nav-link" href="index.php?router=admin&action=home">Profil</a></li>
          <li><a  class="nav-link" href="index.php?router=login&action=signout">Deconnexion</a></li>
        </ul>
      </div>
    </nav>
  </div>

  <ul id="mobile-demo" class="sidenav">
    <li><a class="nav-link" href="index.php">Accueil</a></li>
    <li><a class="nav-link" href="index.php?router=admin&action=home">Profil</a></li>
    <li><a class="nav-link" href="index.php?router=login&action=signout">Deconnexion</a></li>
  </ul>
  <div class="parallax-container">
    <div class="parallax"><img src="public/img/header31.png"></div>
  </div>

<?php }
else{ ?>

  <div class="navbar-fixed">
    <nav class="navbar">
      <div class="nav-wrapper">
        <a href="index.php" class="brand-logo"><img src="public/img/logo2.png" class="logo" alt=""></a>
        <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
          <li><a class="nav-link" href="index.php">Accueil</a></li>
          <li><a  class="nav-link" href="index.php?router=mainRouter&action=connection">Connexion</a></li>
          <li><a  class="nav-link" href="index.php?router=mainRouter&action=inscription">Inscription</a></li>
        </ul>
      </div>
    </nav>
  </div>

  <ul id="mobile-demo" class="sidenav">
    <li><a class="nav-link" href="index.php">Accueil</a></li>
    <li><a  class="nav-link" href="index.php?router=mainRouter&action=connection">Connexion</a></li>
    <li><a  class="nav-link" href="index.php?router=mainRouter&action=inscription">Inscription</a></li>
  </ul>
  <div class="parallax-container">
    <div class="parallax"><img src="public/img/header31.png"></div>
  </div>


<?php } ?>
