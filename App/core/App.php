<?php

namespace App\Core;

class App
{
  //padrão de rota p/ paramentro controller e metodo
  protected $controller = 'home';
  protected $method = 'index';
  protected $params = [];
  public function __construct()
  {
    $url = $this->parseURL();

    /*condição se existe controller 
    atualizar dado do controller*/
    if (file_exists('../App/controllers/' . $url[1] . '.php')) {
      $this->controller = $url[1];
      unset($url[1]);
    } elseif (empty($url[1])) { //se vazio entra no home
      $this->controller = 'home';
    } else { //se valor não existe retorna pagina de erro
      $this->controller = 'erro404';
    }

    require_once '../App/controllers/' . $this->controller . '.php';
    $this->controller = new $this->controller;

    /*condição se existe metodo no objeto controller*/
    if (isset($url[2])) {
      if (method_exists($this->controller, $url[2])) {
        $this->method = $url[2];
        unset($url[2]);
        unset($url[0]);
      }
    }

    /*se positivo atribui valores, se n permanece vazio*/
    $this->params = $url ? array_values($url) : [];

    /*executar metodo dentro de controller*/
    call_user_func_array([$this->controller, $this->method], $this->params);
  }

  public function parseURL()
  {
    return explode('/', filter_var($_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'], FILTER_SANITIZE_URL));
  }

  public function currentURL()
  {
    $url = $this->parseURL();
    if ($url[1] == "" and !isset($url[2])) {  //condição para o indice 1 vazio e se 2 não existir
      $url[1] = "home";
      $url[2] = "index";
    }
    return URL_BASE . "/" . $url[1] . "/" . $url[2] . "/";
  }
}
