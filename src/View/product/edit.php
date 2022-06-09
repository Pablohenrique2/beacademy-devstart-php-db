<h1>editar produto</h1>
<form action="" method="post">
  <?php

  extract($data); ?>

  <label for="category">categoria</label>
  <input id="category" type="text" value="<?php echo $categories['id'] ?>" name="category" class="form-control mb-3"><br>

  <label for=" name">Nome</label>
  <input id="name" type="text" value="<?php echo $product['name'] ?>" name="name" class="form-control mb-3"><br>

  <label for="description">Descrição</label>
  <textarea id="description" name="description" cols="10" rows="5" class="form-control mb-3"><?php echo $product['description'] ?></textarea>

  <label for="value">Preço</label>
  <input id="value" type="text" value="<?php echo $product['value'] ?>" name="value" class="form-control mb-3"><br>

  <label for="quantity">Quantidade</label>
  <input id="quantity" type="text" value="<?php echo $product['quantity'] ?>" name="quantity" class="form-control mb-3"><br>

  <label for="photo">foto</label>
  <input id="photo" type="text" value="<?php echo $product['photo'] ?> " name="photo" class="form-control mb-3"><br>


  <button class="btn btn-primary">Atualizar</button>
</form>