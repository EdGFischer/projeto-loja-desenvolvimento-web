<?php
require_once('conexao.php');
$nome = $_POST['nome'];
$categoria = $_POST['categoria'];
$cor = $_POST['cor'];
$preco = $_POST['preco'];
$descricao = $_POST['descricao'];
// INSERT INTO produto (nome, categoria, preco, descricao) values ('$nome', '$categoria', '$preco', '$descricao');

$query = "INSERT INTO teste (nome, categoria, cor, preco, descricao) values ('$nome', '$categoria', '$cor', '$preco', '$descricao')"; // sql para execução
$result = $conexao->query($query); // executa query

header("Location: ./index.php");

