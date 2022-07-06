<?php
require_once "Classes/Conexao.php";
require_once "Classes/Produto.php";
require_once "Classes/Categoria.php";

$produto = new Produto();
$produto = $produto->recuperar();

?>

<section class="container">
    <div class="col-xxl-12">
        <div class="text-center text-uppercase m-5">
            <h3 class="m-0">Mercadorias em Estoque</h3>
        </div>
    </div>

    <div class="bloco-filtro-estoque col-xxl-12 p-2 mb-5 rounded shadow">
        <form class="row gy-2 gx-3 p-4 d-flex flex-row align-items-center justify-content-center" action="index.php?acao=filtrar" method="post">

            <div class="col-4">
                <select class="form-select" name="filtro_marca" id="filtro_marca">
                    <option value="todos" selected>Marca...</option>
                    <?php
                    $categoria = new Categoria();
                    $categoria = $categoria->recuperar();

                    foreach ($categoria as $key => $nome_categoria) {
                    ?>
                        <option value="<?= $nome_categoria['nome_categoria'] ?>"><?= $nome_categoria['nome_categoria'] ?></option>
                    <?php
                    }
                    ?>
                </select>
            </div>

            <div class="col-4 d-flex align-content-center justify-content-center">
                <button type="submit" class="botao-filtrar btn btn-primary">Filtrar</button>
            </div>
        </form>
    </div>




    <div class="col-xxl-12 d-flex flex-row align-items-center justify-content-center flex-wrap">
        <?php
        $filtro = isset($_POST['filtro_marca']) ? $_POST['filtro_marca'] : 'todos';

        foreach ($produto as $item) {
            if ($filtro == 'todos') {
        ?>
                <div class="p-3 col-xxl-3 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12">
                    <a class="link-produto" href="pagina_produto.php?id=<?= $item['id'] ?>">
                        <div class="card shadow">
                            <div class="d-flex flex-column align-items-center">
                                <img class="card-img-top" src="<?= $item['url_foto'] ?>" style="height: 200px; max-width: fit-content">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title text-center mb-2"><?= $item['nome'] ?></h5>
                                <div class="my-1 d-flex flex-direction justify-items-center align-content-center">
                                    <div class="bloco-icone-card d-flex flex-column align-items-center justify-content-center">
                                        <i class="fa-solid fa-mobile-screen"></i>
                                    </div>
                                    <p class="card-text"><?= $item['categoria'] ?></p>
                                </div>
                                <div class="my-1 d-flex flex-direction justify-items-center align-content-center">
                                    <div class="bloco-icone-card d-flex flex-column align-items-center justify-content-center">
                                        <i class="fa-solid fa-brush"></i>
                                    </div>
                                    <p class="card-text"><?= $item['cor'] ?></p>
                                </div>
                                <div class="my-1 d-flex flex-direction justify-items-center align-content-center">
                                    <div class="bloco-icone-card d-flex flex-column align-items-center justify-content-center">
                                        <i class="fa-solid fa-money-bill"></i>
                                    </div>
                                    <p class="card-text">R$ <?= $item['preco'] ?> </p>
                                </div>

                                <a href="#" class="botao-detalhes-produto btn btn-primary">Detalhes</a>
                            </div>
                        </div>
                    </a>
                </div>
            <?php } elseif ($filtro == $item['categoria']) {
            ?>
                <div class="p-3 col-xxl-3 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12">
                    <a class="link-produto" href="pagina_produto.php?id=<?= $item['id'] ?>">
                        <div class="card shadow">
                            <div class="d-flex flex-column align-items-center">
                                <img class="card-img-top" src="<?= $item['url_foto'] ?>" style="height: 200px; max-width: fit-content">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title text-center mb-2"><?= $item['nome'] ?></h5>
                                <div class="my-1 d-flex flex-direction justify-items-center align-content-center">
                                    <div class="bloco-icone-card d-flex flex-column align-items-center justify-content-center">
                                        <i class="fa-solid fa-mobile-screen"></i>
                                    </div>
                                    <p class="card-text"><?= $item['categoria'] ?></p>
                                </div>
                                <div class="my-1 d-flex flex-direction justify-items-center align-content-center">
                                    <div class="bloco-icone-card d-flex flex-column align-items-center justify-content-center">
                                        <i class="fa-solid fa-brush"></i>
                                    </div>
                                    <p class="card-text"><?= $item['cor'] ?></p>
                                </div>
                                <div class="my-1 d-flex flex-direction justify-items-center align-content-center">
                                    <div class="bloco-icone-card d-flex flex-column align-items-center justify-content-center">
                                        <i class="fa-solid fa-money-bill"></i>
                                    </div>
                                    <p class="card-text">R$ <?= $item['preco'] ?> </p>
                                </div>

                                <a href="#" class="botao-detalhes-produto btn btn-primary">Detalhes</a>
                            </div>
                        </div>
                    </a>
                </div>
        <?php }
        } ?>
    </div>


</section>