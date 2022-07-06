<?php

class Categoria extends Conexao
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
        $nome_categoria = $data['nome_categoria'];

        $validacaoCategoria = $this->validacaoCategoria($data['nome_categoria']);

        if (count($validacaoCategoria) >= 1) {
            header('Location: cadastrar-categoria.php?categoriaValidacao=1');
        } else {
            try {
                $sql = $this->conexao->prepare("INSERT INTO tb_categoria (nome_categoria) VALUES (?)");
                $sql->bindValue(1, $nome_categoria);
                $sql->execute();

                header('Location: cadastrar-categoria.php?inclusao=1');
            } catch (PDOException $e) {

                echo 'ERROR CADASTRO CATEGORIA: ' . $e->getMessage();
            }
        }
    }

    public function recuperar()
    { //read
        $sql = $this->conexao->prepare("SELECT * FROM tb_categoria ORDER BY id DESC");
        $sql->execute();
        return $sql->fetchAll(PDO::FETCH_ASSOC);
    }

    public function recuperarCategoria($id)
    { //read
        $sql = $this->conexao->prepare("SELECT * FROM tb_categoria WHERE id = $id");
        $sql->execute();

        return $sql->fetchAll(PDO::FETCH_ASSOC);
    }

    public function atualizar($data)
    { //update
        $idCategoria = $data['id'];
        $nome_categoria = $data['nome_categoria'];

        $validacaoCategoria = $this->validacaoCategoria($nome_categoria);

        $categoriasRecup = $this->recuperarCategoria($idCategoria);
        $categoriasRecuperados = $categoriasRecup[0]['nome_categoria'];
        print_r($categoriasRecuperados);
        print_r($nome_categoria);

        if ($nome_categoria == $categoriasRecuperados) {
            header("Location: editar-categoria.php?categoriaValidacao=1&id=$idCategoria");
        } elseif (count($validacaoCategoria) >= 1) {
            header("Location: editar-categoria.php?categoriaValidacao=2&id=$idCategoria");
        } else {
            try {
                $sql = $this->conexao->prepare("UPDATE tb_categoria SET nome_categoria = ? WHERE id = ?");
                $sql->bindValue(1, $nome_categoria);
                $sql->bindValue(2, $idCategoria);
                $sql->execute();

                header('Location: listar-categoria.php?editar=1');
            } catch (PDOException $e) {

                echo 'ERROR EDICAO CATEGORIA: ' . $e->getMessage();
            }
        }
    }

    public function excluir($id)
    { //delete
        $sql = $this->conexao->prepare("DELETE FROM tb_categoria WHERE id = $id");
        $sql->execute();


        header('Location: listar-categoria.php?exclusao=1');
    }

    public function validacaoCategoria($nome_categoria)
    {
        $sql = $this->conexao->prepare("SELECT nome_categoria FROM `tb_categoria` WHERE nome_categoria = ?");
        $sql->bindValue(1, $nome_categoria);
        $sql->execute();

        return $sql->fetchAll(PDO::FETCH_ASSOC);
    }
}
