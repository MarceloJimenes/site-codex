<link rel="stylesheet" href="styles/table.css">
<div class="box-content">
  <h1 class="title has-text-centered">Exercícios Cadastrados</h1>

  <table class="table">
    <tr>
      <th>Linguagem</th>
      <th>Aula</th>
      <th>Exercício</th>
      <th>Enunciado</th>
      <th>Excluir</th>
      <th>Modificar</th>
    </tr>
    <?php
      $sql = $conn -> query 
      ("
        select * from exercicios 
        inner join 
        conteudo on exercicios.id_conteudo = conteudo.id_conteudo
        inner join
        linguagens on conteudo.id_linguagem = linguagens.id_linguagem
      ");

      while($i = $sql -> fetch_array()) {

        echo "
          <tr>
            <td>$i[nome]</td>
            <td>$i[tt_aula]</td>
            <td>$i[tt_exercicio]</td>
            <td><abbr title='$i[ds_exercicio]'>".mb_strimwidth($i['ds_exercicio'], 0, 55, '...')."</abbr></td>
            <td>
              <a href='#'>
                <img src='../../assets/svgs/delete.svg' class='trash'/>
              </a>
            </td>
            <td>
              <a href='#'>
                <img src='../../assets/svgs/edit.svg' class='edit'/>
              </a>
            </td>
          </tr>
        ";
      }
    
    ?>
  </table>

</div>
