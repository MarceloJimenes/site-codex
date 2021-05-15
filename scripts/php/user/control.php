<?php
  function deleteUser($conn){
    $delete = $conn -> query("DELETE FROM usuarios WHERE id_usuario=".$_SESSION['id_usuario']);
    if ($delete==1) {
      return true;
    }

  }

  function updateUser($conn,$id,$nome,$nickname,$email){
    $update = $conn -> query("UPDATE usuarios SET nome='$nome', nick='$nickname', email='$email' WHERE id_usuario=".$id);
    if ($update==1) {
      $_SESSION['nome'] = $nome;
      $_SESSION['username'] = $nickname;
      $_SESSION['email'] = $email;
      return true;
    }
  }
