<?php

declare(strict_types=1);

namespace App\Connection;

use PDO;

abstract class Connection
{
  public static function getConnection(): PDO
  {
    $db = 'db_store';
    $user = 'root';
    $pass = '';
    return  new PDO("mysql: host=localhost;dbname=" . $db, $user, $pass);
  }
}
