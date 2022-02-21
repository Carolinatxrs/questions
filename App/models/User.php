<?php

use App\Core\Model;

class User extends Model
{

  public $nome;
  public $email;
  public $senha;

  public function save()
  {
    $sql = "INSERT INTO users (nome, email, senha) VALUES (?, ?, ?)";
    $stmt = Model::getConn()->prepare($sql);
    $stmt->bindValue(1, $this->nome);
    $stmt->bindValue(2, $this->email);
    $stmt->bindValue(3, $this->senha);

    if ($stmt->execute()) {
      return "M.toast({html: 'Cadastrado com sucesso!', classes: 'rounded, green'});";
    } else {
      return "M.toast({html: 'Erro ao cadastrar!', classes: 'rounded, red'});";
    }
  }
  // visualizar usuarios
  public function getAll()
  {
    $sql = "SELECT * FROM users";
    $stmt = Model::getConn()->prepare($sql);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
      $resultado = $stmt->fetchAll(\PDO::FETCH_ASSOC);
      return $resultado;
    } else {
      return [];
    }
  }

  public function findId($id)
  {
    $sql = "SELECT * FROM users WHERE id = ?";
    $stmt = Model::getConn()->prepare($sql);
    $stmt->bindValue(1, $id);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
      $resultado = $stmt->fetch(\PDO::FETCH_ASSOC);
      return $resultado;
    } else {
      return [];
    }
  }
  // alterando registro
  public function update($id)
  {
    $sql = "UPDATE users SET nome = ?, email = ? WHERE id = ?";
    $stmt = Model::getConn()->prepare($sql);
    $stmt->bindValue(1, $this->nome);
    $stmt->bindValue(2, $this->email);
    $stmt->bindValue(3, $id);

    if ($stmt->execute()) {
      return "M.toast({html: 'Atualizado com sucesso!', classes: 'rounded, green'});";
    } else {
      return "M.toast({html: 'Erro ao atualizar!', classes: 'rounded, red'});";
    }
  }
  // remoção
  public function delete($id)
  {
    $sql = "DELETE FROM users WHERE id = ?";
    $stmt = Model::getConn()->prepare($sql);
    $stmt->bindValue(1, $id);

    if ($stmt->execute()) {
      return "M.toast({html: 'Removido com sucesso!', classes: 'rounded, green'});";
    } else {
      return "M.toast({html: 'Erro ao remover', classes: 'rounded, red'});";
    }
  }
}
