<?php 
    session_start();
    if (isset($_SESSION["username"])) {
        echo '
            teste pra ver se funfa
            <script>
                document.querySelector("#login").style.display = "none";
                document.querySelector("#register").style.display = "none";
            </script>
        ';

    }else{
        

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

    <title>Codex - Coding Experience</title>
</head>
<body>
    <main>
        <section class="hero is-fullheight">
            <!-- HERO HEAD -->
            <div class="hero-head">
                <header class="navbar">
                    <div class="container">
                        <div class="navbar-brand">
                            <a class="navbar-item" href="index.php">
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
                                <a class="navbar-item" href="#">
                                    Página inicial
                                </a>
                                <a class="navbar-item" href="pages/login/login.php" id = "login">
                                    Login
                                </a>
                                <a class="navbar-item" href="pages/cadastro/cadastre.php" id = "register">
                                    Cadastre-se
                                </a>
                                <a class="navbar-item" href="pages/sobre-nos/sobre-nos.php">
                                    Sobre nós
                                </a>
                                <!-- botao para download -->
                                <span class="navbar-item">
                                    <a class="button is-download-button is-inverted">
                                        <span>Download</span>
                                    </a>
                                </span>
                            </div>
                        </div>
                    </div>
                </header>
            </div>

            <!-- HERO CONTENT -->

            <div class="hero-body">

                <section>
                    <div class='hero-body left-content'>

                        <figure>

                            <img src="assets/svgs/undraw_Astronaut_re_8c33.svg" alt="" srcset="">

                        </figure>
                        <h1 class="title">Seja bem vindo ao <span class="pixie-span">CODEX!</span></h1>
                    </div>

                    <figure>

                    <img src="assets/logo-codex/logo.png" width="400px">

                    </figure>
                </section>

                

            </div>

        </section>
    </main>
 
</body>
</html>
