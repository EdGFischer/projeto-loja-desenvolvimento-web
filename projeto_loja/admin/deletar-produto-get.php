<?php
require_once('conexao.php');
$id = $_GET['id'];

$query = "DELETE FROM tbl_produto WHERE id = $id"; // sql para execução
$result = $conexao->query($query); // executa query