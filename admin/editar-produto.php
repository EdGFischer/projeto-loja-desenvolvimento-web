<?php
require_once('head.php');
require_once('topo.php');

$acao = "recuperar-produto-edicao";
require_once('validador-adm.php');
?>

<section class="d-flex flex-column align-items-center justify-content-center w-100" style="height: 100vh;">
    <div class="card" style="width: 25rem;">
        <div class="card-body rounded bg-dark">
            <h5 class="card-title text-center text-light txt-uppercase mb-3">Cadastro Produto</h5>
            <form class="text-center" action="validador-adm.php?acao=editar-produto" method="post">
                <div style="display: none">
                    <input required class="text-center form-control inputid" type="text" name="id" id="id" value="<?= $produtosRecuperados['id'] ?>">
                </div>
                <div class="username d-flex flex-column-reverse ">
                    <input class="text-center inputUsername" type="text" name="nome" id="nome" value="<?= $produtosRecuperados['nome'] ?>">
                    <label class="username">Nome Aparalho</label>
                </div>
                <div class="d-flex flex-column-reverse mt-2">

                    <select class="text-center" required name="categoria" id="categoria">
                        <option disabled value="">Selecione uma Categoria</option>
                        <option value="<?= $produtosRecuperados['nome'] ?>" selected><?= $produtosRecuperados['categoria'] ?></option>
                        <?php
                        $categoriaRec = new Categoria();
                        $categoria = $categoriaRec->recuperar();
                        foreach ($categoria as $key => $categoriaDados) {
                            if ($produtosRecuperados['categoria'] != $categoriaDados['nome_categoria']) {
                        ?>
                                <option value="<?= $categoriaDados['nome_categoria'] ?>"><?= $categoriaDados['nome_categoria'] ?></option>
                        <?php
                            }
                        }
                        ?>
                    </select>
                    <label class="text">Categoria</label>
                </div>
                <div class="d-flex flex-column-reverse mt-2">
                    <select class="text-center" name="marca" id="marca">
                        <option disabled value="">Selecione uma Marca</option>
                        <?php if ($produtosRecuperados['nome'] == 'Apple') { ?>
                            <option value="Apple" selected>Apple</option>
                        <?php } else { ?>
                            <option value="Apple">Apple</option>
                        <?php }
                        if ($produtosRecuperados['nome'] == 'Motorola') { ?>
                            <option value="Motorola" selected>Motorola</option>
                        <?php } else { ?>
                            <option value="Motorola">Motorola</option>
                        <?php }
                        if ($produtosRecuperados['nome'] == 'Nokia') { ?>
                            <option value="Nokia" selected>Nokia</option>
                        <?php } else { ?>
                            <option value="Nokia">Nokia</option>
                        <?php }
                        if ($produtosRecuperados['nome'] == 'Samsung') { ?>
                            <option value="Samsung" selected>Samsung</option>
                        <?php } else { ?>
                            <option value="Samsung">Samsung</option>
                        <?php } ?>
                    </select>
                    <label class="text">Marca</label>
                </div>
                <div class="d-flex flex-column-reverse mt-2">
                    <input class=" text-center" type="text" name="cor" id="cor" value="<?= $produtosRecuperados['cor'] ?>" required>
                    <label class="text">Cor</label>
                </div>
                <div class="d-flex flex-column-reverse mt-2">
                    <input class="text-center" type="number" name="quantidade" id="quantidade" value="<?= $produtosRecuperados['quantidade'] ?>" required>
                    <label class="text">Quantidade disponível</label>
                </div>
                <div class="d-flex flex-column-reverse mt-2">
                    <input class="text-center" type="number" name="preco" id="preco" value="<?= $produtosRecuperados['preco'] ?>" required>
                    <label class="text">Preço Unitário</label>
                </div>
                <div class="d-flex flex-column-reverse mt-2">
                    <textarea class="text-center" style="min-height: 100px;" type="file" name="descricao" id="descricao" required><?= $produtosRecuperados['descricao'] ?></textarea>
                    <label class="text">Descrição Produto</label>
                </div>
                <div class="d-flex flex-column-reverse mt-2">
                    <input class="text-center" type="text" name="url_imagem" id="url_imagem" value="<?= $produtosRecuperados['url_foto'] ?>" required>
                    <label class="text">URL Imagem</label>
                </div>

                <button type="" class="mt-4 btn btn-light">Editar</button>
            </form>
            <?php
            if (isset($_GET['inclusao']) && $_GET['inclusao'] == 1) {
            ?>
                <div class="bg-light mt-4 p-1 fw-bold text-success d-flex justify-content-center" style="font-size:0.9em;">
                    <p class="m-0">
                        Produto editado com sucesso!
                    </p>
                </div>

            <?php
            }
            ?>
        </div>
    </div>

</section>