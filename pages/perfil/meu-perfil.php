<?php
require_once "../../scripts/banco/conexao.php";
session_start();
//print_r($_SESSION);exit;
if (!isset($_SESSION['username'])) {
  echo "Faça login para acessar essa página!";
  exit;
}
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
  <link rel="stylesheet" href="style.css">

  <link rel="stylesheet" href="../../node_modules/@sweetalert2/theme-dark/dark.css">
	<script src="../../node_modules/sweetalert2/dist/sweetalert2.min.js"></script>

  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@500&display=swap" rel="stylesheet">

  <style>
    .assetsLink {
      display: flex;
      justify-content: center;
      align-items: center;
      color: #fff;
      margin-right: 3px;
    }

    .assetsLink:nth-child(1) {
      margin-bottom: 5px;
    }

    .assetsLink:hover {
      color: #fff;
    }

    .containerButtons {
      background-color: #f8f8f8;
      display: flex;
      width: 60%;
      margin: 0 auto;
    }
    .space {
      margin-left: 10px;
    }

    .iconDel {
      display: flex;
    }
  </style>

  <title>Meu Perfil</title>
</head>

<body>
  <main>
    <section class="hero is-fullheight">
      <!-- The Modal -->
      <div id="myModal" class='modal-container'>

        <!-- Modal content -->
        <div class="modal-content">
          <span id="bt_close" onclick="modalOff()">&times;</span>
          <form class="update-pass" method="post" action="">

            <img src="../../assets/logo-codex/logo.png" alt="logo codex" width="150px">

            <h5 class="title">Alteração de senha</h5>

            <input class="input" name="atual" type="password" placeholder="Senha atual"></br>
            <input class="input" name="nova" type="password" placeholder="Nova senha"></br>
            <input class="input" name="confirma" type="password" placeholder="Confirma senha">

            </br>

            <input class="button botao" id="alterar" type="submit" value="Alterar" />
          </form>
        </div>
      </div>

      <!-- HERO HEAD -->
      <div class="hero-head" id="nav-bar">
        <header class="navbar">
          <div class="container">
            <div class="navbar-brand">
              <a class="navbar-item" href="../../index.php">
                <p class="title title-codex">
                  CODEX
                </p>
              </a>
              <!-- Menu responsivo -->
              <span class="navbar-burger" data-target="navbarMenuHeroC">
                <span></span>
                <span></span>
                <span></span>
              </span>
            </div>

            <!-- Default menu -->
            <div id="navbarMenuHeroC" class="navbar-menu">
              <div class="navbar-end">
                <a class="navbar-item" href="../../index.php">
                  Página inicial
                </a>
                <a class="navbar-item" href="pages/login/login.php" id="login">
                  Login
                </a>
                <a class="navbar-item" href="pages/cadastro/cadastre.php" id="register">
                  Cadastre-se
                </a>
                <a class="navbar-item" href="../sobre-nos/sobre-nos.php">
                  Sobre nós
                </a>
                <!-- botao para download -->
                <span class="navbar-item">
                  <a class="button is-download-button is-inverted">
                    <span>Download</span>
                  </a>
                </span>

                <a id="logout" class="assetsLink" href="../../scripts/php/logout/logout.php">
                  <img src="../../assets/svgs/logout_white_24dp.svg ">
                </a>

                <?php
                if (isset($_SESSION["username"])) {
                  echo '
                          <script>
                              document.querySelector("#login").style.display = "none";
                              document.querySelector("#register").style.display = "none";
                          </script>
                      ';
                } else {
                  echo '
                          <script>
                              document.querySelector("#logout").style.display = "none";
                              document.querySelector("#welcome").style.display = "none";
                          </script>
                      ';
                }

                ?>
              </div>
            </div>
          </div>
        </header>
      </div>

      <!-- HERO CONTENT -->

      <!-- HERO CONTENT -->
      <div class="hero-body" style="padding: 0;">

        <div class="container">

          <section class="content">

            <?php

            $nome = explode(' ', $_SESSION['nome']);

            ?>

            <div class="conBox">

              <form class="form" action="../../scripts/php/user/control.php" method="get">

                <h1 class="label has-text-centered">Olá, <?php echo $nome[0]; ?></h1>
                <h5 class="label has-text-centered">Aqui você pode atualizar seus dados ou excluir sua conta CODEX:</h5>

                <fieldset class="inputsField">
                  <div class="field">
                    <label class="label">Nome:</label>
                    <input class="input" type="text" name="nome" value="<?php echo $_SESSION['nome'] ?>"/>

                  </div>

                  <div class="field">

                    <label class="label">Usuário: </label>
                    <input class="input" type="text" name="user" placeholder="Usuário" value="<?php echo $_SESSION['username'] ?>" />

                  </div>

                  <div class="field">

                    <label class="label">E-mail: </label>
                    <input class="input" type="text" name="mail" placeholder="E-mail" value="<?php echo $_SESSION['email'] ?>" />

                  </div>

                  <div class="field">

                    <label class="label">Senha </label>

                    <!-- Trigger/Open The Modal -->
                    <a id="myBtn" class="myBtn" onclick="modalOn()"><b>Alterar Senha</b></a>

                  </div>

                </fieldset>

                <br>

                <div class="containerButtons">
                  <a id="updateBtn" class="button" onclick="openUpdateModal()">
                    <div>
                      <strong>Atualizar</strong>
                    </div>
                  </a>
                  <!--
                  <button class="button"  type="submit" name='update' value="<?php //echo $_SESSION['id_usuario'] ?>">
                    <strong>Atualizar</strong>
                  </button> -->

                  <a id="myBtn" class="button space" onclick="openDeleteModal()">
                    <div>
                      <strong>Deletar conta</strong>                        
                    </div>
                  </a>

                  <input type="submit" value="" style="display: none;" id="submitButton">
                </div>
              </form>
            </div>        
          </section>
        </div>
      </div>
    </section>
  </main>
  <?php
  require_once "update_pass.php";
  if (isset($_POST['atual']) && isset($_POST['nova']) && isset($_POST['confirma'])) {



    // print_r($_POST);exit;
    if (validPass($_POST['atual'], $conn)) {
      echo "
            <script>
              alert('A senha atual está errada');
              history.back(); 
            </scrip>
          ";
    } elseif (checkNewPass($_POST['nova'], $_POST['confirma'], $conn)) {
      echo "
            <script>
              alert('As senhas não conferem! Lembrete: sua senha não pode ultrapassar 40 caracteres.');
               history.back();
             </script>
           ";
    } else {
      echo "
          <script>
            alert('Senha alterada com sucesso.');
            history.back();
          </script>
          ";
    }
  }
  ?>
  <!-- Javascript -->
  <script>
    function modalOn() {
      document.getElementById('myModal').style.visibility = "visible";
      document.getElementById('nav-bar').style.zIndex = '0';
    }

    function modalOff() {
      document.getElementById('myModal').style.visibility = "hidden";
      document.getElementById('nav-bar').style.zIndex = '1';
    }

    function openUpdateModal() {
      Swal.fire({
        title: 'Deseja atualizar seus dados?',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#8B4FC2',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Sim, atualizar!',
        cancelButtonText: 'Cancelar'
      }).then((result) => {
        if (result.isConfirmed) {
          // location.href = "../../scripts/php/user/control.php?id="+<?php //echo $_SESSION['id_usuario']?>
      
          document.querySelector("#submitButton").click();

          Swal.fire(
            'Atualizado!',
            'Seus dados foram atualizados.',
            'sucess'
          )
        }
      })
    }

    function openDeleteModal() {
      Swal.fire({
        title: 'Você tem certeza?',
        text: "Você não poderá reverter esta ação!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#8B4FC2',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Sim, deletar!',
        cancelButtonText: 'Cancelar'
      }).then((result) => {
        if (result.isConfirmed) {
      
          location.href = "../../scripts/php/user/control.php?id_usuario="+<?php echo $_SESSION['id_usuario']?>+"";
      
          Swal.fire({
            icon: 'success',
            title: 'Conta deletada!',
            timer: 2000
          })
        }
      })
    }
  </script>
</body>

</html>