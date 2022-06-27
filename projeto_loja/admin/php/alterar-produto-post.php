<?php
require_once('funcoes.php');

$id = $_GET['id'];
$nome = $_POST['nome'];
$preco = $_POST['preco'];
$cor = $_POST['cor'];
$chama = new comandosAdm();
$chama->alterarProduto($nome,$preco,$cor,$id);

header("Location: ../modificar-produto.php");
