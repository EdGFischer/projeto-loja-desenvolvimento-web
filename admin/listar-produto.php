<?php
require_once('head.php');
require_once('topo.php');

$acao = "recuperar-produto";
require_once('validador-adm.php');

?>

<section class="p-4 h-100 w-100">
    <div class="bloco-listagem p-2 h-100 w-100 rounded">
        <div class="py-1">
            <h3 class="text-center text-uppercase text-dark mt-1">
                Relação de produto
            </h3>
        </div>
        <?php
        if (isset($_GET['editar']) && $_GET['editar'] == 1) {
        ?>
            <div class="bg-success pt-2 text-white d-flex justify-content-center">
                <h5>
                    Produto editado com sucesso!
                </h5>
            </div>

        <?php
        }
        if (isset($_GET['exclusao']) && $_GET['exclusao'] == 1) {
        ?>
            <div class="bg-warning pt-2 text-dark d-flex justify-content-center">
                <h5>
                    Produto excluído com sucesso!
                </h5>
            </div>

        <?php
        }
        ?>
        <div class="p-2">
            <ul class="list-group w-100 h-100">
                <li class="list-group-item li-titulo w-100 d-flex align-content-center text-center">
                    <div class="col-lg-4 text-start fw-bold d-flex flex-column justify-content-center">Nome do Produto</div>
                    <div class="col-lg-2 fw-bold d-flex flex-column justify-content-center">Categoria</div>
                    <div class="col-lg-3 fw-bold d-flex flex-column justify-content-center">Cor</div>
                    <div class="col-lg-1 fw-bold">
                        Detalhes
                    </div>
                    <div id="" name="cpf" class="col-lg-1 fw-bold">
                        Editar
                    </div>
                    <div id="cpf" name="cpf" class="col-lg-1 fw-bold">
                        Remover
                    </div>
                </li>
                <?php
                foreach ($produtoRecuperados as $key => $produto) {
                ?>
                    <li class="list-group-item w-100 d-flex align-content-center text-center">
                        <div id="name" class="col-lg-4 text-start d-flex flex-column justify-content-center"><?= $produto['nome'] ?></div>
                        <div id="categoria" class="col-lg-2 d-flex flex-column justify-content-center"><?= $produto['categoria'] ?></div>
                        <div id="cor" class="col-lg-3 d-flex flex-column justify-content-center"><?= $produto['cor'] ?></div>
                        <div class="col-lg-1 ">
                            <button type="button" class="btn btn-outline-info" data-bs-toggle="modal" onclick="cpfMask()" data-bs-target="#modelrecuperar<?= $produto['id'] ?>">
                                <i class="fas fa-eye"></i>
                            </button>
                            <div class="modal fade" id="modelrecuperar<?= $produto['id'] ?>" tabindex="-1" aria-labelledby="modelrecuperar<?= $produto['id'] ?>Label" aria-hidden="true">>
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title text-uppercase"> <?= $produto['nome'] ?></h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <span class="text-center text-uppercase fw-bold">Dados do produto:</span>
                                            <ul class="list-group mt-3">
                                                <a class="list-group-item list-group-item-action text-start"><span class="fw-bold">Categoria: </span><span><?= $produto['categoria'] ?></span></a>
                                                <a class="list-group-item list-group-item-action text-start"><span class="fw-bold">Marca: </span><span><?= $produto['marca'] ?></span></a>
                                                <a class="list-group-item list-group-item-action text-start"><span class="fw-bold">Cor: </span><span><?= $produto['cor'] ?></span></a>
                                                <a class="list-group-item list-group-item-action text-start"><span class="fw-bold">Quantidade Disponível: </span><span><?= $produto['quantidade'] ?></span></a>
                                                <a class="list-group-item list-group-item-action text-start"><span class="fw-bold">Preço Unitário: </span><span><?= $produto['preco'] ?></span></a>
                                                <a class="list-group-item list-group-item-action text-start"><span class="fw-bold">Descricao: </span><span><?= $produto['descricao'] ?></span></a>
                                                <a class="list-group-item list-group-item-action text-start"><span class="fw-bold">Foto: </span><span><img  style="max-width: 100%; max-height: 100px;"src="<?= $produto['url_foto'] ?>"></span></a>
                                            </ul>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-primary text-white" data-bs-dismiss="modal">Fechar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-1 ">
                            <a href="editar-produto.php?id=<?= $produto['id'] ?>" class="btn btn-outline-warning">
                                <i class="fas fa-user-edit"></i>
                            </a>
                        </div>
                        <div class="col-lg-1 ">
                            <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#modelexcluir<?= $produto['id'] ?>">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                            <div class="modal fade" id="modelexcluir<?= $produto['id'] ?>" tabindex="-1" aria-labelledby="modelexcluir<?= $produto['id'] ?>Label" aria-hidden="true">>
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Excluir produto: <?= $produto['nome'] ?></h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <p>Clique no botão a baixo para confirmar a exclussão do produto.</p>
                                        </div>
                                        <div class="modal-footer">
                                            <a href="validador-ADM.php?acao=excluir-produto&id=<?= $produto['id'] ?>" class="btn btn-outline-danger">
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