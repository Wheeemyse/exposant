<?php

class AdminControler extends Controler {

  public function goShowApplication(){

    global $folders;

    $adminManager = new AdminManager();

    $result = $adminManager -> selectApplication($folders);

    if ($result) {
       while ($folder = $result->fetch()) {
         ob_start();
         require("view/element/panelElement/resumeApplication.php");
         $folders .= ob_get_clean();
       }
      $this -> load("adminview/adminShowApplicationView.php");
    }
    else {
      throw new Exception("result error");
    }
  }

  public function acceptApplication(){

    global $folders;
    $id_user = $_POST['id_user'];

    $adminManager = new AdminManager();

    $adminManager -> validApplication($id_user);
    $result = $adminManager -> selectApplication($folders);

    if ($result) {
       while ($folder = $result->fetch()) {
         ob_start();
         require("view/element/panelElement/resumeApplication.php");
         $folders .= ob_get_clean();
        }
        $this -> load("adminview/adminShowApplicationView.php");
    }
    else {
      throw new Exception("result error");
    }
  }

  public function deniedApplication(){

    global $folders;
    $id_user = $_POST['id_user'];

    $adminManager = new AdminManager();

    $adminManager -> rejectApplication($id_user);
    $result = $adminManager -> selectApplication($folders);

    if ($result) {
       while ($folder = $result->fetch()) {
         ob_start();
         require("view/element/panelElement/resumeApplication.php");
         $folders .= ob_get_clean();
        }
        $this -> load("adminview/adminShowApplicationView.php");
    }
    else {
      throw new Exception("result error");
    }
  }

  public function goAdminHome(){
    $this -> load("adminview/adminHomeView.php");
  }

}
