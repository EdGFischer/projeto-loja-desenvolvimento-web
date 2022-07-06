<?php

class Conexao
{
    private static $conexao;
    private $host = 'localhost';
    private $dbname = 'junintec';
    private $user = 'root';
    private $pass = '';

    public function __construct()
    {
        $this->conectar();
    }

    public function conectar()
    {
        try {

            self::$conexao = new PDO("mysql:host=$this->host;dbname=$this->dbname", "$this->user", "$this->pass");

            return self::$conexao;
        } catch (PDOException $e) {
            echo '<p>' . $e->getMessage() . '</p>';
        }
    }
}

?>