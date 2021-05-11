<?php

require __DIR__. '/UserValidations.php';
require __DIR__. '/Connect.php';

class User {

  //atributos do objeto usuário
  private $nickname;
  private $id_user;
  private $user_type;
  private $user_name;
  private $user_email;
  private $user_password;
  private $user_origin;

  //função para ver se o usuário está logado
  public static function checkStatus() {

    if(isset($_SESSION["nickname"])) {
      return 'off';
    } else {
      return 'on';
    }

  }

  //função para cadastrar usuário, recebe todos os campos do formulário.
  public static function newUSer ($name, $nickname, $email, $password, $confirmPassword) {

    $check = new UserValidations();
    $pdo = new Connect();

    if(!$check->comparePassword($password, $confirmPassword)) {
      $result = $check->comparePassword($password, $confirmPassword);
      echo "
        <script>
          Swal.fire({
            position: 'top',
            toast: true,
            icon: 'error',
            title: 'atenção!',
            footer: '$result[reason]',
            showConfirmButton: false,
            timer: 1500
          })

          setTimeout(function(){history.back()}, 1500);
        </script>
      ";
    } elseif(!$check -> checkEmail($email)) {
      $result = $check -> checkEmail($email);
      echo "
        <script>
          Swal.fire({
            position: 'top',
            toast: true,
            icon: 'error',
            title: 'atenção!',
            footer: '$result[reason]',
            showConfirmButton: false,
            timer: 1500
          })

          setTimeout(function(){history.back()}, 1500);
        </script>
      ";
    } elseif($check -> fetchEmail($email, $pdo)) {
      echo "
        <script>
          Swal.fire({
            position: 'top',
            toast: true,
            icon: 'error',
            title: 'atenção!',
            footer: 'Este e-mail já está cadastrado!',
            showConfirmButton: false,
            timer: 1500
          })

          setTimeout(function(){history.back()}, 1500);
        </script>
      ";
    } elseif($check -> fetchNick($nickname, $pdo)) {
      echo "
        <script>
          Swal.fire({
            position: 'top',
            toast: true,
            icon: 'error',
            title: 'atenção!',
            footer: 'Este nome de usuário já está cadastrado!',
            showConfirmButton: false,
            timer: 1500
          })

          setTimeout(function(){history.back()}, 1500);
        </script>
      ";
    } elseif (!$check -> countFieldsLength($nickname, $password)) {
      $result = $check -> checkEmail($email);
      echo "
        <script>
          Swal.fire({
            position: 'top',
            toast: true,
            icon: 'error',
            title: 'atenção!',
            footer: '$result[reason]',
            showConfirmButton: false,
            timer: 1500
          })

          setTimeout(function(){history.back()}, 1500);
        </script>
      ";
    } else {

      $sql = $pdo->conn -> query 
      ("
        insert into usuarios (nick, senha, nome, email, tipo_usuario, origem) 
        values 
        ('$nickname', '$password', '$name', '$email', 0, 'c') 
      ");

      if($sql) {
        return true;
      } else {
        $result = array('status' => 'false', 'reason' => 'Erro na tentativa de cadastro!');
      }

    }

  }


  public static function deleteUser($conn){
    $delete = $conn -> query("DELETE FROM usuarios WHERE id_usuario=".$_SESSION['id_usuario']);
    if ($delete==1) {
      return true;
    }
  
  }
  
  public static function updateUser($conn,$email){
    $update = $conn -> query("UPDATE usuarios SET nick='$_SESSION[username]', email='$email' WHERE id_usuario=".$_SESSION['id_usuario']);
    if ($update==1) {
      return true;
    }
  }

  public static function logout() {

    session_start();
    session_destroy();

    if(!isset($_SESSION['user_type'])) {
      return true;
    } else {
      return false;
    }

  }

}

