<?php
require_once('head.php');
require_once('topo.php');

$acao = "recuperar-categoria";
require_once('validador-adm.php');

?>

<section class="p-4 h-100 w-100">
    <div class="bloco-listagem p-2 h-100 w-100 rounded">
        <div class="py-1">
            <h3 class="text-center text-uppercase text-dark mt-1">
                Relação de Categorias
            </h3>
        </div>
        <?php
        if (isset($_GET['editar']) && $_GET['editar'] == 1) {
        ?>
            <div class="bg-success pt-2 text-white d-flex justify-content-center">
                <h5>
                    Categoria editada com sucesso!
                </h5>
            </div>

        <?php
        }
        if (isset($_GET['exclusao']) && $_GET['exclusao'] == 1) {
        ?>
            <div class="bg-warning pt-2 text-dark d-flex justify-content-center">
                <h5>
                    Categoria excluída com sucesso!
                </h5>
            </div>

        <?php
        }
        ?>
        <div class="p-2">
            <ul class="list-group w-100 h-100">
                <li class="list-group-item li-titulo w-100 d-flex align-content-center text-center">
                    <div id="name" name="name" class=" fw-bold col-lg-8 text-start d-flex flex-column justify-content-center">Nome Categoria</div>
                    <div id="" name="" class=" fw-bold col-lg-2 ">
                        Editar
                    </div>
                    <div id="" name="" class=" fw-bold col-lg-2 ">
                        Remover
                    </div>
                </li>
                <?php
                foreach ($categoriaRecuperados as $key => $categoria) {
                ?>
                    <li class="list-group-item w-100 d-flex align-content-center text-center">
                        <div id="name" class="col-lg-8 text-start d-flex flex-column justify-content-center"><?= $categoria['nome_categoria'] ?></div>
                        <div class="col-lg-2 ">
                            <a href="editar-categoria.php?id=<?= $categoria['id'] ?>" class="btn btn-outline-warning">
                                <i class="fas fa-user-edit"></i>
                            </a>
                        </div>
                        <div class="col-lg-2 ">
                            <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#modelexcluir<?= $categoria['id'] ?>">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                            <div class="modal fade" id="modelexcluir<?= $categoria['id'] ?>" tabindex="-1" aria-labelledby="modelexcluir<?= $categoria['id'] ?>Label" aria-hidden="true">>
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Excluir Categoria: <?= $categoria['nome_categoria'] ?></h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <p>Clique no botão a baixo para confirmar a exclussão do categoria.</p>
                                        </div>
                                        <div class="modal-footer">
                                            <a href="validador-adm.php?acao=excluir-categoria&id=<?= $categoria['id'] ?>" class="btn btn-outline-danger">
                                                <i class="fas fa-trash-alt"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </li>
                <?php
                }
                ?>
            </ul>
        </div>
    </div>

</section>