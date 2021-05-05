<link rel="stylesheet" href="styles/table.css">
<div class="box-content">
  <h1 class="title has-text-centered">Aulas Cadastradas</h1>

  <table class="table">
    <tr>
      <th>Aula</th>
      <th>Descrição Aula</th>
      <th>Conteudo</th>
      <th>Descrição Conteúdo</th>
      <th>Excluir</th>
      <th>Modificar</th>
    </tr>
    <?php
      $sql = $conn -> query ("select * from conteudo");

      while($i = $sql -> fetch_array()) {
        echo "
          <tr>
            <td>$i[tt_aula]</td>
            <td>$i[ds_aula]</td>
            <td><abbr title='$i[tt_conteudo]'>".mb_strimwidth($i['tt_conteudo'], 0, 55, '...')."</abbr></td>
            <td><abbr title='$i[ds_conteudo]'>".mb_strimwidth($i['ds_conteudo'], 0, 55, '...')."</abbr></td>
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
