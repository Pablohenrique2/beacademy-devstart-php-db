<h1>editar produto</h1>
<form action="" method="post">
  <label for="category">categoria</label>
  <select name="category" id="category" class="form-select mb-3">
    <option>--selecione--</option>

  </select><br>

  <label for="name">Nome</label>
  <input id="name" type="text" value="<?php echo $data['name'] ?>" name="name" class="form-control mb-3"><br>

  <label for="description">Descrição</label>
  <textarea id="description" name="description" cols="10" rows="5" class="form-control mb-3"><?php echo $data['description'] ?></textarea>

  <label for="value">Preço</label>
  <input id="value" type="text" value="<?php echo $data['value'] ?>" name="value" class="form-control mb-3"><br>

  <label for="quantity">Quantidade</label>
  <input id="quantity" type="text" value="<?php echo $data['quantity'] ?>" name="quantity" class="form-control mb-3"><br>

  <label for="photo">foto</label>
  <input id="photo" type="text" value="<?php echo $data['photo'] ?> " name="photo" class="form-control mb-3"><br>


  <button class="btn btn-primary">Enviar</button>
</form>