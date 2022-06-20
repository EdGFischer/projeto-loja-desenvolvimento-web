<?php
require_once('conexao.php');
$id = $_GET['id'];

$query = "DELETE FROM teste WHERE id = $id"; // sql para execução
$result = $conexao->query($query); // executa query

header("Location: ./index.php"); // redireciona para categoria.php;