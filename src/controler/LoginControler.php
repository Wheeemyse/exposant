<?php

class LoginControler extends Controler {
  public function signUp(){

    $userManager = new UserManager();
    $formChecker = new FormChecker();

    $name = $formChecker -> verifField("name");
    $firstName = $formChecker -> verifField("firstname");
    $password = $formChecker -> confirmPassword("password","passwordconfirm");
    $email = $formChecker -> verifEmail("email");

    if ($name && $firstName && $password && $email) {
      $result = $userManager -> insertUser($name, $firstName, $password, $email);
      if ($result != false) {
        echo "Vous avez été inscrit!";
      }
      else {
        throw new Exception("Une erreur est survenue lors de l'inscription");
      }
    }
  }

  public function signIn(){

      $userManager = new UserManager();
      $formChecker = new FormChecker();

      $email = $formChecker -> verifEmail("email_signin");
      $password = $formChecker -> verifPassword("password_signin");

      if ($email && $password) {
        $result = $userManager -> selectUser($email);
        if ($result) {
          $user = $result -> fetch();
          if (password_verify($password,$user["password"])) {
            $_SESSION["user_email"] = $_POST["email_signin"];
            $_SESSION["name"] = $user["name"];
            $_SESSION["firstname"] = $user["firstname"];
            $_SESSION["date"] = $user["date_inscription"];
            $_SESSION["user_id"] = $user["id_user"];
            $_SESSION["user_type"] = $user["user_type"];
              if ($_SESSION["user_type"] == "1"){
                $this -> load("adminview/adminHomeView.php");
              }
            else {
              $this -> load("userview/userHomeView.php");
            }

          }
          else{
            throw new Exception("Ce mot de passe est incorrect");
          }
        }
        else {
          throw new Exception("Le compte associé à cette email n'existe pas");
        }
      }
    else{
      throw new Exception("Aucun compte ne correspond à cette email");

    }
  }

  public function SignOut(){
    session_destroy();
    header('Location: index.php');
  }
}
