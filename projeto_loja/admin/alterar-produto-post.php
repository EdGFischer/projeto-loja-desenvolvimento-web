<?php
require_once('conexao.php');

$id = $_GET['id'];
$nome = $_POST['nome'];

$query = "UPDATE teste SET nome = '$nome' WHERE id = '$id'"; // sql para execução
$result = $conexao->query($query); // executa query
header("Location: modificar-produto.php");
