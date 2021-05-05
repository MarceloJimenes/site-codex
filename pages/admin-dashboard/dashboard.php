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
        <p class="linkTopic">Painel</p>
        <p class="link"><a href="dashboard.php">Estatísticas</p></a>
      </div>

      <div class="boxLinks">
        <p class="linkTopic">Cadastrar</p>
        <p class="link"><a href="dashboard.php?view=1">Cadastrar Linguagens</p></a>
        <p class="link"><a href="dashboard.php?view=2">Cadastrar Aulas</p></a>
        <p class="link"><a href="dashboard.php?view=3">Cadastrar Exercícios</p></a>
        <p class="link"><a href="dashboard.php?view=4">Cadastrar Alternativas</p></a>
      </div>

      <div class="boxLinks">
        <p class="linkTopic">Atualizar</p>
        <p class="link"><a href="dashboard.php?view=5">Atualizar Linguagens</p></a>
        <p class="link"><a href="dashboard.php?view=6">Atualizar Aulas</p></a>
        <p class="link"><a href="dashboard.php?view=7">Atualizar Exercícios</p></a>
        <p class="link"><a href="dashboard.php?view=8">Atualizar Alternativas</p></a>
      </div>

    </div>

    <div class="content">
      <?php
        if(isset($_GET['view'])) {

      
          $view = $_GET['view'];
          require_once "../../scripts/php/selectRoute/SelectRoute.php";
      
      
          $dir = getRequest($view);

          include ("views/$dir");
      
        } else {
          include ("views/statistics.php");
        }
      ?>
    </div>
  </section>
</body>
</html>