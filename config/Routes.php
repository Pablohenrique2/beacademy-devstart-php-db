<?php

use App\Controller\IndexController;
use App\Controller\ProductController;
use App\Controller\CategoryController;


function createRouter(string $controllerName, string $methodName)
{
  return ["controller" => $controllerName, 'method' => $methodName];
}
$routes = [
  '/' => createRouter(IndexController::class, "loginAction"),
  '/produto' => createRouter(ProductController::class, 'listAction'),
  '/produto/novo' => createRouter(ProductController::class, 'addAction'),
  '/categorias' => createRouter(CategoryController::class, "listAction"),
  '/categorias/nova' => createRouter(CategoryController::class, "addAction"),

];

return $routes;
