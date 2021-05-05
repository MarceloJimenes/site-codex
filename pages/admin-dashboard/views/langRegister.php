<link rel="stylesheet" href="styles/formRegister.css">

<div class="box">
  <h1 class="title">Cadastrar Linguagens</h1>

  <form action="" method="post">
    <input type="text" class="field" name="languageName" placeholder="Nome da Linguagem">
    <textarea name="languageDescription" class="field" placeholder="Breve descrição da Linguagem"></textarea>

    <select name="languageType" class="field">
      <option value="" disabled selected>Tipo da Linguagem</option>
      <option value="f">Front-end</option>
      <option value="b">Back-end</option>
      <option value="h">Híbrida</option>
    </select>

    <input type="submit" class="button" value="Cadastrar">
  </form>
</div>