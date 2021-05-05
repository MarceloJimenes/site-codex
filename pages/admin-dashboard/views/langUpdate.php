<link rel="stylesheet" href="styles/table.css">
<div class="box-content">
  <h1 class="title has-text-centered">Linguagens Cadastradas</h1>

  <table class="table">
    <tr>
      <td>Linguagem</td>
      <td>Descrição</td>
      <td>Tipo</td>
      <td>excluir</td>
      <td>modificar</td>
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
