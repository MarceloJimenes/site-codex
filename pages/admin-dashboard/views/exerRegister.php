<link rel="stylesheet" href="styles/formRegister.css">

<div class="box">
  <h1 class="title">Cadastrar Exercícios</h1>

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

    <input type="text" class="field" name="exerTitle" placeholder="Título do Exercício">
    <textarea name="exerDescription" class="field" placeholder="Enunciado do Exercício"></textarea>

    <select name="typeExercise" class="field">
      <option value="" disabled selected>Tipo do Exercício</option>
      <option value="s">Standard</option>
      <option value="p">Premium</option>
    </select>

    <input type="submit" class="button" value="Cadastrar">
  </form>
</div>