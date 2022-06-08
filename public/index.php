<?php
include "../vendor/autoload.php";
/*
use App\Connection\Connection;

$connection = Connection::getConnection();


$query = "SELECT * FROM tb_category;";
$preparacao = $connection->prepare($query);
$preparacao->execute();
while ($registros = $preparacao->fetch()) {
  var_dump($registros);
}

*/


use App\Controller\ErrorController;

include dirname(__DIR__) . "/src/View/head/head.php";
include dirname(__DIR__) . '/src/View/menu/nav.php';

$url = explode('?', $_SERVER['REQUEST_URI'])[0];
$routes = include "../config/Routes.php";
if (false == isset($routes[$url])) {
  (new ErrorController())->notFoundAction();
  exit;
}

$controllerName = $routes[$url]['controller'];
$methodName = $routes[$url]['method'];
(new $controllerName())->$methodName();
include dirname(__DIR__) . "/src/View/footer/footer.php";
