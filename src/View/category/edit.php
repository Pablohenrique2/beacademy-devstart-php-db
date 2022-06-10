<div class="container">
  <h1> editar categoria</h1>
  <form action="" method="post">
    <label for="name">Nome</label>
    <input id="name" type="text" name="name" value="<?php echo $data['name']; ?>" class="form-control"><br>
    <label for="description">Descrição</label>
    <textarea id="description" name="description" cols="10" rows="5" class="form-control"><?php echo $data['description']; ?></textarea>
    <button class="btn btn-primary">Editar</button>
  </form>
</div>