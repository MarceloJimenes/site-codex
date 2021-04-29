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
    require_once '../validations/nick.php';
    require_once '../validations/email.php';

    $nome = $_POST['nome'];
    $user = $_POST['usuario'];
    $pass = sha1($_POST['senha']);
    $confpass = sha1($_POST['confirma_senha']);
    $email = $_POST['email'];

    if (isset($nome) && isset($user) && isset($pass) && isset($confpass) && isset($email)){
      if (strlen($user) > 30) {
        echo"O nome de usuário não pode ter mais de 30 caracteres";
      }elseif (fetchNick($user,$conn)){
        echo"O nome de usuário já existe";
      }elseif (strlen($pass)>40) {
        echo"A senha é muito grande!";
      }elseif ($pass!=$confpass){
        echo"As senhas não conferem.";
      }elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo"Por favor, digite um e-mail válido!";
      }elseif (fetchEmail($email,$conn)) {
        echo"Esse e-mail já está cadastrado no nosso banco de dados! Por favor, tente outro e-mail";
      }else {
        $sql = $conn -> query("INSERT INTO usuarios (tipo_usuario, nick, senha, nome, email, origem) VALUES('0', '$user', '$pass', '$nome', '$email' , 'c')");

        if ($sql==1) {
          $sql = $conn -> query ("select * from usuarios where email='".$email."' and senha='".$pass."'");

          $linesCounter = mysqli_num_rows($sql);
          
          if($linesCounter == 1) {
            $data = $sql -> fetch_assoc();
            session_start();
            $_SESSION['username'] = $data['nick'];
            
            echo"
              <script>
                location.href = '../../../index.php';
              </script>
            ";
          }
        }else{
          echo "
            ERRO
          ";
        }
      }
    }else{
      echo"Todos os campos são obrigatórios, por favor confira se preencheu tudo";
    }
  ?>
</body>

</html>