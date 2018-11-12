<?php
$title = "Connexion Exposant";
ob_start();
?>

<h1>Connexion</h1>

<div class="form-container" style="text-align: center;">

  <form class="" action="index.php?router=login&action=signin" method="post">

    <label for="email" style="margin-top:20px">E-mail:</label><br>
    <input type="email" name="email_signin" id="email_signin" value="" required><br>

    <label for="mdp" style="margin-top:20px">Mot de passe:</label><br>
    <input type="password" name="password_signin" id="password_signin" value="" required><br>

    <input type="submit" name="send" value="Connexion">

  </form>

</div>

<?php
$content = ob_get_clean();
require "view/element/template/basicTemplate.php";
?>
