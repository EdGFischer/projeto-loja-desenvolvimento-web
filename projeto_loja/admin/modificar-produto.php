<?php
require_once('head.php');
require_once('topo.php');
require_once('../Classes.php');

$result = new comandos();
$result->trazDestaque("SELECT * FROM teste");
?>

<section class="d-flex flex-column align-items-center justify-content-center w-100" style="height: 100vh;">
    <div class="card w-75">
        <div class="card-body rounded bg-dark">
            <h5 class="card-title text-center text-light txt-uppercase mb-3">Editar produto</h5>

            <ul class="list-group p-0">
                <li class="w-100 d-flex justify-content-center list-group-item">
                    <div class="col-lg-6 d-flex flex-column justify-content-center fw-bold">Nome</div>
                    <div class="col-lg-2 d-flex flex-column justify-content-center fw-bold">Preço</div>
                    <div class="col-lg-2 d-flex flex-column justify-content-center fw-bold">Categoria</div>
                    <div class="col-lg-1 d-flex flex-row justify-content-center fw-bold">Editar</div>
                    <div class="col-lg-1 d-flex flex-row justify-content-center fw-bold">Remover</div>
                </li>
                <?php foreach ($result as $d) {
                ?>

                    <li class="w-100 d-flex justify-content-center list-group-item">
                        <div class="col-lg-6 d-flex flex-column justify-content-center"><?= $d['nome'] ?></div>
                        <div class="col-lg-2 d-flex flex-column justify-content-center">R$ <?= $d['preco'] ?></div>
                        <div class="col-lg-2 d-flex flex-column justify-content-center"><?= $d['categoria'] ?></div>
                        <div class="col-lg-1 d-flex flex-row justify-content-center"> <a href="alterar-produto.php?id=<?= $d['id'] ?>" class="btn btn-warning"><i class="fa-solid fa-file-pen"></i></a> </div>
                        <div class="col-lg-1 d-flex flex-row justify-content-center"> <a href="php/deletar-produto-get.php?id=<?= $d['id'] ?>" class="btn btn-danger"><i class="fa-solid fa-trash-can" style="color:#000"></i></a> </div>
                    </li>
                <?php } ?>
            </ul>
        </div>
    </div>

</section>