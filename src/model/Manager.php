<?php

class Manager{
      //Variable d'instance

      protected $_dbHost;
      protected $_dbName;
      protected $_dbUser;
      protected $_dbPassword;
      protected $_options;

      public function __construct($dbHost = "localhost",$dbName = "candidature_exposant",$dbUser = "root",$dbPassword = "",$options = array(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION)){
          $this->_dbHost = $dbHost;
          $this->_dbName = $dbName;
          $this->_dbUser = $dbUser;
          $this->_dbPassword = $dbPassword;

          if($this->_options == null){
              $this->_pdo = new PDO("mysql:host=$this->_dbHost;dbname=$this->_dbName;charset=UTF8",$this->_dbUser,$this->_dbPassword);
          }else{
              $this->_pdo = new PDO("mysql:host=$this->_host;dbname=$this->_dbName;charset=UTF8",$this->_dbUSer,$this->_dbPassword,$this->_options);
          }
      }

      protected function rprepare(String $sql,$values = array()){
        $request = $this->request()->prepare($sql);
        $request->execute($values);
        return $request;
      }

      protected function request(){
          return $this->_pdo;
      }

      protected function rquerry($sql){
          return $this->request()->querry($sql);
      }

      protected function canExecute($function){
              if($function != null && $function != 0 && $function != false){
                  return true;
              }else{
                  return false;
              }
            }

            public function dbExist(String $table,$key,$value){
              $request = $this->rprepare("SELECT COUNT(*) FROM $table WHERE $key = ?",array($value));
              $result = $request->fetch()[0];
              if($result != 0){
                  return true;
              }else{
                  return false;
              }
            }
      }
