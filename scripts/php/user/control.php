<?php
  function deleteUser($conn){
    $delete = $conn -> query("DELETE FROM usuarios WHERE id_usuario=".$_SESSION['id_usuario']);
    if ($delete==1) {
      return true;
    }

  }

  function updateUser($conn,$email){
    $update = $conn -> query("UPDATE usuarios SET nick='$_SESSION[username]', email='$email' WHERE id_usuario=".$_SESSION['id_usuario']);
    if ($update==1) {
      return true;
    }
  }
  
?>