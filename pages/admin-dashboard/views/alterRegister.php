<link rel="stylesheet" href="styles/formRegister.css">

<div class="box">
  <h1 class="title">Cadastrar Alternativas</h1>

  <form action="" method="post">
    <select name="language" class="field">
      <option value="" disabled selected>Selecione uma Linguagem</option>
      <option value="">HTML</option>
      <option value="">CSS</option>
      <option value="">JavaScript</option>
    </select>

    <select name="class" class="field">
      <option value="" disabled selected>Selecione uma Aula</option>
      <option value="">Aula 1</option>
      <option value="">Aula 2</option>
      <option value="">Aula 3</option>
    </select>

    <select name="exercise" class="field">
      <option value="" disabled selected>Selecione um exercício</option>
      <option value="">Exercício 1</option>
      <option value="">Exercício 2</option>
      <option value="">Exercício 3</option>
    </select>

    <textarea name="alterText" class="field" placeholder="Enunciado da alternativa"></textarea>

    <select name="typeExercise" class="field">
      <option value="" disabled selected>Tipo da Alternativa</option>
      <option value="1">Correta</option>
      <option value="2">Errada</option>
    </select>

    <input type="submit" class="button" value="Cadastrar">
  </form>
</div>