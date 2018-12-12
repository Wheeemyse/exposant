<?php
$title = "Inscription Exposant";
ob_start();
 ?>

<h1 class="page-title">Inscription</h1>
<div class="home-container" style="text-align: center;">

  <form class="" action="index.php?router=login&action=signup" method="post">
    <div class="input-field col s12">
      <label class="labelform" for="nom" style="margin-top:20px">Nom:</label><br>
      <input type="text" class="inputform validate" id="nom" name="name" value="" required><br>
    </div>

    <div class="input-field col s12">
      <label class="labelform" for="prenom" style="margin-top:20px">Prenom:</label><br>
      <input type="text" class="inputform validate" name="firstname" id="firstname" value="" required><br>
    </div>

    <div class="input-field col s12">
      <label class="labelform" for="email" style="margin-top:20px">E-mail:</label><br>
      <input type="email" class="inputform validate" name="email" id="email" value="" required><br>
    </div>

    <div class="input-field col s12">
      <label class="labelform" for="mdp" style="margin-top:20px">Mot de passe:</label><br>
      <input type="password" class="inputform validate" name="password" id="password" value="" required><br>
    </div>

    <div class="input-field col s12">
      <label class="labelform" for="mdp" style="margin-top:20px">Confirmer le mot de passe:</label><br>
      <input type="password" class="inputform validate" name="passwordconfirm" id="passwordconfirm" value="" required><br>
    </div>

    <div class="g-recaptcha center" data-sitekey="6LdTg3QUAAAAADr5ahVGo92NqWTTSbO3Ww4iEIkq"></div><br>

    <input type="submit" class="waves-effect waves-light btn-large" name="send" value="Inscription">
  </form>

</div>
<?php
$content = ob_get_clean();
require "view/element/template/basicTemplate.php";
?>
