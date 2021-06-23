<?php
  require_once './../../banco/conexao.php';

  if(isset($_GET['id_usuario'])){
    $delete = $conn -> query("DELETE FROM usuarios WHERE id_usuario=".$_GET['id_usuario']);
    if ($delete == true) {
      session_destroy();
      header("Location: ../../../index.php");
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
