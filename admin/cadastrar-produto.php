<?php
require_once('head.php');
require_once('topo.php');
require_once('../Classes/Conexao.php');
require_once('../Classes/Categoria.php');
?>

<section class="d-flex flex-column align-items-center justify-content-center w-100" style="height: 100vh;">
    <div class="card" style="width: 25rem;">
        <div class="card-body rounded bg-dark">
            <h5 class="card-title text-center text-light txt-uppercase mb-3">Cadastro Produto</h5>
            <form class="text-center" action="validador-adm.php?acao=cadastrar-produto" method="post">
                <div class="username d-flex flex-column-reverse ">
                    <input class="text-center inputUsername" type="text" name="nome" id="nome" required="">
                    <label class="username">Nome Aparalho</label>
                </div>
                <div class="d-flex flex-column-reverse mt-2">

                    <select class="text-center" required name="categoria" id="categoria">
                        <option disabled value="" selected>Selecione uma Categoria</option>
                        <?php
                        $categoriaRec = new Categoria();
                        $categoria = $categoriaRec->recuperar();
                        foreach ($categoria as $key => $categoriaDados) {
                        ?>
                            <option value="<?= $categoriaDados['nome_categoria'] ?>"><?= $categoriaDados['nome_categoria'] ?></option>
                        <?php
                        }
                        ?>
                    </select>
                    <label class="text">Categoria</label>
                </div>
                <div class="d-flex flex-column-reverse mt-2">
                    <select class="text-center" name="marca" id="marca">
                        <option disabled value="" selected>Selecione uma Marca</option>
                        <option value="Apple">Apple</option>
                        <option value="Motorola">Motorola</option>
                        <option value="Nokia">Nokia</option>
                        <option value="Samsung">Samsung</option>
                    </select>
                    <label class="text">Marca</label>
                </div>
                <div class="d-flex flex-column-reverse mt-2">
                    <input class=" text-center" type="text" name="cor" id="cor" required>
                    <label class="text">Cor</label>
                </div>
                <div class="d-flex flex-column-reverse mt-2">
                    <input class="text-center" type="number" name="quantidade" id="quantidade" required>
                    <label class="text">Quantidade disponível</label>
                </div>
                <div class="d-flex flex-column-reverse mt-2">
                    <input class="text-center" type="number" name="preco" id="preco" required>
                    <label class="text">Preço Unitário</label>
                </div>
                <div class="d-flex flex-column-reverse mt-2">
                    <textarea class="text-center" style="min-height: 100px;" type="file" name="descricao" id="descricao" required></textarea>
                    <label class="text">Descrição Produto</label>
                </div>
                <div class="d-flex flex-column-reverse mt-2">
                    <input class="text-center" type="text" name="url_imagem" id="url_imagem" required>
                    <label class="text">URL Imagem</label>
                </div>

                <button type="" class="mt-4 btn btn-light">Cadastrar</button>
            </form>
            <?php
            if (isset($_GET['inclusao']) && $_GET['inclusao'] == 1) {
            ?>
                <div class="bg-light mt-4 p-1 fw-bold text-success d-flex justify-content-center" style="font-size:0.9em;">
                    <p class="m-0">
                        Categoria cadastrado com sucesso!
                    </p>
                </div>

            <?php
            }
            ?>
        </div>
    </div>

</section>