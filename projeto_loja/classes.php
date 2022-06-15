<?php 

Class Produto
{

    public function exibirNoEstoque(int $id): array
    {   
        $selecionaProduto = $this->conexao->prepare("SELECT * FROM 'tbl_produto' WHERE id = ?");

        $selecionaProduto->bind_Param('i',$id);
        $selecionaProduto->execute();
        $produtos = $selecionaProduto->get_result()->fetch_assoc();

        return $produtos;
    }
    
}