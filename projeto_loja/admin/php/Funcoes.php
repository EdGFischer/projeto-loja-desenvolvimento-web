<?php
require_once 'conexao.php';

class comandosAdm extends Conexao
{

    public function cadastroProduto($nome,$categoria,$cor,$preco,$descricao)
    {
        $query = "INSERT INTO teste (nome, categoria, cor, preco, descricao) values ('$nome', '$categoria', '$cor', '$preco', '$descricao')"; // sql para execução
        $result = parent::conectaBanco()->query($query); // executa query
        return $result;
    }

    public function pegarProduto($id): array
    {
        global $result;
        $query = "SELECT * FROM teste WHERE id = $id"; // sql para execução
        $result = $this->conectaBanco()->query($query);
        $result = $result->fetch_all(MYSQLI_ASSOC);
        return $result;
    }

    public function alterarProduto(string $nome,string $preco,string $cor,string $id)
    {
        $query = "UPDATE teste SET nome = '$nome', preco = '$preco', cor = '$cor' WHERE id = '$id'"; // sql para execução
        parent::conectaBanco()->query($query); // executa query

    }

    public function deletarProduto($id)
    {
        $query = "DELETE FROM teste WHERE id = $id"; // sql para execução
        $result = parent::conectaBanco()->query($query); // executa query
    }
}



