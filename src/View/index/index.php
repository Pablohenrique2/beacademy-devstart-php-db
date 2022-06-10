<main class="carrosel">
  <ul>
    <li><img src="https://m.media-amazon.com/images/I/716gbwgdY-L._AC_SL1500_.jpg" alt=""></li>
    <li><img src="https://s2.glbimg.com/Mubd0vJd-V-K2W8Br8l1ijVoLHA=/0x0:874x513/984x0/smart/filters:strip_icc()/i.s3.glbimg.com/v1/AUTH_08fbf48bc0524877943fe86e43087e7a/internal_photos/bs/2020/h/9/BD6AROQiOm9FbO3hQbeg/captura-de-tela-2020-06-03-as-13.12.31.png" alt=""></li>
    <li><img src="https://geek360.com.br/wp-content/uploads/2017/11/melhores-monitores-gamer-1.png" alt=""></li>
  </ul>
</main>
<div class="container mt-3">
  <div class="text-center mt-4">
    <h1>Categorias em Destaque</h1>
  </div>
  <div class="produtos mt-3">

    <div class="text-center">
      <img src="https://img.olhardigital.com.br/wp-content/uploads/2021/03/computador-pc-gamer.jpeg" alt="">
      <p>Computadores</p>
    </div>
    <div class="text-center">
      <img src="https://meups.com.br/wp-content/uploads/2021/08/Consoles-Destacada.jpg" alt="">
      <p>Consoles</p>
    </div>
    <div class="text-center">
      <img src="http://www.meupositivo.com.br/doseujeito/wp-content/uploads/2019/05/para-que-serve-memoria-ram.jpg" alt="">
      <p>memorias</p>
    </div>
    <div class="text-center">
      <img src="https://www.ashtarbrindes.com.br/img/categorias/tema/TECNOLOGIA-INFORMATICA-18-m.jpg" alt="">
      <p>acessorios</p>
    </div>

  </div>

  <div class="text-center mt-4">
    <h2>Produtos em Destaque</h2>
  </div>
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


</div>