<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<div class="container">
  <h1>list categoria</h1>

  <table class="table table-hover table-striped">
    <thead class="table-dark">
      <tr>
        <th>#id</th>
        <th>Nome</th>
        <th>Descrição</th>

      </tr>
    </thead>

    <tbody>
      <?php
      while ($category = $data->fetch(\PDO::FETCH_ASSOC)) {

        echo "<tr>";
        echo " <td>" . $category['id'] . "</td>";
        echo " <td>" . $category['name'] . "</td>";
        echo " <td>" . $category['description'] . "</td>";
        echo "</tr>";
      };
      ?>
    </tbody>

  </table>
</div>