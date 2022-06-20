<?php
require_once('head.php');
require_once('topo.php');
require_once('conexao.php');

$id = $_GET['id'];

$query = "SELECT * FROM teste WHERE id = $id"; // sql para execução
$result = $conexao->query($query); // executa query
$result = $result->fetch_all(MYSQLI_ASSOC);
?>

<section class="d-flex flex-column align-items-center justify-content-center w-100" style="height: 100vh;">
    <div class="card">
        <div class="card-body rounded bg-dark">
            <h5 class="card-title text-center text-light txt-uppercase mb-3">Alterar nome</h5>

            <form class="needs-validation" action="alterar-produto-post.php?id=<?= $id ?>" method="post" novalidate>
            <div class="mb-3">
              <label for="endereco">Nome da nome</label>
              <input type="text" class="form-control" value="<?php echo $result[0]['nome']; ?>" id="nome" name="nome" placeholder="Nome da categoria" required autofocus>
              <div class="invalid-feedback">
                Por favor, insira o nome da categoria.
              </div>
            </div>
            <hr class="mb-4">
            <button class="btn btn-primary btn-lg btn-block" type="submit">Editar categoria</button>
          </form>

        </div>
    </div>

</section>