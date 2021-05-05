<link rel="stylesheet" href="styles/table.css">
<div class="box-content">
  <h1 class="title has-text-centered">Exercícios Cadastrados</h1>

  <table class="table">
    <tr>
      <td>Linguagem</td>
      <td>Aula</td>
      <td>Exercício</td>
      <td>Enunciado</td>
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
      ");

      while($i = $sql -> fetch_array()) {

        echo "
          <tr>
            <td>$i[nome]</td>
            <td>$i[tt_aula]</td>
            <td>$i[tt_exercicio]</td>
            <td>$i[ds_exercicio]</td>
            <td>
              <a href='../../scripts/php/productDelete/index.php?id=$i[id_produto]'>
                <img src='../../assets/svgs/delete.svg' class='trash'/>
              </a>
            </td>
            <td>
              <a href='../../scripts/php/updateProduct/index.php?id=$i[id_produto]'>
                <img src='../../assets/svgs/edit.svg' class='edit'/>
              </a>
            </td>
          </tr>
        ";
      }
    
    ?>
  </table>

</div>
