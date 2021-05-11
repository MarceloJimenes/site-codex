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
		<!-- <script src="../../scripts/javascript/sweetalert2.js"></script> -->
		
		<!-- SweetAlert DarkTheme -->
		<link rel="stylesheet" href="../../node_modules/@sweetalert2/theme-dark/dark.css">
		<script src="../../node_modules/sweetalert2/dist/sweetalert2.min.js"></script>


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

							<figure>
								<!-- Aqui vai a logo do CODEX -->
								<img width="200px" src="../../assets/logo-codex/logo.png" alt=""/>
							</figure>

							<div>
								<label class="label">usuário ou email:</label>
								<input class="input" type="text" name="login" placeholder="example@example.com" required/>
							</div>
							<br>
							<div>
								<label class="label">senha:</label>
								<input class="input" type="password" name="pass" placeholder="*******" required/>
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

		session_start();
  
		if(isset($_POST['login']) && isset($_POST['pass'])) { 

      $identificator = $_POST['login'];
      $pass = sha1($_POST['pass']);

      $fetchForNick = $conn -> query("select * from usuarios where nick='".$identificator."' and senha='".$pass."'");

      $fetchForEmail = $conn -> query("select * from usuarios where email='".$identificator."' and senha='".$pass."'");

      $fetchUserNick = mysqli_num_rows($fetchForNick);
      $fetchUserEmail = mysqli_num_rows($fetchForEmail);

      if ($fetchUserNick == 1) {
				$data = $fetchForNick -> fetch_assoc();
				$_SESSION['username'] = $data['nick'];
				$_SESSION['nome'] = $data['nome'];
				$_SESSION['email'] = $data['email'];
				$_SESSION['user_type'] = $data['tipo_usuario'];
				
        echo"
					<script>
						location.href = '../../index.php';
					</script>
				";

      } else if ($fetchUserEmail == 1) {
				$data = $fetchForEmail -> fetch_assoc();
				$_SESSION['username'] = $data['nick'];
				$_SESSION['nome'] = $data['nome'];
				$_SESSION['email'] = $data['email'];
				$_SESSION['user_type'] = $data['tipo_usuario'];

        echo"
					<script>
						location.href = '../../index.php';
					</script>
				";

      } else {
				echo"
					<script>
						Swal.fire({
							icon: 'error',
							title: 'Ops!',
							footer: 'Dados de usuário incorretos ou inexistentes',
							showConfirmButton: false,
							timer: 3000
						})

						setTimeout(function(){history.back()}, 1500);
					</script>
				";
      }

    }else{
			/*echo "
				<script>
					Swal.fire({
						position: 'top',
						toast: 'true',
						icon: 'error',
						title: 'Ops!',
						footer: 'Os campos não podem estar vazios, tente novamente',
						showConfirmButton: false,
						timer: 5000
					})
				</script>
			";*/
		}
	?>
</body>
</html>
