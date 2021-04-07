<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- links -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">

		<link rel="stylesheet" href="style.css">
		<link rel="stylesheet" href="../../theme/global.css">
		<script src="../../scripts/javascript/sweetalert2.js"></script>


	<title>Login</title>
</head>
<body>
	<main>
		<section class="hero is-fullheight is-hero-background">
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
								<a href="../cadastro/cadastre.php" class="navbar-item">
									Cadastro
								</a>
								<a class="navbar-item" href="../sobre-nos/sobre-nos.php">
                    Sobre nós
                </a>
								<!-- Botão para download -->
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

					<div class="container">
					
						<form class="form" action="" method ="POST">

							<h1 class="label has-text-centered">Login</h1>

							<figure>
								<!-- Aqui vai a logo do CODEX -->
								<img src="" alt=""/>
							</figure>

							<div>
								<label class="label">Login:</label>
								<input class="input" type="text" name="login" placeholder="E-mail ou Usuário" required/>
							</div>

							<div>
								<label class="label">Senha:</label>
								<input class="input" type="password" name="pass" required/>
							</div>

							</br>

							<div class="botoes has-text-centered">
								<input class="button is-success" type="submit" value="Entrar"/>
							</div>
						</form>

					</div>
			</div>
		</section>
	</main>
	<?php
		require_once "../../scripts/banco/conexao.php";
  
		if(isset($_POST['login']) && isset($_POST['pass'])) { 

      $identificator = $_POST['login'];
      $pass = sha1($_POST['pass']);

      $fetchForNick = $conn -> query("select * from usuarios where nick='".$identificator."' and senha='".$pass."'");

      $fetchForEmail = $conn -> query("select * from usuarios where email='".$identificator."' and senha='".$pass."'");

      $fetchUserNick = mysqli_num_rows($fetchForNick);
      $fetchUserEmail = mysqli_num_rows($fetchForEmail);

      if ($fetchUserNick == 1) {

        echo"
					Swal.fire({
						position: 'top-end',
						icon: 'success',
						title: 'Seja bem vindo, ',
						showConfirmButton: false,
						timer: 1500
					})
				
				";

      } else if ($fetchUserEmail == 1) {

        echo"Login encontrado por email";

      } else {
				echo"
					<script>
						Swal.fire({
							position: 'top-end',
							toast: 'true',
							icon: 'error',
							title: 'Ops!',
							footer: 'Dados de usuário incorretos ou inexistentes',
							showConfirmButton: false,
							timer: 3000
						})
					</script>
				";
      }
    }
	?>
</body>
</html>
