<?php
  /* require_once "../../scripts/banco/conexao.php";
  session_start();
  //var_dump($_POST);
  $atual = sha1($_POST['atual']);
  $nova = sha1($_POST['nova']);
  $confirma = sha1($_POST['confirma']);

  if (isset($atual) && isset($nova) && isset($confirma)) { */
    function validPass($atual,$conn){
      $sql = $conn -> query("SELECT senha FROM usuarios WHERE id_usuario='$_SESSION[id_usuario]'");
      $senha = $sql -> fetch_assoc();
    
      if (sha1($atual) != $senha){
        return true;
      }
    }

    function checkNewPass($nova,$confirma,$conn){
      if ($nova != $confirma || strlen($nova)>40 || strlen($confirma)>40) {
        return true;
      }

      $insert = $conn -> query("UPDATE usuarios SET senha='".sha1($confirma)."' WHERE id_usuario='$_SESSION[id_usuario]'");
      if ($insert == 1) {
        return true;
      } return false;
    }
?>  