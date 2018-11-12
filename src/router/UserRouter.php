<?php

class UserRouter extends Router {
  /**
   * Type: fonction
   * Nom: callControler
   * Description: Appel une methode dans un controleur donnée en verifiant les permissions de l'utilisateur
   */
  public function callControler(Controler $controler,String $methodName,$param = null){
      if (isset($_SESSION["user_email"]) && !empty($_SESSION["user_email"]) ) {
        if(method_exists($controler,$methodName)){
            $controler->$methodName($param);
        }
      }
      else {
        throw new Exception("Vous n'avez pas les droit pour acceder à cette page");
      }
    }
  }
