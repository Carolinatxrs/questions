<?php

namespace App\Core;

// model base
class Model
{
  private static $instance;

  public static function getConn()
  {
    if (!isset(self::$instance)) {
      self::$instance = new \PDO('mysql:host=localhost;dbname=questions;charset=utf8', 'root', '');
    }

    return self::$instance;
  }
}
