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
?>