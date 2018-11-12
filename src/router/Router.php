<?php

class Router {
    /**
     * Type: fonction
     * Nom: callControler
     * Description: Appel une methode dans un controleur donnée en verifiant les permissions de l'utilisateur
     */
    public function callControler(Controler $controler,String $methodName,$param = null){
        if(method_exists($controler,$methodName)){
            $controler->$methodName($param);
        }
    }
}
