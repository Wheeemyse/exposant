<?php

class UserControler extends Controler {

  public function goHome(){
    $this -> load("userview/userHomeView.php");
  }

  public function goFormApplication(){
    $this -> load("userview/userApplicationView.php");
  }

  public function createApplication(){
    $userManager = new Usermanager();
    $formChecker = new FormChecker();

    $societe = $formChecker -> verifField("app_societe");
    $registre = $formChecker -> verifField("app_registre");
    $adresse = $formChecker -> verifField("app_adresse");
    $codepostal = $formChecker -> verifField("app_codepostal");
    $ville = $formChecker -> verifField("app_ville");
    $telephone = $formChecker -> verifField("app_telephone");
    $activite = $formChecker -> verifField("app_activite");
    $nombre_chalet = $_POST["app_nombre_chalet"];
    $location_mono = $formChecker -> verifNull("app_location_mono",false);
    $location_tri = $formChecker -> verifNull("app_location_tri",false);

    $id_user = $_SESSION["user_id"];

    $fin_anticipe = $formChecker->verifNull("app_fin_anticipe",DATEFIN);
    $placement_angle = $formChecker->verifNull("app_placement_angle",PLACEMENT_ANGLE);

    if ($societe && $registre && $adresse && $codepostal && $ville && $telephone && $activite && $nombre_chalet && $location_mono || $location_tri && $id_user ){
      $result = $userManager -> insertApplication($societe, $registre, $adresse, $codepostal, $ville, $telephone, $activite, $nombre_chalet,
                                                  $location_mono, $location_tri, $fin_anticipe, $placement_angle, $id_user);
      if ($result != false){
          echo "Votre dossier a bien été enregistré";
      }
      else {
        throw new Exception("Une erreur est survenue lors de du dépôt du dossier");
      }
    }else {
      throw new Exception("Une erreur est survenue lors du depot ");

    }
  }

  public function goShowUserApplication(){

    global $userFolder;

    $userManager = new Usermanager();
    $idUser = $_SESSION["user_id"];

    $result = $userManager -> selectUserApplication($idUser);

    $userFolder = $result->fetch();
    $this -> load("userview/userShowApplicationView.php");

  }

  public function changeUserSociete(){

    $userManager = new Usermanager();
    $formChecker = new FormChecker();

    $idUser = $_SESSION["user_id"];
    $changeSociete = $formChecker -> verifField("changesociete");

    $userManager -> updateUserSociete($idUser, $changeSociete);
    
    header("Location: index.php?router=user&action=show_user_application");
  }

}
