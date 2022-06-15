<?php
$usuario = "root";
$senha = "";
$conexao = new mysqli('localhost',$usuario,$senha, 'junintec');
$conexao->set_charset('utf8');



if ($conexao) {
    echo'';
}else{
    echo'ERRO NO BANCO';
}


$query = "SELECT * FROM tbl_produto"; // sql para execução
$result = $conexao->query($query); // executa query
$result = $result->fetch_all(MYSQLI_ASSOC); // recupera valores de saída;
