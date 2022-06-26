<?php

namespace App\Model;

require_once  'passwords.php';

class Connection
{
  private static $instance;

  public static function GetConn()
  {
    if (!isset(self::$instance)) {
      self::$instance = new \PDO('mysql:host=localhost;dbname=crudpoo;charset=utf8', '$nameAdmin', '$password');
    }
    return self::$instance;
  }
}
