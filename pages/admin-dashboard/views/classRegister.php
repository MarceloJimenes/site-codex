<link rel="stylesheet" href="styles/formRegister.css">

<div class="box">
  <h1 class="title">Cadastrar Aulas</h1>

  <form action="" method="post">
    <select name="language" class="field">
      <option value="" disabled selected>Selecione uma Linguagem</option>
      <option value="">HTML</option>
      <option value="">CSS</option>
      <option value="">JavaScript</option>
    </select>

    <input type="text" class="field" name="className" placeholder="Nome da Aula">
    <textarea name="classDescription" class="field" placeholder="Breve descrição da Aula"></textarea>

    <input type="text" class="field" name="contentTitle" placeholder="Título do Conteúdo">
    <textarea name="content" class="field" placeholder="Conteúdo"></textarea>

    <input type="submit" class="button" value="Cadastrar">
  </form>
</div>