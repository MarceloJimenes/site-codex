<link rel="stylesheet" href="styles/table.css">
<div class="box-content">
  <h1 class="title has-text-centered">Linguagens Cadastradas</h1>

  <table class="table">
    <tr>
      <th>Linguagem</th>
      <th>Descrição</th>
      <th>Tipo</th>
      <th>Excluir</th>
      <th>Modificar</th>
    </tr>
    <?php
      $sql = $conn -> query ("select * from linguagens");

      while($i = $sql -> fetch_array()) {
        echo "
          <tr>
            <td>$i[nome]</td>
            <td>$i[descricao]</td>
            <td>$i[tipo]</td>
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
