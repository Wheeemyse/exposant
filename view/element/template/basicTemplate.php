<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title><?= $title ?></title>
  </head>
  <body>
    <header>
      <?php require "view/element/header/basicHeader.php"; ?>
    </header>
    <main>
      <?= $content ?>
    </main>
  </body>
</html>
