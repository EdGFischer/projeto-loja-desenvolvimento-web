<?php
require_once('funcoes.php');
$id = $_GET['id'];

$deleta = new comandosAdm();
$deleta->deletarProduto($id);

header("Location: ../modificar-produto.php"); // redireciona para categoria.php;