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

		<section class="hero-body container" style="display: flex; justify-content:space-between;">
		  <!-- Carlos Henrique -->
			<div class="has-text-centered" style="background: #fff; width:300px; border-radius: 15px; padding:15px;">
				<figure>
					<img src="../../assets/perfil/carlosHenrique.png" alt="Perfil" height="200px" width="200px" style="background:#c5c5c5; border-radius:50%;">
				</figure>
				<h1 style="color:#363636; font-weight:bold; padding:15px 0; font-size:17pt; ">Henrique Cardoso</h1>
				<p style="text-align:justify; text-indent:15px; font-size:13pt;">Entusiasta de Tecnologia em geral, buscando sempre traçar diferentes maneiras de solucionar problemas.</p>
				<p style="text-align:justify; font-size:11pt; padding:15px 0;"><strong>Cargo:</strong> CEO - CTO, Mobile & Front-end Developer</p>
				
				<div style="display:flex; flex-direction:column; justify-content:space-around;">
					<a href="https://github.com/HenriqueCardoso-Dev" target="_blank">
						<div style="display:flex; align-items:center;">
							<figure>
								<img src="../../assets/svgs/logo-github.svg" alt="GitHub" style="color:#4c0b8a; width:30px; margin-right:5px;">
							</figure>
							<p><strong>@HenriqueCardoso-Dev</strong></p>
						</div>
					</a>

					<a href="https://www.linkedin.com/in/henriquecardoso-dev/" target="_blank">
						<div style="display:flex; align-items:center;">
							<figure>
								<img src="../../assets/svgs/logo-linkedin.svg" alt="Linkedin" style="width:30px; margin-right:5px;">
							</figure>
							<p><strong>@henriquecardoso-dev</strong></p>
						</div>
					</a>

				</div>
			</div>
								<!-- Kauã Santos -->
			<div class="has-text-centered" style="background: #fff; width:300px; border-radius: 15px; padding:15px;">
				<figure>
					<img src="../../assets/perfil/kauaSantos.png" alt="Perfil" height="200px" width="200px" style="background:#c5c5c5; border-radius:50%;">
				</figure>
				<h1 style="color:#363636; font-weight:bold; padding:15px 0; font-size:17pt; ">Kauã Santos</h1>
				<p style="text-align:justify; text-indent:15px; font-size:13pt;">Estudante em Desenvolvimento de Sistemas, interessado pelas linguagens e modalidades da tecnologia.</p>
				<p style="text-align:justify; font-size:11pt; padding:15px 0;"><strong>Cargo:</strong> Front-end Developer</p>
				
				<div style="display:flex; flex-direction:column; justify-content:space-around;">
					<a href="https://github.com/kauassilva" target="_blank">
						<div style="display:flex; align-items:center;">
							<figure>
								<img src="../../assets/svgs/logo-github.svg" alt="GitHub" style="color:#4c0b8a; width:30px; margin-right:5px;">
							</figure>
							<p><strong>@kauassilva</strong></p>
						</div>
					</a>

					<a href="https://www.linkedin.com/in/kaua-santos" target="_blank">
						<div style="display:flex; align-items:center;">
							<figure>
								<img src="../../assets/svgs/logo-linkedin.svg" alt="Linkedin" style="width:30px; margin-right:5px;">
							</figure>
							<p><strong>@kaua-santos</strong></p>
						</div>
					</a>

				</div>
			</div>
								<!-- Marcelo Jimenes -->
			<div class="has-text-centered" style="background: #fff; width:300px; border-radius: 15px; padding:15px;">
				<figure>
					<img src="../../assets/perfil/marceloJimenes.jpg" alt="Perfil" height="200px" width="200px" style="background:#c5c5c5; border-radius:50%;">
				</figure>
				<h1 style="color:#363636; font-weight:bold; padding:15px 0; font-size:17pt; ">Marcelo Jimenes</h1>
				<p style="text-align:justify; text-indent:15px; font-size:13pt;">Fã de desenvolvimento de aplicações voltados ao Back-end, leitor ávido, entusiasta da música e gamer.</p>
				<p style="text-align:justify; font-size:11pt; padding:15px 0;"><strong>Cargo:</strong> Back-end Developer</p>
				
				<div style="display:flex; flex-direction:column; justify-content:space-around;">
					<a href="https://github.com/MarceloJimenes" target="_blank">
						<div style="display:flex; align-items:center;">
							<figure>
								<img src="../../assets/svgs/logo-github.svg" alt="GitHub" style="color:#4c0b8a; width:30px; margin-right:5px;">
							</figure>
							<p><strong>@MarceloJimenes</strong></p>
						</div>
					</a>

					<a href="https://www.linkedin.com/in/marcelo-jimenes/" target="_blank">
						<div style="display:flex; align-items:center;">
							<figure>
								<img src="../../assets/svgs/logo-linkedin.svg" alt="Linkedin" style="width:30px; margin-right:5px;">
							</figure>
							<p><strong>@marcelo-jimenes</strong></p>
						</div>
					</a>

				</div>
			</div>
								<!-- Rafael Cordeiro -->
			<div class="has-text-centered" style="background: #fff; width:300px; border-radius: 15px; padding:15px;">
				<figure>
					<img src="../../assets/perfil/rafaelCordeiro.png" alt="Perfil" height="200px" width="200px" style="background:#c5c5c5; border-radius:50%;">
				</figure>
				<h1 style="color:#363636; font-weight:bold; padding:15px 0; font-size:17pt; ">Rafael Cordeiro</h1>
				<p style="text-align:justify; text-indent:15px; font-size:13pt;">Estudante de desenvolvimento de sistemas, formado em administração, capacitado para gestão de empresas.</p>
				<p style="text-align:justify; font-size:11pt; padding:15px 0;"><strong>Cargo:</strong> Redator</p>
				
				<div style="display:flex; flex-direction:column; justify-content:space-around;">
					<a href="https://github.com/RCordeiroAlmeida" target="_blank">
						<div style="display:flex; align-items:center;">
							<figure>
								<img src="../../assets/svgs/logo-github.svg" alt="GitHub" style="color:#4c0b8a; width:30px; margin-right:5px;">
							</figure>
							<p><strong>@RCordeiroAlmeida</strong></p>
						</div>
					</a>

				</div>
			</div>
		</section>
	</main>

</body>

</html>