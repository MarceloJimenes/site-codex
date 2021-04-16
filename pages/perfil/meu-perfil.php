<?php 
  require_once "../../scripts/banco/conexao.php";
  session_start(); 
  if(isset($_SESSION['username'])){

    $sql = $conn -> query("SELECT id_usuario, tipo_usuario, senha, nome, email FROM usuarios WHERE nick ='$_SESSION[username]'");

    $dados = mysqli_fetch_array($sql);

    $nome = explode(' ', $dados['nome']);
    $_SESSION['id_usuario'] = $dados['id_usuario'];
    $_SESSION['tp_usuario'] = $dados['tipo_usuario'];
    

  }else{
      echo "Faça login para acessar essa página!";exit;
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
    
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@500&display=swap" rel="stylesheet">

    <title>Meu Perfil</title>
</head>
<body>
      <main>
        <section class="hero is-fullheight">
            <!-- HERO HEAD -->
            <div class="hero-head">
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
                                <a class="navbar-item" href="pages/login/login.php" id = "login">
                                    Login
                                </a>
                                <a class="navbar-item" href="pages/cadastro/cadastre.php" id = "register">
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

                                <a id="logout" class="navbar-item" href="../../scripts/php/logout/logout.php">
                                    <img src="../../assets/svgs/logout_white_24dp.svg ">
                                </a>  

                                <?php 
                                    /* session_start(); */
                                    if (isset($_SESSION["username"])) {
                                        echo '
                                            <script>
                                                document.querySelector("#login").style.display = "none";
                                                document.querySelector("#register").style.display = "none";
                                            </script>
                                        ';

                                    }else{
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
			      <div class="hero-body">

              <div class="container">
                <section class="content">

                  <div class="conBox">
                    <form class="form" action="#" method="post">
                     	<h1 class="label has-text-centered">Olá, <?php echo $nome[0]; ?></h1>
                      <h5 class="label has-text-centered">Aqui você pode atualizar seus dados ou excluir sua conta CODEX:</h5>
                    
                      <!-- <div class="field">
                        <input class="input" type="text" name="nome" placeholder="Nome Completo" value="#" disabled/>
                      </div> -->
                      
                      <div class="field">

                        <label class="label">Usuário: </label>
                        <input class="input" type="text" name="usuario" placeholder="Usuário" value = "<?php echo $_SESSION['username']?>" disabled/>

                      </div>
                        
                      <div class="field">

                        <label class="label">E-mail: </label>
                        <input class="input" type="text" name="email" placeholder="E-mail" value = "<?php echo $dados['email']?>" disabled/>

                      </div>

                      <div class="field">

                        <label class="label">Senha </label>
                        <a id="pass" href="../../scripts/php/password/update.php">Alterar Senha</a>

                      </div>

                      <br>

                      <div class="botoes has-text-centered">
                        <input class="button" type="submit" value="Atualizar dados"/>

                        <a href="../../scripts/php/delete_user/delete.php" class="button-is-danger" id="delete" disabled>Deletar conta</a>
                      </div>

                      

                    </form>
                  </div>
                </section>
              </div>
            </div>


        </section>
    </main>
</body>
</html>
