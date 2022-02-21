<?php

use App\Auth;
use App\Core\Controller;

class Users extends Controller
{
  public function visualizar($id = '')
  {
    Auth::checkLogin();
    $messagem = array();

    $user = $this->model('User');
    $dados = $user->findId($id);

    $this->view('users/visualizar', $dados = ['registros' => $dados, 'messagem' => $messagem]);
  }

  public function cadastrar()
  {
    $messagem = array();

    if (isset($_POST['cadastrar'])) {

      if ((empty($_POST['nome'])) or (empty($_POST['email'])) or (empty($_POST['senha']))) {
        $messagem[] = "M.toast({html: 'Os campos Nome, E-mail e Senha são obrigatórios!', classes: 'rounded, orange'});";
      } else {
        $user = $this->model('User');
        $user->nome = $_POST['nome'];
        $user->email = $_POST['email'];
        $user->senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);

        $messagem[] = $user->save();
      }
    }
    $this->view('home/login', $dados = ['messagem' => $messagem]);
  }

  public function editar($id)
  {
    Auth::checkLogin();
    $messagem = array();
    $user = $this->model('User');

    if (isset($_POST['atualizar'])) {

      if ((empty($_POST['nome'])) or (empty($_POST['email']))) {
        $messagem[] = "M.toast({html: 'O campo nome e email não podem ser em branco!', classes: 'rounded, orange'});";
      } else {
        $user->nome = $_POST['nome'];
        $user->email = $_POST['email'];

        $messagem[] = $user->update($id);

        $dados = $user->findId($id);
        $this->view('users/visualizar', $dados = ['registros' => $dados, 'messagem' => $messagem]);
      }
    }
    $dados = $user->findId($id);
    $this->view('users/editar', $dados = ['registros' => $dados, 'messagem' => $messagem]);
  }

  public function remover($id = '')
  {
    Auth::checkLogin();
    $messagem = array();

    $user = $this->model('User');
    $messagem[] = $user->delete($id);
    Auth::Logout();


    $this->view('home/login', $dados = ['messagem' => $messagem]);
  }
}
