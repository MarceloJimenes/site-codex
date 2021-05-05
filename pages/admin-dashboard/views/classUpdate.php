<link rel="stylesheet" href="styles/table.css">
<div class="box-content">
  <h1 class="title has-text-centered">Aulas Cadastradas</h1>

  <table class="table">
    <tr>
      <td>Aula</td>
      <td>Descrição Aula</td>
      <td>Conteudo</td>
      <td>Descrição Conteúdo</td>
      <td>excluir</td>
      <td>modificar</td>
    </tr>
    <?php
      $sql = $conn -> query ("select * from conteudo");

      while($i = $sql -> fetch_array()) {
        echo "
          <tr>
            <td>$i[tt_aula]</td>
            <td>$i[ds_aula]</td>
            <td>$i[tt_conteudo]</td>
            <td>$i[ds_conteudo]</td>
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
