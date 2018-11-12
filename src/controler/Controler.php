<?php

class Controler {
     /**
     * Nom : load()
     * Description : charge la page passer en parametre dans le repertoire view
     * Parametre :
     * -String "path"
     */
    public function load($path){
        require("view/" . $path);
    }
}
