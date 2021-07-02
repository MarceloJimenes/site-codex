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

  function fetchUpdateNick($nick, $id, $conn){
    $sql = $conn ->query("SELECT nick FROM usuarios WHERE nick='$nick' AND id_usuario!='$id'");
    $return = mysqli_num_rows($sql);
    if($return ==1){
      return true;
    }else{
      return false;
    }
  }
?>