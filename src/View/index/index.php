<h1>Pagina inicial</h1>
<h2>Informática</h2>
<hr>
<div class='div-produto '>
  <?php

  while ($product = $data->fetch(\PDO::FETCH_ASSOC)) {
    extract($product);
    echo "
<div class='div-produto-filho' >

<img  src='{$photo}' alt=''>
<h3>{$name}</h3>
<p>{$description}</p>
<p> R$ {$value}</p>

<a href='' class='btn btn-outline-primary'>Comprar</a>

</div>";
  }; ?>
</div>
<h2>Acessorios</h2>
<style>
  .div-produto {
    display: flex;
    padding: 24px 16px;
    ;
  }

  .div-produto-filho {
    width: 1000;
    height: 100%;
    background: #fafafa;
    margin-left: 10px;
    border: 5px solid #fafafa;
    border-radius: 4px;

  }

  .div-produto-filho img {
    max-width: 100%;
    max-height: 100%;
    padding: 16px;

  }

  .div-produto-filho h3,
  p {
    margin-left: 5px;
  }
</style>