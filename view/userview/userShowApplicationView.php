<?php
global $userFolder;
$title = 'Dossier exposant';
ob_start();
?>

<h1 class="page-title">Mon dossier exposant</h1>
<div class="home-container">

  <div style="overflow-x:auto;">
    <table>
      <tr>
        <th>Société</th>
        <th>N° Registre</th>
        <th>Adresse</th>
        <th>Code postal</th>
        <th>Ville</th>
        <th>telephone</th>
        <th>Type activité</th>
        <th>Nombre de chalet</th>
        <th>Format chalet monophasé</th>
        <th>Format chalet triphasé</th>
        <th>Fin anticipé</th>
        <th>Angle place ducale</th>
        <th>Etat dossier</th>
      </tr>
      <tr>
        <td><p><?= $userFolder['societe'] ?></p></td>
        <td><p><?= $userFolder['numero_registre'] ?></p></td>
        <td><p><?= $userFolder['adresse'] ?></p></td>
        <td><p><?= $userFolder['code_postal'] ?></p></td>
        <td><p><?= $userFolder['ville'] ?></p></td>
        <td><p><?= $userFolder['telephone'] ?></p></td>
        <td><p><?= $userFolder['type_activite'] ?></p></td>
        <td><p><?= $userFolder['nombre_chalet'] ?></p></td>
        <td><p><?= $userFolder['location_chalet_mono'] ?></p></td>
        <td><p><?= $userFolder['location_chalet_tri'] ?></p></td>
        <td><p><?= $userFolder['arret_anticipe'] ?></p></td>
        <td><p><?= $userFolder['placement_angle'] ?></p></td>
        <td><p><?= $userFolder['id_etat'] ?></p><br></td>
      </tr>
    </table>
  </div>

    <!-- <p><?= $userFolder['societe'] ?></p>
    <form class="" action="index.php?router=user&action=change_user_societe" method="post">
      <input type="text" name="changesociete" value="">
      <input type="submit" name="" value="">
    </form>

    <p><?= $userFolder['numero_registre'] ?></p>
    <form class="" action="index.html" method="post">
      <input type="text" name="numero_registre" value="">
      <input type="submit" name="" value="">
    </form>

    <p><?= $userFolder['adresse'] ?></p>
    <form class="" action="index.html" method="post">
      <input type="text" name="adresse" value="">
      <input type="submit" name="" value="">
    </form>

    <p><?= $userFolder['code_postal'] ?></p>
    <form class="" action="index.html" method="post">
      <input type="text" name="code_postal" value="">
      <input type="submit" name="" value="">
    </form>

    <p><?= $userFolder['ville'] ?></p>
    <form class="" action="index.html" method="post">
      <input type="text" name="ville" value="">
      <input type="submit" name="" value="">
    </form>

    <p><?= $userFolder['telephone'] ?></p>
    <form class="" action="index.html" method="post">
      <input type="text" name="telephone" value="">
      <input type="submit" name="" value="">
    </form>

    <p><?= $userFolder['type_activite'] ?></p>
    <form class="" action="index.html" method="post">
      <textarea name="app_activite" rows="8" cols="80"></textarea>
      <input type="submit" name="" value="">
    </form>

    <p><?= $userFolder['nombre_chalet'] ?></p>
    <form class="" action="index.html" method="post">
      <input type="text" name="nombre_chalet" value="">
      <input type="submit" name="" value="">
    </form>

    <p><?= $userFolder['location_chalet_mono'] ?></p>
    <form class="" action="index.html" method="post">
      <input type="text" name="location_chalet_mono" value="">
      <input type="submit" name="" value="">
    </form>

    <p><?= $userFolder['location_chalet_tri'] ?></p>
    <form class="" action="index.html" method="post">
      <input type="text" name="location_chalet_tri" value="">
      <input type="submit" name="" value="">
    </form>

    <p><?= $userFolder['arret_anticipe'] ?></p>
    <form class="" action="index.html" method="post">
      <input type="text" name="arret_anticipe" value="">
      <input type="submit" name="" value="">
    </form>

    <p><?= $userFolder['placement_angle'] ?></p>
    <form class="" action="index.html" method="post">
      <input type="text" name="placement_angle" value="">
      <input type="submit" name="" value="">
    </form>

    <p><?= $userFolder['id_etat'] ?></p><br>
    <form class="" action="index.html" method="post">
      <input type="text" name="placement_angle" value="">
      <input type="submit" name="" value="">
    </form> -->

</div>

<?php
 $content = ob_get_clean();
 require "view/element/template/basicTemplate.php";
?>
