<?php

declare(strict_types=1);

namespace App\Controller;

use App\Connection\Connection;



class CategoryController extends AbstractController
{
  public function listAction()
  {
    $con = Connection::getConnection();
    $query = "SELECT * FROM tb_category;";
    $result = $con->prepare($query);
    $result->execute();

    parent::render("category/list", $result);
  }
  public function addAction()
  {
    if ($_POST) {
      $name = $_POST['name'];
      $description = $_POST['description'];
      $query = "INSERT INTO tb_category (name,description) VALUES('{$name}','{$description}');";
      $con = Connection::getConnection();
      $result = $con->prepare($query);
      $result->execute();
      echo 'Pronto categoria inserida!!';
    }
    parent::render("category/add");
  }
  public function removeAction(): void

  {
    $con = Connection::getConnection();
    $query = "DELETE FROM tb_category where id ={$_GET['id']};";
    $result = $con->prepare($query);
    $result->execute();
    $mensagem = "categoria excluida";
    include dirname(__DIR__) . '/View/_partials/mensagem.php';
  }
  public function editarAction()
  {
    $id = $_GET['id'];
    $con = Connection::getConnection();
    if ($_POST) {
      $newName = $_POST['name'];
      $newDescripition = $_POST['description'];
      $query = "UPDATE tb_category SET name ='{$newName}' , description ='{$newDescripition}' where id ='{$id}'";
      $result = $con->prepare($query);
      $result->execute();
      echo "categoria atualizada";
    }
    $query = "SELECT * FROM tb_category where id='{$id}'";
    $result = $con->prepare($query);
    $result->execute();
    $data = $result->fetch(\PDO::FETCH_ASSOC);
    parent::render("category/edit", $data);
  }
}
