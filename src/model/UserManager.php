<?php

class UserManager extends Manager{
  public function insertUser($name, $firstname, $password, $email){
    $result= $this -> rprepare("INSERT INTO utilisateur (firstname, name, password, email, date_inscription) VALUES (?,?,?,?,NOW())",array($firstname, $name, $password, $email));
    return $result;
  }

  public function selectUser($email){
    $result = $this -> rprepare("SELECT * FROM utilisateur WHERE email = ? ", array($email));
    return $result;
  }

  public function insertApplication($societe, $registre, $adresse, $codepostal, $ville, $telephone, $activite, $nombre_chalet, $location_mono, $location_tri, $fin_anticipe, $placement_angle, $id_user){
    $result = $this -> rprepare("INSERT INTO dossier_exposant (societe, numero_registre, adresse, code_postal, ville, telephone, type_activite, nombre_chalet, location_chalet_mono, location_chalet_tri, arret_anticipe, placement_angle, id_user, id_etat ) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,'1')",array($societe, $registre, $adresse, $codepostal, $ville, $telephone, $activite, $nombre_chalet, $location_mono, $location_tri, $fin_anticipe, $placement_angle, $id_user));
    return $result;
  }

  public function selectUserApplication($idUser){
    $result = $this -> rprepare("SELECT * FROM dossier_exposant WHERE id_user = ? ", array($idUser));
    return $result;
  }

  public function updateUserSociete($idUser, $changeSociete){
      $result = $this -> rprepare("UPDATE dossier_exposant SET societe = ? WHERE id_user = ? ", array($changeSociete, $idUser));
      return $result;
    }
}
