<?php

class Produto extends Conexao
{
    private $id;

    /*GETs*/
    function getId()
    {
        return $this->id;
    }

    /*SETs*/
    function setId($id)
    {
        $this->id = $id;
    }

    public function __construct()
    {
        $this->conecta = new Conexao;
        $this->conexao = $this->conecta->conectar();
    }

    public function cadastrar($data)
    { //create
        $nome_produto = $data['nome'];
        $categoria_produto = $data['categoria'];
        $marca_produto = $data['marca'];
        $cor_produto = $data['cor'];
        $quantidade_produto = $data['quantidade'];
        $preco_produto = $data['preco'];
        $descricao_produto = $data['descricao'];
        $url_foto_produto = $data['url_imagem'];

        try {
            $sql = $this->conexao->prepare("INSERT INTO tb_produto (nome, categoria, marca, cor, quantidade, preco, descricao, url_foto) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
            $sql->bindValue(1, $nome_produto);
            $sql->bindValue(2, $categoria_produto);
            $sql->bindValue(3, $marca_produto);
            $sql->bindValue(4, $cor_produto);
            $sql->bindValue(5, $quantidade_produto);
            $sql->bindValue(6, $preco_produto);
            $sql->bindValue(7, $descricao_produto);
            $sql->bindValue(8, $url_foto_produto);
            $sql->execute();

            header('Location: cadastrar-produto.php?inclusao=1');
        } catch (PDOException $e) {

            echo 'ERROR CADASTRO produto: ' . $e->getMessage();
        }
    }

    public function recuperar()
    { //read
        $sql = $this->conexao->prepare("SELECT * FROM tb_produto ORDER BY id DESC");
        $sql->execute();
        return $sql->fetchAll(PDO::FETCH_ASSOC);
    }

    public function recuperarProduto($id)
    { //read
        $sql = $this->conexao->prepare("SELECT * FROM tb_produto WHERE id = $id");
        $sql->execute();

        return $sql->fetchAll(PDO::FETCH_ASSOC);
    }

    public function atualizar($data)
    { //update
        $idProduto = $data['id'];
        $nome = $data['nome'];
        $categoria = $data['categoria'];
        $marca = $data['marca'];
        $cor = $data['cor'];
        $quantidade = $data['quantidade'];
        $preco = $data['preco'];
        $descricao = $data['descricao'];
        $url_foto = $data['url_imagem'];

        try {
            $sql = $this->conexao->prepare("UPDATE tb_produto SET nome = ?, categoria = ?, marca = ?, cor = ?, quantidade = ?, preco = ?, descricao = ?, url_foto = ? WHERE id = ?");
            $sql->bindValue(1, $nome);
            $sql->bindValue(2, $categoria);
            $sql->bindValue(3, $marca);
            $sql->bindValue(4, $cor);
            $sql->bindValue(5, $quantidade);
            $sql->bindValue(6, $preco);
            $sql->bindValue(7, $descricao);
            $sql->bindValue(8, $url_foto);
            $sql->bindValue(9, $idProduto);
            $sql->execute();

            header('Location: listar-produto.php?editar=1');
        } catch (PDOException $e) {

            echo 'ERROR EDICAO produto: ' . $e->getMessage();
        }
    }

    public function excluir($id)
    { //delete
        $sql = $this->conexao->prepare("DELETE FROM tb_produto WHERE id = $id");
        $sql->execute();


        header('Location: listar-produto.php?exclusao=1');
    }
}
