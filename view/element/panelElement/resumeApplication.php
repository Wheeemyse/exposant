<tr>
  <td><p><?= $folder["societe"] ?></p></td>
  <td><p><?= $folder["numero_registre"] ?></p></td>
  <td><p><?= $folder["adresse"] ?></p></td>
  <td><p><?= $folder["code_postal"] ?></p></td>
  <td><p><?= $folder["ville"] ?></p></td>
  <td><p><?= $folder["telephone"] ?></p></td>
  <td><p><?= $folder["type_activite"] ?></p></td>
  <td><p><?= $folder["nombre_chalet"] ?></p></td>
  <td><p><?= $folder["location_chalet_mono"] ?></p></td>
  <td><p><?= $folder["location_chalet_tri"] ?></p></td>
  <td><p><?= $folder["arret_anticipe"] ?></p></td>
  <td><p><?= $folder["placement_angle"] ?></p></td>
  <td><p><?= $folder["id_user"] ?></p></td>
  <td><p><?= $folder["id_etat"] ?></p></td>
  <td><form method='post' action='index.php?router=admin&action=accept_application' >
    <input type='hidden' name='id_user' value=  "<?= $folder['id_user'] ?>" >
    <input type='submit' name='Submit' value='Accepter'>
  </form></td>
  <td><form method='post' action='index.php?router=admin&action=denied_application' >
    <input type='hidden' name='id_user' value=  "<?= $folder['id_user'] ?>" >
    <input type='submit' name='Submit' value='Refuser'>
  </form></td>
</tr>
