<div class="container">
  <h1>listar product</h1>
  <div class="mb-3">
    <a href="/produto/novo" class="btn btn-outline-primary">Novo produto</a>
  </div>
  <table class="table table-hover table-striped">
    <thead class="table-dark">
      <tr>
        <th>#id</th>
        <th>Nome</th>
        <th>foto</th>
        <th>Descrição</th>
        <th>quantidade</th>
        <th>valor</th>
        <th>data de lançamento</th>
        <th>Ações</th>


      </tr>
    </thead>

    <tbody>
      <?php
      while ($product = $data->fetch(\PDO::FETCH_ASSOC)) {
        extract($product);
        echo "<tr>";
        echo " <td>{$id}</td>";
        echo " <td>{$name}</td>";
        echo " <td><img width=100px; src='{$photo}' alt=''></td>";
        echo " <td>{$description}</td>";
        echo " <td>{$quantity}</td>";
        echo " <td> R$ {$value}</td>";
        echo " <td>{$create_at}</td>";
        echo "<td>
        <a href='/produto/excluir?id={$id}' class='btn btn-danger btn-sm mt-2' >Excluir</a>
        <a href='/produto/editar?id={$id}' class='btn btn-warning btn-sm mt-2' >Editar</a>
        </td> ";

        echo "</tr>";
      };
      ?>
    </tbody>

  </table>