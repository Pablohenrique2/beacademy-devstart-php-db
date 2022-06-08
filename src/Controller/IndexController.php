<?php

declare(strict_types=1);

namespace App\Controller;

use App\Connection\Connection;

class IndexController extends AbstractController
{
  public function indexAction(): void
  {
    $con = Connection::getConnection();
    $result = $con->prepare("SELECT * FROM tb_product");
    $result->execute();

    parent::render("index/index", $result);
  }
  public function loginAction()
  {
    parent::render("index/login");
  }
}
