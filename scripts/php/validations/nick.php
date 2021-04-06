<?php
  function fetchNick($nick,$conn){
    $sql = $conn -> query("SELECT nick FROM usuarios WHERE nick = '$nick'");

    $return = mysqli_num_rows($sql);

    if ($return==1) {
      return true;
    }else{
      return false;
    }
  }
?>