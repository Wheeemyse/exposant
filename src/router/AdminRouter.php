<?php

class AdminRouter extends Router {

  public function callControler(Controler $controler,String $methodName,$param = null){
      if (isset($_SESSION["user_email"]) && !empty($_SESSION["user_email"]) && isset($_SESSION["user_type"]) && $_SESSION["user_type"] == 1 ) {
        if(method_exists($controler,$methodName)){
            $controler->$methodName($param);
        }
      }
      else {
        throw new Exception("Vous n'avez pas les droit pour acceder à cette page");
      }
    }
}
