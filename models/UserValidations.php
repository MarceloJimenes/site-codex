<?php

class UserValidations {

  public function comparePassword($password, $confirmPassword) {

    if ($password !== $confirmPassword) {

      $result = array('staus' => 'false', 'reason' => 'As senhas não condizem, verifique e tente novamente');
      return $result;

    } else {
      return  true;
    }

  }

  public function checkEmail($email) {
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

      $result = array('status' => 'false', 'reason' => 'Por favor, digite um e-mail válido!');
      return $result;

    } else {
      return true;
    }
  }

  public function fetchEmail($email,$conn){
    $sql = $conn -> query("SELECT email FROM usuarios WHERE email = '$email'");

    $return = mysqli_num_rows($sql);

    if ($return == 1) {
      return true;
    }else {
      return false;
    }
  }


  public function fetchNick($nick,$conn){
    $sql = $conn -> query("SELECT nick FROM usuarios WHERE nick = '$nick'");

    $return = mysqli_num_rows($sql);

    if ($return==1) {
      return true;
    }else{
      return false;
    }
  }

  public function countFieldsLength($nickname, $password) {
    if (strlen($nickname) > 30) {

      $result = array('status' => 'false', 'reason' => 'O nome de usuário não pode ter mais de 30 caracteres');
      return $result;
    
    }elseif (strlen($password) > 40) {

      $result = array('status' => 'false', 'reason' => 'A senha do usuário não pode ter mais de 40 caracteres');
      return $result;

    } else {
      return true;
    }
  }


}