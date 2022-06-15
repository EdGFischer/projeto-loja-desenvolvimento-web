<?php

define('HOST','localhost');
define('DATABASENAME','junintec');
define('USER','root');
define('PASSWORD','');

class Conexao 
{
    protected $conexao;

    function __construct()
    {
        echo 'oi';
        $this->conectaBanco();
    }
    
    function conectaBanco()
    {
        try {
            $this->conectaBanco = new PDO('mysql:host='.HOST.';dbname'.DATABASENAME, USER, PASSWORD);
        } catch (PDOException $e) {
            echo "Erro";
        }
    }
}