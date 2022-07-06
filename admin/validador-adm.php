<?php

require_once "../Classes/Conexao.php";
require_once "../Classes/Categoria.php";
require_once "../Classes/Produto.php";

$acao = isset($_GET['acao']) ? $_GET['acao'] : $acao;


if ($acao == 'cadastrar-categoria') {

    $data = $_POST;
    $categoria = new Categoria();
    $categoria->cadastrar($data);

} if ($acao == 'recuperar-categoria') {

    $categoria = new Categoria();
    $categoriaRecuperados = $categoria->recuperar();

}  if ($acao == 'recuperar-categoria-edicao') {

    $idCategoria = $_GET['id'];
    $categoria = new Categoria();
    $categoriasRecuperados = $categoria->recuperarCategoria($idCategoria);
    $categoriasRecuperados = $categoriasRecuperados[0];

}  else if ($acao == 'editar-categoria') {

    $data = $_POST;
    $categoria = new Categoria();
    $categoria->atualizar($data);

} else if ($acao == 'excluir-categoria') {

    $idCategoria = $_GET['id'];
    $categoria = new Categoria();
    $categoria->excluir($idCategoria);

}if ($acao == 'cadastrar-produto') {

    $data = $_POST;
    $produto = new Produto();
    $produto->cadastrar($data);

} if ($acao == 'recuperar-produto') {

    $produto = new Produto();
    $produtoRecuperados = $produto->recuperar();

}  if ($acao == 'recuperar-produto-edicao') {

    $idProduto = $_GET['id'];
    $produto = new Produto();
    $produtosRec = $produto->recuperarProduto($idProduto);
    $produtosRecuperados = $produtosRec[0];

}  else if ($acao == 'editar-produto') {

    $data = $_POST;
    $produto = new Produto();
    $produto->atualizar($data);

} else if ($acao == 'excluir-produto') {

    $idProduto = $_GET['id'];
    $produto = new Produto();
    $produto->excluir($idProduto);

}
