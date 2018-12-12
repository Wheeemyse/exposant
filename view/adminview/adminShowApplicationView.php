<?php
global $folders;
$title = 'Dossier exposant';
ob_start();
?>

<h1 class="page-title">Accès dossiers exposants</h1>
<div style="overflow-x:auto;">
  <table>
    <tr>
      <th>Société</th>
      <th>N° Registre</th>
      <th>Adresse</th>
      <th>Code postal</th>
      <th>Ville</th>
      <th>Telephone</th>
      <th>Type activité</th>
      <th>Nombre de chalet</th>
      <th>Format chalet monophasé</th>
      <th>Format chalet triphasé</th>
      <th>Fin anticipé</th>
      <th>Angle place ducale</th>
      <th>id user</th>
      <th>Etat dossier</th>
      <th></th>
      <th></th>
    </tr>
    <?php echo $folders ?>
  </table>
</div>

<?php
 $content = ob_get_clean();
 require "view/element/template/basicTemplate.php";
?>
