<?php

use App\Auth;
use App\Core\Controller;

class Home extends Controller
{
  public function index($nome = '')
  {
    Auth::checkLogin();
    // $user = $this->model('User');
    $question = $this->model('Question');
    $dados = $question->getAll(); //chamar função contadora

    $this->view('home/index', $dados = ['registros' => $dados]); //view exibir balões com total de user e questões
  }

  public function login()
  {
    $messagem = array();

    if (isset($_POST['entrar'])) {

      if ((empty($_POST['email'])) or (empty($_POST['senha']))) {
        $messagem[] = "M.toast({html: 'O campo email e senha são obrigatórios!', classes: 'rounded, orange'});";
      } else {
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $messagem[] = Auth::Login($email, $senha);
      }
    }

    $this->view('home/login', $dados = ['messagem' => $messagem]);
  }

  public function logout()
  {
    Auth::Logout();
  }

  public function redefinir()
  {
    $messagem = array();
    if (isset($_POST['buscar'])) {

      if (empty($_POST['email'])) {
        $messagem[] = "M.toast({html: 'O campo email é obrigatório!', classes: 'rounded, orange'});";
      } else {
        $email = $_POST['email'];

        $messagem[] = Auth::Password($email);
      }
    }
    $this->view('home/redefinir', $dados = ['messagem' => $messagem]);
  }

  public function password()
  {
    $messagem = array();
    if (isset($_POST['enviar'])) {

      if (empty($_POST['senha'])) {
        $messagem[] = "M.toast({html: 'O campo senha é obrigatório!', classes: 'rounded, orange'});";
      } else {
        $email = $_POST['email'];
        $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);
        $messagem[] = Auth::newPass($email, $senha);
        $this->view('/home/login', $dados = ['messagem' => $messagem]);
      }
    }

    $this->view('home/password', $dados = ['messagem' => $messagem]);
  }
}
