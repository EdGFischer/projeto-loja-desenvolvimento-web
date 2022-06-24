<?php

class Conexao
{
    protected $conexao;

    function __construct()
    {
       $this->conectaBanco();
    }
    function conectaBanco()
    {
            $this->conectaBanco = new mysqli('localhost','root','', 'junintec');
            return $this->conectaBanco;
    }
}
