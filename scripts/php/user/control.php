<?php
  require_once './../../banco/conexao.php';
  session_start();
  if(isset($_GET['id_usuario'])){
    $delete = $conn -> query("DELETE FROM usuarios WHERE id_usuario=".$_GET['id_usuario']);
    if ($delete == true) {
      session_destroy();
      header("Location: ../../../index.php");
    }

  }

  if((isset($_GET['nome'])) && (isset($_GET['user'])) && (isset($_GET['mail']))) {

    $update = $conn -> query("UPDATE usuarios SET nome= '$_GET[nome]', nick='$_GET[user]', email='$_GET[mail]' WHERE id_usuario=".$_SESSION['id_usuario']);

    if ($update==1) {
      $_SESSION['nome'] = $_GET['nome'];
      $_SESSION['username'] = $_GET['user'];
      $_SESSION['email'] = $_GET['mail'];
      header("Location: ../../../pages/perfil/meu-perfil.php");
    }
  }
