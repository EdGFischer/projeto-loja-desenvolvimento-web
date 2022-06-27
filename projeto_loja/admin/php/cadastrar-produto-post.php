<?php
require_once('funcoes.php');

$nome = $_POST['nome'];
$categoria = $_POST['categoria'];
$cor = $_POST['cor'];
$preco = $_POST['preco'];
$descricao = $_POST['descricao'];

$chama = new comandosAdm();
$chama->cadastroProduto($nome,$categoria,$cor,$preco,$descricao);
header("Location: ../modificar-produto.php");

