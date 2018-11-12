<?php

$title = 'Accueil membre';
ob_start();
?>

<h1>Page d'accueil</h1>
<p>Vous etês connecté <?php echo $_SESSION['name']; ?> </p>
<a href="index.php?router=user&action=form_application">Deposer son dossier</a>

<?php
 $content = ob_get_clean();
 require "view/element/template/basicTemplate.php";
?>
