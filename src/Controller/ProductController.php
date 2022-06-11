<?php

declare(strict_types=1);

namespace App\Controller;

use App\Connection\Connection;
use Dompdf\Dompdf;


class ProductController extends AbstractController
{
  public function listAction(): void
  {
    $con = Connection::getConnection();
    $query = "SELECT * FROM tb_product";
    $result = $con->prepare($query);
    $result->execute();

    parent::render("product/list", $result);
  }


  public function addAction(): void
  {
    $con = Connection::getConnection();
    if ($_POST) {
      $name = $_POST['name'];
      $description = $_POST['description'];
      $photo = $_POST['photo'];
      $value = $_POST['value'];
      $category = $_POST['category'];
      $quantity  = $_POST['quantity'];
      $createAt = date('Y-m-d H:i:s');
      $result = $con->prepare(
        "INSERT INTO tb_product (name,description,photo,value,category_id,quantity,create_at)
      values('{$name}','{$description}','{$photo}','{$value}','{$category}','{$quantity}','{$createAt}');"
      );
      $result->execute();
      $mensagem = "cadastro realizado com sucesso";
      include dirname(__DIR__) . '/View/_partials/mensagem.php';
    }
    $result = $con->prepare("SELECT * FROM tb_category");
    $result->execute();
    parent::render("product/add", $result);
  }
  public function removeAction()
  {
    $id = $_GET['id'];
    $con = Connection::getConnection();
    $result = $con->prepare("DELETE FROM tb_product where id='{$id}'");
    $result->execute();
    $mensagem = "Produto excluido";
    include dirname(__DIR__) . '/View/_partials/mensagem.php';
  }


  public function editAction(): void
  {
    $id = $_GET['id'];
    $con = Connection::getConnection();


    if ($_POST) {
      $name = $_POST['name'];
      $description = $_POST['description'];
      $photo = $_POST['photo'];
      $value = $_POST['value'];
      $quantity  = $_POST['quantity'];
      $query = "UPDATE tb_product SET 
      name='{$name}', 
      description='{$description}',
      value='{$value}',
      photo='{$photo}',
      quantity='{$quantity}'
       where id='{$id}'";
      $result = $con->prepare($query);
      $result->execute();

      $mensagem = "produto atualizado";
    }

    $categories = $con->prepare("SELECT * FROM tb_category  ");
    $categories->execute();

    $product = $con->prepare("SELECT * FROM tb_product where id='{$id}'");
    $product->execute();
    include dirname(__DIR__) . '/View/_partials/mensagem.php';
    parent::render("product/edit", [
      'product' => $product->fetch(\PDO::FETCH_ASSOC),
      'categories' => $categories->fetch(\PDO::FETCH_ASSOC),

    ]);
  }
  public function reportAction(): void
  {
    $con = Connection::getConnection();
    $result = $con->prepare('SELECT prod.id,prod.name, prod.quantity,cat.name as category FROM tb_product prod INNER JOIN tb_category cat ON prod.category_id =cat.id');
    $result->execute();
    $content = '';
    while ($product = $result->fetch(\PDO::FETCH_ASSOC)) {
      extract($product);
      $content .= "
      <tr>
      <td>{$id}</td>
      <td>{$name}</td>
      <td>{$quantity}</td>
      <td>{$category}</td>

      </tr>
      ";
    }
    $html = "
    <h1>Relatorio de produtos no estoque</h1>
    <table border='1' width='100%'>
    <thead>
    <tr>
    <th>id</th>
    <th>Nome</th>
    <th>Quantidade</th>
    <th>Categoria</th>
    </tr>
    </thead>
    <tbody>
    <tr>
    <td>{$content}</td>
    </tr>
    </tbody>

    </table>
    
    ";
    $dompdf = new Dompdf();
    $dompdf->loadHtml($html);
    $dompdf->render();
    $dompdf->stream();
  }
}