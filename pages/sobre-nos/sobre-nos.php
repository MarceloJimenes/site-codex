<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sobre nós</title>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
  <link rel="stylesheet" href="sobre-nos.css">
</head>
<body>

  <main>
    <section class="hero is-fullheight">
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

                <a id="login" class="navbar-item" href="../login/login.php">
                    Login
                </a>

                <a id="register" class="navbar-item" href="../cadastro/cadastre.php">
                    Cadastre-se
                </a>

                <a class="navbar-item" href="#">
                    Sobre nós
                </a>

                <!-- botao para download -->
                <span class="navbar-item">
                  <a class="button is-download-button is-inverted">
                    <span>Download</span>
                  </a>
                </span>

                <a id="logout" class="navbar-item" href="../../scripts/php/logout/logout.php">
                  <img src="../../assets/svgs/logout_white_24dp.svg" a>
                </a>

                <?php 
                  session_start();
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
                          </script>
                      ';                                        
                  }

                ?>

              </div>
            </div>
          </div>
        </header>
      </div>

      <div class="hero-body container" style="display: flex; align-items: center;">

        <div>
          <figure>
            <img src="../../assets/logo-codex/logo.png" width="1000px" alt="Logo da CODEX">
          </figure>
        </div>
          
        <div class="columns">
          <div class="column">
            <p class="title is-3 is-spaced">Quem Somos?</p>
            
            <p class="subtitle is- 5" style="text-align: justify; text-indent: 20px;">
            O projeto CODEX tem como objetivo o desenvolvimento de um aplicativo para treinamento e reforço das habilidades de desenvolver códigos em diferentes linguagens de programação.</p>

            <p class="subtitle is- 5" style="text-align: justify; text-indent: 20px;">O framework e funcionalidade do CODEX foi baseado no aplicativo Duolingo, aplicativo para o aprendizado e treito de um novo idioma, onde o usuário deve traduzir uma sentença, seja por meio de escrita ou fala e no final pode passar à um próximo nível.
            O CODEX funciona de forma parecida, onde o usuário pode começar a aprende
            </p>

          </div>
          
        </div>
      </div>
    </section>
  </main>

</body>
</html>