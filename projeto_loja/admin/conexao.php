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

