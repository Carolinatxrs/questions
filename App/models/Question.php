<?php

use App\Core\Model;

class Question extends Model
{
  public $cod_q;
  public $tema;
  public $disciplina;
  public $ano;
  public $descricao;
  public $op_a;
  public $op_b;
  public $op_c;
  public $op_d;
  public $op_e;
  public $resposta;

  //CRUD
  // metodo para listar tudo
  public function getAll()
  {
    $sql = "SELECT * FROM question";
    $stmt = Model::getConn()->prepare($sql);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
      $resultado = $stmt->fetchAll(\PDO::FETCH_ASSOC);
      return $resultado;
    } else {
      return [];
    }
  }

  // listando pelo id
  public function findId($cod_q)
  {
    $sql = "SELECT * FROM question WHERE cod_q = ?";
    $stmt = Model::getConn()->prepare($sql);
    $stmt->bindValue(1, $cod_q);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
      $resultado = $stmt->fetch(\PDO::FETCH_ASSOC);
      return $resultado;
    } else {
      return [];
    }
  }

  // salva no banco
  public function save()
  {
    $sql = "INSERT INTO question (cod_q, tema, disciplina, ano, descricao, op_a, op_b, op_c, op_d, op_e, resposta) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = Model::getConn()->prepare($sql);
    $stmt->bindValue(1, $this->cod_q);
    $stmt->bindValue(2, $this->tema);
    $stmt->bindValue(3, $this->disciplina);
    $stmt->bindValue(4, $this->ano);
    $stmt->bindValue(5, $this->descricao);
    $stmt->bindValue(6, $this->op_a);
    $stmt->bindValue(7, $this->op_b);
    $stmt->bindValue(8, $this->op_c);
    $stmt->bindValue(9, $this->op_d);
    $stmt->bindValue(10, $this->op_e);
    $stmt->bindValue(11, $this->resposta);

    if ($stmt->execute()) {
      // return 'Cadastrado com sucesso!';
      return "M.toast({html: 'Cadastrado com sucesso!', classes: 'rounded, green'});";
    } else {
      // return 'Erro ao cadastrar!';
      return "M.toast({html: 'Erro ao cadastrar!', classes: 'rounded, red'});";
    }
  }

  //alterando registro
  public function update($cod_q)
  {
    $sql = "UPDATE question SET descricao = ?, op_a = ?, op_b = ?, op_c = ?, op_d = ?, op_e = ? WHERE cod_q = ?";
    $stmt = Model::getConn()->prepare($sql);
    $stmt->bindValue(1, $this->descricao);
    $stmt->bindValue(2, $this->op_a);
    $stmt->bindValue(3, $this->op_b);
    $stmt->bindValue(4, $this->op_c);
    $stmt->bindValue(5, $this->op_d);
    $stmt->bindValue(6, $this->op_e);
    $stmt->bindValue(7, $cod_q);

    if ($stmt->execute()) {
      return "M.toast({html: 'Atualizado com sucesso!', classes: 'rounded, green'});";
    } else {
      return "M.toast({html: 'Erro ao atualizar!', classes: 'rounded, red'});";
    }
  }

  // excluir registro
  public function delete($cod_q)
  {

    $sql = "DELETE FROM question WHERE cod_q = ?";
    $stmt = Model::getConn()->prepare($sql);
    $stmt->bindValue(1, $cod_q);

    if ($stmt->execute()) {
      return "M.toast({html: 'Excluído com sucesso!', classes: 'rounded, green'});";
    } else {
      return "M.toast({html: 'Erro ao excluir!', classes: 'rounded, red'});";
    }
  }
}
