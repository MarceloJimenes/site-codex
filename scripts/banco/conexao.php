<?php
  ini_set('default_charset', 'UTF-8');
  $conn = mysqli_connect('localhost', 'root', '', 'codex') OR DIE('Erro ao conectar ao banco');
  $conn -> query("SET NAMES utf8");
  //var_dump($conn);
?>
