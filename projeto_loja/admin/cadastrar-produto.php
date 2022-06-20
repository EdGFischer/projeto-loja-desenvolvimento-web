<?php
require_once('head.php');
require_once('topo.php');
?>

<section class="d-flex flex-column align-items-center justify-content-center w-100" style="height: 100vh;">
    <div class="card" style="width: 25rem;">
        <div class="card-body rounded bg-dark">
            <h5 class="card-title text-center text-light txt-uppercase mb-3">Cadastro Produto</h5>
            <form class="mb-5 text-center" action="cadastrar-produto-post.php" method="post">
                <div class="username d-flex flex-column-reverse ">
                    <label class="username">Nome Aparalho</label>
                    <input class="inputUsername" type="text" name="nome" required="" value=>
                </div>
                <div class="d-flex flex-column-reverse mt-1">
                    <input type="text" name="categoria" required="">
                    <label class="text">Categoria</label>
                </div>

                <div class="d-flex flex-column-reverse mt-1">
                    <input class=" text-center" type="text" name="cor" required="">
                    <label class="text">Cor</label>
                </div>

                <div class="d-flex flex-column-reverse mt-1">
                    <input class="text-center" type="number" name="preco" required="">
                    <label class="text">Preço Unitário</label>
                </div>
                <div class="d-flex flex-column-reverse mt-1">
                    <textarea class="text-center" style="min-height: 100px;" type="file" name="descricao" required=""></textarea>
                    <label class="text">Descrição Produto</label>
                </div>
                <!-- <div class="d-flex flex-column-reverse mt-1">
                    <input class="text-center" type="file" name="" required="">
                    <label class="text">Imagem</label>
                </div> -->

                <!-- <button style="display:none;" id="botaoCadastrar" type="submit" class="btn btn-secondary botaoLogarCadastrar" data-bs-dismiss="modal">Cadastrar</button> -->
                <button type="submit" class="btn btn-light">Cadastrar</button>
            </form>
        </div>
    </div>

</section>