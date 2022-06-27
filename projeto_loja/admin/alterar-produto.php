<?php
require_once('head.php');
require_once('topo.php');
require_once('php/funcoes.php');
$id = $_GET['id'];
$result = new comandosAdm();
$result->pegarProduto($id);
?>

<section class="d-flex flex-column align-items-center justify-content-center w-100" style="height: 100vh;">
    <div class="card">
        <div class="card-body rounded bg-dark">
            <h5 class="card-title text-center text-light txt-uppercase mb-3">Alterar nome</h5>

            <form class="needs-validation" action="php/alterar-produto-post.php?id=<?= $id ?>" method="post" novalidate>
            <div class="mb-3">

                <label for="endereco">Nome do produto</label>
                <input type="text" class="form-control" value="<?php echo $result[0]['nome']; ?>" id="nome" name="nome" placeholder="Nome do produto" required autofocus>

                <label for="endereco">Preço do produto</label>
                <input type="text" class="form-control" value="<?php echo $result[0]['preco']; ?>" id="preco" name="preco" placeholder="Preço do produto" required autofocus>

                <label for="endereco">Cor do produto</label>
                <input type="text" class="form-control" value="<?php echo $result[0]['cor']; ?>" id="cor" name="cor" placeholder="Cor do produto" required autofocus>

              <div class="invalid-feedback">
                Por favor, insira o nome da categoria.
              </div>
            </div>
            <hr class="mb-4">
            <button class="btn btn-primary btn-lg btn-block" type="submit">Editar Produto</button>
          </form>

        </div>
    </div>

</section>