<?php

namespace App\Core;

//controller base
class Controller
{
  public function model($model)
  {
    require_once '../App/models/' . $model . '.php';
    return new $model;
  }

  public function view($view, $data = [])
  {
    require_once '../App/views/template.php';
  }

  /*public function viewLogin($viewLogin, $data = [])
  {
    require_once '../App/views/templateLogin.php';
  }*/
}
