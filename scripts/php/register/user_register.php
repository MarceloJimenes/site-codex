<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registro de Usuário</title>
</head>
<body>
  <?php
    //var_dump($_POST);
    require_once '../../banco/conexao.php';

    $nome = $_POST['nome'];
    $user = $_POST['usuario'];
    $pass = sha1($_POST['senha']);
    $confpass = sha1($_POST['confirma_senha']);
    $email = $_POST['email'];

    $sql = $conn -> query("INSERT INTO usuarios (tipo_usuario, nick, senha, nome, email, origem) VALUES('0', '$user', '$pass', '$nome', '$email' , 'c')");

    $insert = ($conn,$sql);

    if ($insert==1) {
      echo "
        Cadastrado com sucesso!
      ";
    }else{
      echo "
        ERRO!
      ";
    }

    

  ?>
</body>
</html>