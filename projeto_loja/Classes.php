<?php

require_once 'admin/php/conexao.php';

class comandos extends Conexao
{
    public function trazDestaque($str)
    {
        global $result;
        $query = $str;
        $result = $this->conectaBanco()->query($query);
        $result = $result->fetch_all(MYSQLI_ASSOC);
        return $result;
    }


    public function trazProduto($id)
    {
        global $result;
        $query = "SELECT * FROM teste WHERE id = $id"; // sql para execução
        $result = $this->conectaBanco()->query($query);
        $result = $result->fetch_all(MYSQLI_ASSOC);
        return $result;
    }
}
