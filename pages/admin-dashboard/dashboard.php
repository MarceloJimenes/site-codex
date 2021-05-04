<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>

  <link rel="stylesheet" href="dashboard.css">

</head>
<body>
  <section>
    <div class="menu">
      <h1 class="logo"><span>CODEX</span> Admin</h1>

      <div class="boxLinks">
        <p class="linkTopic">Cadastrar</p>
        <p class="link"><a href="#">Cadastrar Linguagens</p></a>
        <p class="link"><a href="#">Cadastrar Aulas</p></a>
        <p class="link"><a href="#">Cadastrar Exercícios</p></a>
        <p class="link"><a href="#">Cadastrar Alternativas</p></a>
      </div>

      <div class="boxLinks">
        <p class="linkTopic">Atualizar</p>
        <p class="link"><a href="#">Atualizar Linguagens</p></a>
        <p class="link"><a href="#">Atualizar Aulas</p></a>
        <p class="link"><a href="#">Atualizar Exercícios</p></a>
        <p class="link"><a href="#">Atualizar Alternativas</p></a>
      </div>

      <div class="boxLinks">
        <p class="linkTopic">Remover</p>
        <p class="link"><a href="#">Remover Linguagens</p></a>
        <p class="link"><a href="#">Remover Aulas</p></a>
        <p class="link"><a href="#">Remover Exercícios</p></a>
        <p class="link"><a href="#">Remover Alternativas</p></a>
      </div>

    </div>

    <div class="content">
      <?php
        include ("test.html");
      ?>
    </div>
  </section>
</body>
</html>