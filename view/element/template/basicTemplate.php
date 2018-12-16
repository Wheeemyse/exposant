<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title><?= $title ?></title>
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script:700|Montserrat:500" rel="stylesheet">
    <link rel="stylesheet" href="public/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="icon" href="favicon-32x32.png">
  </head>
  <body>
    <header>
      <?php require "view/element/header/basicHeader.php"; ?>
    </header>
    <main>
      <?= $content ?>
    </main>
    <footer>
      <?php require "view/element/footer/basicFooter.php" ?>
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="https://cc.cdn.civiccomputing.com/8/cookieControl-8.1.min.js" integrity="sha384-IxNAc6VrSYlLpEtwbpn1msykm1vI7qz2tFIop4jpqao0JuugIBqryEStDNP9rfIQ" crossorigin="anonymous"></script>
    <script>
      var config = {
        apiKey: '592b99ebdf88c091dad9b556b6d8de236ac97687',
        product: 'PRO_MULTISITE',
        initialState: "OPEN",
        statement : {
          description: 'For more information vist our',
          name : 'Privacy Statement',
          url: 'https://www.civicuk.com/cookie-control/v8/documentation',
          updated : '26/01/2018'
        }
        };

CookieControl.load( config );
    CookieControl.load( config );
    </script>
    <script src="public/js/script.js"></script>
    <?php if(isset($script)){
      echo $script;
    } ?>

  </body>
</html>
