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
								<a href="../login/login.php" class="navbar-item">
									Login
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
							</div>
						</div>
					</div>
				</header>
			</div>

			<!-- HERO CONTENT -->
			<div class="hero-body">

				<div class="container">
					<section class="content">

						<div class="imgBox">
							<img src="../../assets/svgs/Access_account.svg" alt="" srcset="">
						</div>

						<div class="conBox">
							<form class="form" action="../../scripts/php/register/user_register.php" method="post">
							<!-- 	<h1 class="label has-text-centered">Cadastre - se</h1> -->
							
								<div class="field">
									<!-- <label class="label">Nome Completo: <span>*</span> </label> -->
									<input class="input" type="text" name="nome" placeholder="Nome Completo" required/>
								</div>

								<div class="field">
									<!-- <label class="label">Usuário: <span>*</span></label> -->
									<input class="input" type="text" name="usuario" placeholder="Usuário" required/>
								</div>

								<div class="field">
									<!-- <label class="label">E-mail: <span>*</span></label> -->
									<input class="input" type="text" name="email" placeholder="E-mail" required/>
								</div>

								<div class="field">
									<!-- <label class="label">Senha: <span>*</span></label> -->
									<input class="input" type="password" name="senha" placeholder="Senha" required/>
								</div>

								<div class="field">
									<!-- <label class="label">Confirmação de senha: <span>*</span></label> -->
									<input class="input" type="password" name="confirma_senha" placeholder="Confirmação de senha" required/>
								</div>

								<br>

								<div class="botoes has-text-centered">
									<input class="button" type="submit" value="Cadastrar"/>
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

