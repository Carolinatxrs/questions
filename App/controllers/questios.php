<?php

use App\Auth;
use App\Core\Controller;

class Questios extends Controller
{
  // visualizar todas questões
  public function ver($nome = '')
  {
    Auth::checkLogin();
    $question = $this->model('Question');
    $dados = $question->getAll(); //chamar função contadora

    $this->view('questios/ver', $dados = ['registros' => $dados]);
  }
  // visualiza por id
  public function visualizar($cod_q = '')
  {
    Auth::checkLogin();
    $messagem = array();
    $question = $this->model('Question');
    $dados = $question->findId($cod_q);

    $this->view('questios/visualizar', $dados = ['registros' => $dados, 'messagem' => $messagem]);
  }

  public function cadastrar()
  {
    Auth::checkLogin();
    $messagem = array();
    if (isset($_POST['cadastrar'])) {
      $question = $this->model('Question');
      $question->cod_q = uniqid();
      $question->tema = $_POST['tema'];
      $question->disciplina = $_POST['disciplina'];
      $question->ano = $_POST['ano'];
      $question->descricao = $_POST['descricao'];
      $question->op_a = $_POST['op_a'];
      $question->op_b = $_POST['op_b'];
      $question->op_c = $_POST['op_c'];
      $question->op_d = $_POST['op_d'];
      $question->op_e = $_POST['op_e'];
      $question->resposta = $_POST['resposta'];

      $messagem[] = $question->save();
    }

    $this->view('questios/cadastrar', $dados = ['messagem' => $messagem]);
  }

  public function editar($cod_q = '')
  {
    Auth::checkLogin();
    $messagem = array();
    $question = $this->model('Question');

    if (isset($_POST['atualizar'])) {
      $question = $this->model('Question');
      $question->descricao = $_POST['descricao'];
      $question->op_a = $_POST['op_a'];
      $question->op_b = $_POST['op_b'];
      $question->op_c = $_POST['op_c'];
      $question->op_d = $_POST['op_d'];
      $question->op_e = $_POST['op_e'];

      $messagem[] = $question->update($cod_q);
      $dados = $question->findId($cod_q);
      $this->view('questios/visualizar', $dados = ['registros' => $dados, 'messagem' => $messagem]);
    }
    $dados = $question->findId($cod_q);
    $this->view('questios/editar', $dados = ['registros' => $dados, 'messagem' => $messagem]);
  }

  public function remover($cod_q = '')
  {
    Auth::checkLogin();
    $messagem = array();

    $question = $this->model('Question');
    $messagem[] = $question->delete($cod_q);
    $dados = $question->getAll();

    $this->view('questios/ver', $dados = ['registros' => $dados, 'messagem' => $messagem]);
  }
}
