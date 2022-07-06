<?php
require_once('head.php');
require_once('topo.php');
?>

<section class="d-flex flex-column align-items-center justify-content-center w-100" style="height: 100vh;">
    <div class="card" style="width: 18rem;">
        <div class="card-body rounded bg-dark">
            <h5 class="card-title text-center text-light txt-uppercase mb-3">Cadastro Categoria</h5>
            <form class="text-center" action="validador-adm.php?acao=cadastrar-categoria" method="post">

                <div class="username d-flex flex-column-reverse ">
                    <input class="inputUsername" type="text" name="nome_categoria" id="nome_categoria" required="">
                    <label class="username">Nome Categoria</label>

                </div>

                <button type="submit" class="mt-3 btn btn-light">Cadastrar Categoria</button>
            </form>
            <?php
            if (isset($_GET['inclusao']) && $_GET['inclusao'] == 1) {
            ?>
                <div class="bg-light mt-4 p-1 fw-bold text-success d-flex justify-content-center" style="font-size:0.8em;">
                    <p class="m-0">
                        Categoria cadastrado com sucesso!
                    </p>
                </div>

            <?php
            }
            if (isset($_GET['categoriaValidacao']) && $_GET['categoriaValidacao'] == 1) {
            ?>
            <div class="bg-light mt-4 p-1 fw-bold text-danger d-flex justify-content-center" style="font-size:0.8em;">
                    <p class="m-0">
                        Categoria já está cadastrada no sistema!
                    </p>
                </div>

            <?php
            }
            ?>
        </div>

    </div>

</section>