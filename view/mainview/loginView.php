<?php
$title = "Connexion Exposant";
ob_start();
?>

<h1 class="page-title">Connexion</h1>

<div class="home-container">

  <form class="" action="index.php?router=login&action=signin" method="post" style="text-align: center;">
    <div class="input-field col s12">
      <label class="labelform" for="email" style="margin-top:20px">E-mail:</label><br>
      <input type="email" name="email_signin" id="email_signin" value="" required><br>
    </div>
    <div class="input-field col s12">
      <label class="labelform" for="mdp" style="margin-top:20px">Mot de passe:</label><br>
      <input type="password" name="password_signin" id="password_signin" value="" required><br>
    </div>
    <input class="waves-effect waves-light btn-large signup-button" type="submit" name="send" value="Connexion">

  </form>

</div>

<?php
$content = ob_get_clean();
require "view/element/template/basicTemplate.php";
?>
