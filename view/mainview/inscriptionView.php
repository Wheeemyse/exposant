<?php
$title = "Inscription Exposant";
ob_start();
 ?>

<h1>Inscription</h1>
<div class="form-container" style="text-align: center;">

  <form class="" action="index.php?router=login&action=signup" method="post">

    <label for="nom" style="margin-top:20px">Nom:</label><br>
    <input type="text" id="nom" name="name" value="" required><br>

    <label for="prenom" style="margin-top:20px">Prenom:</label><br>
    <input type="text" name="firstname" id="firstname" value="" required><br>

    <label for="email" style="margin-top:20px">E-mail:</label><br>
    <input type="email" name="email" id="email" value="" required><br>

    <label for="mdp" style="margin-top:20px">Mot de passe:</label><br>
    <input type="password" name="password" id="password" value="" required><br>

    <label for="mdp" style="margin-top:20px">Confirmer le mot de passe:</label><br>
    <input type="password" name="passwordconfirm" id="passwordconfirm" value="" required><br>

    <div class="g-recaptcha center" data-sitekey="6LdTg3QUAAAAADr5ahVGo92NqWTTSbO3Ww4iEIkq"></div><br>

    <input type="submit" name="send" value="Inscription">
  </form>

</div>
<?php
$content = ob_get_clean();
require "view/element/template/basicTemplate.php";
?>
