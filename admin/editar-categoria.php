<?php
require_once('head.php');
require_once('topo.php');

$acao = "recuperar-categoria-edicao";
require_once('validador-adm.php');
?>

<section class="d-flex flex-column align-items-center justify-content-center w-100" style="height: 100vh;">
    <div class="card" style="width: 18rem;">
        <div class="card-body rounded bg-dark">
            <h5 class="card-title text-center text-light txt-uppercase mb-3">Editar Categoria</h5>
            <form class="text-center" action="validador-adm.php?acao=editar-categoria" method="post">
                <div style="display: none">
                    <input required class="text-center form-control inputid" type="text" name="id" id="id" value="<?= $categoriasRecuperados['id'] ?>">
                </div>
                <div class="username d-flex flex-column-reverse ">
                    <input class="inputUsername" type="text" name="nome_categoria" id="nome_categoria" required="" value="<?= $categoriasRecuperados['nome_categoria'] ?>">
                    <label class="username">Nome Categoria</label>

                </div>

                <button type="submit" class="mt-3 btn btn-light">Editar Categoria</button>
            </form>
            <?php
            if (isset($_GET['categoriaValidacao']) && $_GET['categoriaValidacao'] == 1) {
            ?>
            <div class="bg-light mt-4 p-1 fw-bold text-danger d-flex justify-content-center" style="font-size:0.8em;">
                    <p class="m-0">
                        Para editar altere o nome da categoria
                    </p>
                </div>

            <?php
            }
            if (isset($_GET['categoriaValidacao']) && $_GET['categoriaValidacao'] == 2) {
            ?>
            <div class="bg-light mt-4 p-1 fw-bold text-danger d-flex justify-content-center" style="font-size:0.8em;">
                    <p class="m-0">
                        Não é possível alterar, nome de categoria já está sendo usado
                    </p>
                </div>

            <?php
            }
            ?>
        </div>

    </div>

</section>