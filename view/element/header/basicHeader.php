<?php
  if(isset($_SESSION["user_email"])){ ?>

    <div class="navbar-fixed">
      <nav class="navbar">
        <div class="nav-wrapper">
          <a href="#" class="brand-logo"><img src="public/img/chalet.png" class="logo" alt=""></a>
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

    <img src="public/img/header.jpg" class="imgheader" alt="">

<?php }
else{ ?>

  <div class="navbar-fixed">
    <nav class="navbar">
      <div class="nav-wrapper">
        <a href="#" class="brand-logo"><img src="public/img/chalet.png" class="logo" alt=""></a>
        <a href="#" data-target="testburger" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
          <li><a class="nav-link" href="index.php">Accueil</a></li>
          <li><a  class="nav-link" href="index.php?router=mainRouter&action=connection">Connexion</a></li>
          <li><a  class="nav-link" href="index.php?router=mainRouter&action=inscription">Inscription</a></li>
        </ul>
      </div>
    </nav>
  </div>

  <ul id="testburger" class="sidenav">
    <li><a class="nav-link" href="index.php">Accueil</a></li>
    <li><a  class="nav-link" href="index.php?router=mainRouter&action=connection">Connexion</a></li>
    <li><a  class="nav-link" href="index.php?router=mainRouter&action=inscription">Inscription</a></li>
  </ul>

  <img src="public/img/header.jpg" class="imgheader" alt="">


<?php } ?>
