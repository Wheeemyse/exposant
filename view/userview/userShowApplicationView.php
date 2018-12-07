<?php
global $userFolder;
$title = 'Dossier exposant';
ob_start();
?>

<h1>Mon dossier exposant</h1>
<div>

    <p><?= $userFolder['societe'] ?></p>
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
    </form>

</div>

<?php
 $content = ob_get_clean();
 require "view/element/template/basicTemplate.php";
?>
