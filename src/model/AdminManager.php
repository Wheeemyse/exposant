<?php

class AdminManager extends Manager{

  public function selectApplication($folders){
    $result = $this -> rprepare("SELECT * FROM dossier_exposant");
    return $result;
  }

  public function validApplication($id_user){
    $result = $this -> rprepare("UPDATE dossier_exposant SET id_etat = 3 WHERE id_user = ? ", array($id_user));
    return $result;
  }

  public function rejectApplication($id_user){
    $result = $this -> rprepare("UPDATE dossier_exposant SET id_etat = 2 WHERE id_user = ? ", array($id_user));
    return $result;
  }


}
