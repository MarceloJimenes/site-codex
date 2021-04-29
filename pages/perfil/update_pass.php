<?php
  /* require_once "../../scripts/banco/conexao.php";
  session_start();
  //var_dump($_POST);
  $atual = sha1($_POST['atual']);
  $nova = sha1($_POST['nova']);
  $confirma = sha1($_POST['confirma']);

  if (isset($atual) && isset($nova) && isset($confirma)) { */
    function validPass($atual,$conn){
      // echo $atual;exit;
      $sql = $conn -> query("SELECT senha FROM usuarios WHERE id_usuario='$_SESSION[id_usuario]'");
      $senha = $sql -> fetch_assoc();
      // print_r($senha);exit;
      // echo $senha;exit;
    
      // echo sha1($atual);
      // echo '<br>';
      // echo "Banco: ".$senha['senha'];
      // exit;
      if (sha1($atual) != $senha['senha']){
        // echo 'Kauã';exit;
        return true;
      } 
      else {
        return false;
      }
    }

    function checkNewPass($nova,$confirma,$conn){
      if ($nova != $confirma || strlen($nova)>40 || strlen($confirma)>40) {
        return true;
      }
      else { 

      $insert = $conn -> query("UPDATE usuarios SET senha='".sha1($confirma)."' WHERE id_usuario='$_SESSION[id_usuario]'");
      if ($insert == 1) {
        return false;
      } else {
        return true;
      }
    }
    }
?>  