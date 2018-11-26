<?php

class FormChecker{
  public function verifField(String $fieldName , int $minLength = 0 , int $maxLength = 1000){
        $value = htmlspecialchars($_POST[$fieldName]);
        if(isset($value) && !empty($value)){
            if(strlen($value) > $minLength && strlen($value) < $maxLength){
                return $value;
            }else{
                throw new Exception("Le champ '$fieldName' est trop court ou trop long. (entre $minLength et $maxLength caracteres )");
            }
        }else{
            throw new Exception("Le champ '$fieldName' ne peut être vide .");
        }
    }

    public function verifEmail(String $fieldName){
        $email = htmlspecialchars($_POST[$fieldName]);
        if(isset($email) && !empty($email)){
            if(filter_var($email, FILTER_VALIDATE_EMAIL)){
                return $email;
            }else{
                throw new Exception("L'email est incorrecte .");
            }
        }else{
            throw new Exception("Le champ 'email' ne peut être vide .");
        }
    }
    
    public function verifPassword(String $fieldName ,int $minLength = 0){
        $password = htmlspecialchars($_POST[$fieldName]);
        if(isset($password) && !empty($password)){
            if(strlen($password) >= $minLength){
                return $password;
            }else{
                throw new Exception("Le mot de passe est trop court . ($minLength caracteres minimum)");
            }
        }else{
            throw new Exception("Le champ 'mot de passe' ne peut être vide .");
        }
    }

    public function confirmPassword(String $fieldName,String $fieldNameConfirm,int $minLength = 6){
        $password = htmlspecialchars($_POST[$fieldName]);
        $passwordConfirm = htmlspecialchars($_POST[$fieldNameConfirm]);
        if(isset($password) && !empty($password) && isset($passwordConfirm) && !empty($passwordConfirm) ){
            if(strlen($password) >= $minLength && strlen($passwordConfirm) >= $minLength){
                if($password === $passwordConfirm){
                    return password_hash($password,PASSWORD_DEFAULT);
                }else{
                    throw new Exception("Les deux mot de passe ne sont pas identiques .");
                }
            }else{
                throw new Exception ("Le mot de passe est trop court . ($minLength caracteres minimum)");
            }
        }else{
            throw new Exception ("Les 'champs mot de passe' et 'confirmation mot de passe' ne peuvent être vide .");
        }
    }

    public function verifNull(String $checkboxName,$default = false){
      if(isset($_POST["$checkboxName"])){
        return $_POST["$checkboxName"];
      }else{
        if($default){
          return $default;
        }else{
          return false;
        }
      }
    }

}
