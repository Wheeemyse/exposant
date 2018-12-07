<div style='display:flex;'>
  <p><?= $folder["societe"] ?></p>
  <p><?= $folder["numero_registre"] ?></p>
  <p><?= $folder["adresse"] ?></p>
  <p><?= $folder["code_postal"] ?></p>
  <p><?= $folder["ville"] ?></p>
  <p><?= $folder["telephone"] ?></p>
  <p><?= $folder["type_activite"] ?></p>
  <p><?= $folder["nombre_chalet"] ?></p>
  <p><?= $folder["location_chalet_mono"] ?></p>
  <p><?= $folder["location_chalet_tri"] ?></p>
  <p><?= $folder["arret_anticipe"] ?></p>
  <p><?= $folder["placement_angle"] ?></p>
  <p><?= $folder["id_user"] ?></p>
  <p><?= $folder["id_etat"] ?></p>
  <form method='post' action='index.php?router=admin&action=accept_application' >
    <input type='hidden' name='id_user' value=  "<?= $folder['id_user'] ?>" >
    <input type='submit' name='Submit' value='Accepter'>
  </form>
  <form method='post' action='index.php?router=admin&action=denied_application' >
    <input type='hidden' name='id_user' value=  "<?= $folder['id_user'] ?>" >
    <input type='submit' name='Submit' value='Refuser'>
  </form>
</div>
