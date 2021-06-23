<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sobre nós</title>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">

<style>
  /* General Style */
  @import url("../../theme/global.css");

  html,
  .hero {
    background-color: #4c0b8a;
  }

  .title,
  .subtitle {
    color: #fff;
  }

  a.navbar-item {
    color: #fff;
  }

  .container {
    padding: 0;
  }

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


  /* About CODEX */
  div.boxAbout {
    display: flex;
    align-items: center;
  }

  p.about {
    text-align: justify;
    text-indent: 20px;
  }


  /* Perfil Cards */
  .perfilSession {
    display: grid;
    grid-template-columns: 1fr 1fr;
    max-width: 1366px;
    margin: 25px auto;
    gap: 0 45px;
  }

  .perfilCard {
    display: flex;
    background: #fff;
    width: 540px;
    border-radius: 29px;
    margin: 35px auto;
  }
  .perfilCard:hover {
    transition: 0.5s;
    border-radius: 17px;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.5);
    transform: translateY(-0.50em);
  }

  .perfilImage {
    display: relative;
    width: 40%;
    height: 100%;
  }

  .perfilImage figure {
    width: 180px;
    margin: 18% 8%;
  }

  .perfilImage figure img {
    border-radius: 50%;
    background: #ccc;
  }

  .perfilContent {
    width: 60%;
    padding: 3% 3%;
  }

  .perfilContent .perfilName {
    color: #363636;
    font-weight: bold;
    font-size: 20pt;
    padding-bottom: 9px;
  }

  .perfilContent .perfilDescription {
    text-align: justify;
    padding-bottom: 9px;
    text-indent: 15px;
  }

  .perfilContent .perfilOffice {
    padding-bottom: 9px;
  }

  .perfilContent .perfilLinks {
    display: flex;
    flex-direction: column;
    justify-content: space-around;
    padding-bottom: 10px;
  }

  .perfilContent .perfilLinks .link {
    display: flex;
    align-items: center;
  }

  .perfilContent .perfilLinks .link img {
    width: 25px;
    margin-right: 5px;
  }

  .social-icons{
    justify-content: start;
    margin-left: 0;
    padding-left: 0;
  }
  .icon {
    height: 40px;
    width: 40px;
    margin: 0 20px;
    padding: 6px;
  }
  .icon:hover {
    transition: 0.5s;
    border-radius: 7px;
    box-shadow: 0 4px 8px 0 #00000033, 0 6px 20px 0 #00000080;
    transform: translateY(-0.25em);
  }

  </style>

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

                <a class="navbar-item" href="">
                  Sobre nós
                </a>

                <!-- botao para download -->
                <span class="navbar-item">
                  <a class="button is-download-button is-inverted">
                    <span>Download</span>
                  </a>
                </span>

                <a id="logout" class="assetsLink" href="../../scripts/php/logout/logout.php">
                  <img src="../../assets/svgs/logout_white_24dp.svg" a>
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
											</script>
										';
									}
								?>
              </div>
            </div>
          </div>
        </header>
      </div>

      <div class="boxAbout hero-body container">
        <div>
          <figure>
            <img src="../../assets/logo-codex/logo.png" width="1000px" alt="Logo da CODEX">
          </figure>
        </div>

        <div class="columns">
          <div class="column">
            <p class="title is-3 is-spaced">Quem Somos?</p>
            <p class="about subtitle is- 5">
              O CODEX é um aplicativo feito especialmente para você que sempre quis aprender programação mas nunca soube por onde começar
            <p class="about subtitle is- 5">
              A maioria das pessoas quando pensa em programação, imagina que para aprender é necessário ser fluente em inglês ou então ser ótimo em matemática. Com o objetivo de quebrar esses paradigmas, nosso aplicativo tem como objetivo te ensinar a programar de uma maneira didática e divertida e o melhor de tudo, gratuitamente!
            </p>
            <p class="about subtitle is- 5">
              Além disso você pode nos apoiar nas redes sociais como no Twitter e Instagram e ainda fazer parte da comunidade no discord, onde poderá conversar e estudar juntamente com aqueles que tem os mesmos objetivos que você!
            </p>
            <p class="social-icons">
              <a class="icon" target="_blank" href="https://www.instagram.com/codex.coding.experience/"><img src="../../assets/icons/glyph-logo_May2016-ai.svg" alt="instagram-logo"></a>
              <a class="icon" target="_blank" href="https://twitter.com/CODEX24057375"><img src="../../assets/icons/twitter.png" alt="twitter-logo"></a>
              <a class="icon" target="_blank" href="https://discord.gg/ScDVmTsacv"><img src="../../assets/icons/Discord-Logo-White.svg" alt="discord-logo"></a>
            </p>
            
          </div>
        </div>
      </div>
    </section>

    <section class="perfilSession hero-body container">

      <!-- Carlos Henrique -->
      <div class="perfilCard">
        <div class="perfilImage">
          <figure>
            <img src="../../assets/perfil/henriqueCardoso.png" alt="Henrique Cardoso">
          </figure>
        </div>
        <div class="perfilContent">
          <h1 class="perfilName">Henrique Cardoso</h1>
          <p class="perfilDescription">Entusiasta de Tecnologia em geral, buscando sempre traçar diferentes maneiras de
            solucionar problemas.</p>
          <p class="perfilOffice"><strong>Cargo:</strong> CEO - CTO, Full Stack Developer</p>

          <div class="perfilLinks">
            <a href="https://github.com/HenriqueCardoso-Dev" target="_blank">
              <div class="link">
                <figure>
                  <img src="../../assets/svgs/logo-github.svg" alt="GitHub">
                </figure>
                <p><strong>@HenriqueCardoso-Dev</strong></p>
              </div>
            </a>
            <a href="https://www.linkedin.com/in/henriquecardoso-dev/" target="_blank">
              <div class="link">
                <figure>
                  <img src="../../assets/svgs/logo-linkedin.svg" alt="Linkedin">
                </figure>
                <p><strong>@henriquecardoso-dev</strong></p>
              </div>
            </a>
          </div>
        </div>
      </div>

      <!-- Kauã Santos -->
      <div class="perfilCard">
        <div class="perfilImage">
          <figure>
            <img src="../../assets/perfil/kauaSantos.png" alt="Kauã Santos">
          </figure>
        </div>
        <div class="perfilContent">
          <h1 class="perfilName">Kauã Santos</h1>
          <p class="perfilDescription">Estudante em Desenvolvimento de Sistemas, interessado pelas linguagens da
            tecnologia.</p>
          <p class="perfilOffice"><strong>Cargo:</strong> Front-end Developer & Designer</p>

          <div class="perfilLinks">
            <a href="https://github.com/kauassilva" target="_blank">
              <div class="link">
                <figure>
                  <img src="../../assets/svgs/logo-github.svg" alt="GitHub">
                </figure>
                <p><strong>@kauassilva</strong></p>
              </div>
            </a>
            <a href="https://www.linkedin.com/in/kaua-santos" target="_blank">
              <div class="link">
                <figure>
                  <img src="../../assets/svgs/logo-linkedin.svg" alt="Linkedin">
                </figure>
                <p><strong>@kaua-santos</strong></p>
              </div>
            </a>
          </div>
        </div>
      </div>

      <!-- Marcelo Jimenes -->
      <div class="perfilCard">
        <div class="perfilImage">
          <figure>
            <img src="../../assets/perfil/marceloJimenes.jpg" alt="Marcelo Jimenes">
          </figure>
        </div>
        <div class="perfilContent">
          <h1 class="perfilName">Marcelo Jimenes</h1>
          <p class="perfilDescription">Fã de desenvolvimento de aplicações voltados ao Back-end, leitor ávido,
            entusiasta da música e gamer.</p>
          <p class="perfilOffice"><strong>Cargo:</strong> Back-end Developer, Designer</p>

          <div class="perfilLinks">
            <a href="https://github.com/MarceloJimenes" target="_blank">
              <div class="link">
                <figure>
                  <img src="../../assets/svgs/logo-github.svg" alt="GitHub">
                </figure>
                <p><strong>@MarceloJimenes</strong></p>
              </div>
            </a>
            <a href="https://www.linkedin.com/in/marcelo-jimenes/" target="_blank">
              <div class="link">
                <figure>
                  <img src="../../assets/svgs/logo-linkedin.svg" alt="Linkedin">
                </figure>
                <p><strong>@marcelo-jimenes</strong></p>
              </div>
            </a>
          </div>
        </div>
      </div>

      <!-- Rafael Cordeiro -->
      <div class="perfilCard">
        <div class="perfilImage">
          <figure>
            <img src="../../assets/perfil/rafaelCordeiro.jpeg" alt="Rafael Cordeiro">
          </figure>
        </div>
        <div class="perfilContent">
          <h1 class="perfilName">Rafael Cordeiro</h1>
          <p class="perfilDescription">Estudante de desenvolvimento de sistemas, formado em administração, capacitado
            para gestão de empresas.</p>
          <p class="perfilOffice"><strong>Cargo:</strong> Front-end Developer, DBA</p>

          <div class="perfilLinks">
            <a href="https://github.com/RCordeiroAlmeida" target="_blank">
              <div class="link">
                <figure>
                  <img src="../../assets/svgs/logo-github.svg" alt="GitHub">
                </figure>
                <p><strong>@RCordeiroAlmeida</strong></p>
              </div>
            </a>
          </div>
        </div>
      </div>
    </section>
  </main>
</body>

</html>