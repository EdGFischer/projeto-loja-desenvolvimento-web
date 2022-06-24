<?php

require_once 'conexao.php';

class comandos extends Conexao
{
    public function trasDestaque()
    {
        global $result;
        $query = "SELECT * FROM teste";
        $result = $this->conectaBanco()->query($query);
        $result = $result->fetch_all(MYSQLI_ASSOC);
        return $result;
    }


    public function trasProduto($id)
    {
        global $result;
        $query = "SELECT * FROM teste WHERE id = $id"; // sql para execução
        $result = $this->conectaBanco()->query($query);
        $result = $result->fetch_all(MYSQLI_ASSOC);
        return $result;
    }
}
