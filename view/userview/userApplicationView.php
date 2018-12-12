<?php
$title = "Inscription Exposant";
ob_start();
 ?>

<h1 class="page-title">Depôt de dossier de candidature</h1>
<div class="home-container" style="text-align: center;">

  <form class="" action="index.php?router=user&action=application" method="post">

    <div class="input-field col s12">
      <label class="labelform" for="app_societe">Société:</label><br>
      <input class="inputform validate" type="text" id="app_societe" name="app_societe" value=""><br>
    </div>

    <div class="input-field col s12">
      <label class="labelform" for="app_numero_registre">N° Registre de Commerce ou Registre des Métiers:</label><br>
      <input class="inputform validate" type="text" id="app_numero_registre" name="app_registre" value=""><br>
    </div>

    <div class="input-field col s12">
      <label class="labelform" for="app_adresse">Adresse:</label><br>
      <input class="inputform validate" type="text" id="app_adresse" name="app_adresse" value=""><br>
    </div>

    <div class="input-field col s12">
      <label class="labelform" for="app_codepostal">Code postal:</label><br>
      <input class="inputform validate" type="text" id="app_codepostal" name="app_codepostal" value=""><br>
    </div>

    <div class="input-field col s12">
      <label class="labelform" for="app_ville">Ville:</label><br>
      <input class="inputform validate" type="text" id="app_ville" name="app_ville" value=""><br>
    </div>

    <div class="input-field col s12">
      <label class="labelform" for="app_telephone">Telephone:</label><br>
      <input class="inputform validate" type="text" id="app_telephone" name="app_telephone" value=""><br>
    </div>

    <div class="input-field col s12">
      <label class="labeltextarea labelform" for="app_activite">Type d'activité:</label><br>
      <!-- <p>Limité à une même famille de produits ou à 2 produits différents maximum</p> -->
      <textarea class="inputform validate" name="app_activite" id="app_activite" rows="8" cols="80"></textarea><br>
    </div>

    <div class="input-field col s12">
      <label class="labelform" for="app_nombre_chalet">Nombre de chalets desirés:</label><br>
      <select class="inputform validate" id="app_nombre_chalet" name="app_nombre_chalet">
        <option disabled selected values></option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
      </select><br>
    </div>

    <div class="input-field col s12">
      <label class="labelform" for="app_location_mono">Location de chalet alimenté en monophasé 32 ampère:</label><br>
      <select class="inputform validate" id="app_location_mono" name="app_location_mono">
        <option></option>
        <option value="2mx2m">2m x 2m : 615€ </option>
        <option value="3mx3m">3m x 3m : 770€ </option>
        <option value="6mx2m">6m x 2m : 1495€ </option>
      </select><br>
    </div>
    <div class="input-field col s12">
      <!-- <p>Tarif préférentiel du 1er décembre  au 06 janvier inclus</p> -->
      <label class="labelform" for="app_location_tri">Location de chalet alimenté en triphasé 32 ampère:</label><br>
      <select class="inputform validate" id="app_location_tri" name="app_location_tri">
        <option></option>
        <option value="2mx2m">2m x 2m : 735€ </option>
        <option value="3mx3m">3m x 3m : 890€ </option>
        <option value="6mx2m">6m x 2m : 1615€ </option>
      </select><br>
    </div>
    <p>
      <label class="labelform">
        <input class="inputform validate" type="checkbox" class="filled-in" id="app_fin_anticipe" name="app_fin_anticipe" value="Fin de participation le 31 décembre">
        <span>Souhaite exceptionnellement mettre fin à sa participation le 31 décembre 2018 (majoration de 50€)</span>
      </label>
    </p>
    <p>
      <label class="labelform">
        <input class="inputform validate" type="checkbox" class="filled-in" id="app_placement_angle" name="app_placement_angle" value="Souhaite être placé dans un angle de la place Ducale">
        <span>Supplément pour chalet installé à un angle de la place Ducale 50€:</span>
      </label>
    </p>
      <!-- <p>Seuls les exposants dont le  chalet est installé à un angle de la Place Ducale sont autorisés à mettre des manges-debout (3 maximum) et des parasols.</p>
      <p>Rappel : Il est formellement interdit d’afficher de la publicité en faveur des boissons alcoolisées (affiches, mobilier, parasols, etc.).</p>

      <p>Nous vous rappelons que la demande de participation ne vaut pas acceptation au marché de Noël. </p>

      <p>Si votre candidature est retenue, nous vous adresserons un contrat de location. </p>

      <p>Dans le cas contraire, vous en serez informé(e) par courrier</p> -->
      <input type="submit" class="waves-effect waves-light btn-large button-expo" name="send_application" value="Deposer mon dossier d'inscription">
    </form>

  </div>
<?php
$content = ob_get_clean();
require "view/element/template/basicTemplate.php";
?>
