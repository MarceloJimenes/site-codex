<link rel="stylesheet" href="styles/table.css">
<div class="box-content">
  <h1 class="title has-text-centered">Alternativas Cadastradas</h1>

  <table class="table">
    <tr>
      <td>Linguagem</td>
      <td>Aula</td>
      <td>Exercício</td>
      <td>Alternativa</td>
      <td>Tipo</td>
      <td>excluir</td>
      <td>modificar</td>
    </tr>
    <?php
      $sql = $conn -> query 
      ("
        select * from exercicios 
        inner join 
        conteudo on exercicios.id_conteudo = conteudo.id_conteudo
        inner join
        linguagens on conteudo.id_linguagem = linguagens.id_linguagem
        inner join
        alternativa on exercicios.id_exercicio = alternativa.id_exercicio
      ");

      while($i = $sql -> fetch_array()) {

        if($i["tp_alternativa"] == 2) {
          $altertype = 'Errada';
        } else {
          $altertype = 'Correta';
        }

        echo "
          <tr>
            <td>$i[nome]</td>
            <td>$i[tt_aula]</td>
            <td>$i[tt_exercicio]</td>
            <td>$i[ds_alternativa]</td>
            <td>$altertype</td>
            <td>
              <a href=''>
                <img src='../../assets/svgs/delete.svg' class='trash'/>
              </a>
            </td>
            <td>
              <a href=''>
                <img src='../../assets/svgs/edit.svg' class='edit'/>
              </a>
            </td>
          </tr>
        ";
      }
    
    ?>
  </table>

</div>
