<?php
  function fetchEmail($email,$conn){
    $sql = $conn -> query("SELECT email FROM usuarios WHERE email = '$email'");

    $return = mysqli_num_rows($sql);

    if ($return == 1) {
      return true;
    }else {
      return false;
    }
  }

  function fetchUpdateEmail($email, $id, $conn){
    $sql = $conn -> query("SELECT email FROM usuarios WHERE email='$email' AND id_usuario!='$id'");

    $return= mysqli_num_rows($sql);

    if($return == 1){
      return true;
    }else{
      return false;
    }
  }
?>