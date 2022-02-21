<?php

//classe de autenticações

namespace App;

use App\Core\Model;

class Auth
{

  public static function Login($email, $senha)
  {
    $sql = "SELECT * FROM users WHERE email = ?";
    $stmt = Model::getConn()->prepare($sql);
    $stmt->bindValue(1, $email);
    $stmt->execute();

    if ($stmt->rowCount() >= 1) {
      $resultado = $stmt->fetch(\PDO::FETCH_ASSOC);
      if (password_verify($senha, $resultado['senha'])) {
        $_SESSION['logado'] = true;
        $_SESSION['userId'] = $resultado['id'];
        $_SESSION['userNome'] = $resultado['nome'];
        header('Location: /home/index');
      } else {
        return "M.toast({html: 'Senha inválida!', classes: 'rounded, red'});";
      }
    } else {
      return "M.toast({html: 'Email inválido!', classes: 'rounded, red'});";
    }
  }

  public static function Logout()
  {
    session_destroy();
    header('Location: /home/login');
  }

  public static function checkLogin()
  {
    if (!isset($_SESSION['logado'])) {
      header('Location: /home/login');
      die;  //interrompe o script
    }
  }

  // manda para criar nova senha se houver email, se não retorna email inválido
  public static function Password($email)
  {
    $sql = "SELECT * FROM users WHERE email = ?";
    $stmt = Model::getConn()->prepare($sql);
    $stmt->bindValue(1, $email);
    $stmt->execute();

    if ($stmt->rowCount() >= 1) {
      $resultado = $stmt->fetch(\PDO::FETCH_ASSOC);
      $_SESSION['email'] = $resultado['email'];
      header('Location: /home/password');
    } else {
      return "M.toast({html: 'Email inválido!', classes: 'rounded, red'});";
    }
  }

  // fazer alteração no campo senha pela nova
  public static function newPass($email, $senha)
  {
    $sql = "UPDATE users SET senha = ? WHERE email = ?";
    $stmt = Model::getConn()->prepare($sql);
    $stmt->bindValue(1, $senha);
    $stmt->bindValue(2, $email);
    $stmt->execute();
    if ($stmt->execute()) {
      return "M.toast({html: 'Senha redefinida com sucesso!', classes: 'rounded, green'});";
      // header('Location: /home/login');
    } else {
      return "M.toast({html: 'Erro ao redefinir!', classes: 'rounded, red'});";
    }
  }
}
