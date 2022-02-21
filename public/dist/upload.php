<?php
//receber os dados da imagem

$dados_imagem = $_FILES['image'];

//diretorio que será salvo a imagem
$diretorio = 'images/';

//gerar chave aleatoria para o nome do arquivo
$chave = substr(md5(rand()), 0, 16);

//recuperar a extensão
$extensao = pathinfo($dados_imagem['name'], PATHINFO_EXTENSION);

//atribui nome do arquivo
$nome_arquivo = $chave . "." . $extensao;

//upload do arquivo
move_uploaded_file($dados_imagem['tmp_name'], $diretorio . $nome_arquivo);
// move_uploaded_file($dados_imagem['tmp_name'], $diretorio . $dados_imagem['name']);

$retorno['success'] = true;
$retorno['file'] = "http://questions/dist/images/" . $nome_arquivo;
// $retorno['file'] = "http://questions/dist/images/" . $dados_imagem['name'];

echo json_encode($retorno);
