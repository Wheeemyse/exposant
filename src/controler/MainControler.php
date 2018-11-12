<?php

class MainControler extends Controler {
  public function goHome() {
    $this -> load("mainview/homeView.php");
  }

  public function goInscription() {
    $this -> load("mainview/inscriptionView.php");
  }

  public function goConnection() {
    $this -> load("mainview/loginView.php");
  }
}
