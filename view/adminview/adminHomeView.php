<?php

$title = 'Accueil administrateur';
ob_start();
?>

<h1>Page d'accueil</h1>
<p>Vous etês connecté en tant qu'administrateur <?php echo $_SESSION['name']; ?> </p>
<a href="index.php?router=admin&action=show_application">Voir les dossiers</a>

<?php
 $content = ob_get_clean();
 require "view/element/template/basicTemplate.php";
?>
