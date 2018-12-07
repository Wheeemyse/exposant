<?php
global $folders;
$title = 'Dossier exposant';
ob_start();
?>

<h1>Accès dossiers exposants</h1>
<?php echo $folders ?>


<?php
 $content = ob_get_clean();
 require "view/element/template/basicTemplate.php";
?>
