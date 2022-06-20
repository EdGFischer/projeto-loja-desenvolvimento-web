<?php
require_once('head.php');
require_once('topo.php');
require_once('conexao.php');

$query = "SELECT * FROM tbl_produto"; // sql para execução
$result = $conexao->query($query); // executa query
$result = $result->fetch_all(MYSQLI_ASSOC); // recupera valores de saída;

?>

<section class="d-flex flex-column align-items-center justify-content-center w-100" style="height: 100vh;">
    <div class="card">
        <div class="card-body rounded bg-dark">
            <h5 class="card-title text-center text-light txt-uppercase mb-3">Deletar produto</h5>
            
            <?php foreach($result as $d){
            ?>
                <div style="width:100%;">
                    <span> Id do produto = <?= $d['id'] ?></span>
                    ||
                    <span> nome do produto = <?= $d['nome'] ?></span>
                    ||
                    <span> preço do produto = <?= $d['preco'] ?></span>
                    ||
                    <span> <a href="deletar-produto-get.php?id=<?= $d['id'] ?>">X</a> </span>

                </div>
            <?php } ?>
        </div>
    </div>

</section>