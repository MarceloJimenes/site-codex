<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- links -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">

    <link rel="stylesheet" href="style.scss">
	

	<title>Cadastro de Usuário</title>
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
									<p class="title logo-title-menu">
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
								<a href="../login/login.php" class="navbar-item">
									Login
								</a>
								<!-- botao para download -->
								<span class="navbar-item">
									<a class="button is-success is-inverted">
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
					<link rel="stylesheet" href="../../styles/backgrounds.scss">

					<form class="form" action="../scripts/php/register/cadastrar_usuario.php" method="post">

						<h1 class="label has-text-centered">Cadastro</h1>

						<figure>
								<!-- aqui vai a logo do codex -->
								<img src="" alt="">
						</figure>
						
						<div>
							<label class="label">Nome Completo: <span>*</span> </label>
							<input class="input" type="text" name="nome" required/>
						</div>

						<div>
							<label class="label">Usuário: <span>*</span></label>
							<input class="input" type="text" name="usuario" required/>
						</div>

						<div>
							<label class="label">Senha: <span>*</span></label>
							<input class="input" type="password" name="senha" required/>
						</div>

						<div>
							<label class="label">Confirmação de senha: <span>*</span></label>
							<input class="input" type="password" name="confirma_senha" required/>
						</div>


						<div>
							<label class="label">E-mail: <span>*</span></label>
							<input class="input" type="text" name="email" required/>
						</div>


						<div class="botoes has-text-centered">
							<input class="button is-success" type="submit" value="Cadastrar"/>
						</div>
						
					</form>
				
				</div>
			</div>

		</section>
	</main>
	<?php
	
		
	
	?>
</body>
</html>

