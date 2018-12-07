<?php
session_start();

require "src/import/routerImport.php";
require "src/import/controlerImport.php";
require "src/import/managerImport.php";
require "src/import/classImport.php";

const DATEFIN = "Participe au marché jusqu'au 6 janvier";
const PLACEMENT_ANGLE = "Ne souhaite pas être placé dans un angle de la place ducale";

try {
  if (isset($_GET["router"]) && isset($_GET["action"]) ) {
    switch ($_GET["router"]) {

      //login router
      case 'login':
        switch ($_GET["action"]) {
          case 'signin':
            $loginRouter -> callControler($loginControler, "signIn");
            break;

          case 'signout':
            $loginRouter -> callControler($loginControler, "signOut");
            break;

          case 'signup':
            $loginRouter -> callControler($loginControler, "signUp");
            break;

          default:
            // code...
            break;
      }
      break;


      //user router
      case 'user':
        switch ($_GET["action"]) {
          case 'home':
            $userRouter -> callControler($userControler, "goHome");
            break;

          case 'form_application':
            $userRouter -> callControler($userControler, "goFormApplication");
            break;

          case 'application':
            $userRouter -> callControler($userControler, "createApplication");
            break;

          case 'show_user_application':
            $userRouter -> callControler($userControler, "goShowUserApplication");
            break;

          case 'change_user_societe':
            $userRouter -> callControler($userControler, "changeUserSociete");
            break;

          default:
            // code...
            break;
        }
        // code...
        break;


      //admin router
      case 'admin':
        switch ($_GET["action"]) {
          case 'home':
            $adminRouter -> callControler($adminControler, "goHome");
            break;

          case 'show_application':
            $adminRouter -> callControler($adminControler, "goShowApplication");
            break;

          case 'accept_application':
            $adminRouter -> callControler($adminControler, "acceptApplication");
            break;

          case 'denied_application':
            $adminRouter -> callControler($adminControler, "deniedApplication");
            break;

          default:
            // code...
            break;
        }
        // code...
        break;


      // router par défaut
      default:
        switch ($_GET["action"]) {
          case 'inscription':
            $mainRouter -> callControler($mainControler, "goInscription");
            break;

          case 'connection':
            $mainRouter -> callControler($mainControler, "goConnection");
            break;

          default:
            $mainRouter -> callControler($mainControler, "goHome");
            break;
        }
        break;
    }

  }
    else {
      require "view/mainview/homeView.php";
    }
}
catch (\Exception $e) {
  echo "<p>Une erreur est survenue</p>";
  echo "<p>".$e->getMessage()."</p>";
}
