<?php

require_once 'classes.php';

// query do destaque
$query = "SELECT * FROM tbl_produto"; // sql para execução
$result = $conexao->query($query); // executa query
$result = $result->fetch_all(MYSQLI_ASSOC); // recupera valores de saída;

?>

<section class="container">
    <div class="col-xxl-12">
        <div class="text-center text-uppercase m-5">
            <h3 class="m-0">Mercadorias em Estoque</h3>
        </div>
    </div>

    <div class="bloco-filtro-estoque col-xxl-12 p-2 mb-5 rounded shadow">
        <form id="formulario_filtro_estoque"
            class="row gy-2 gx-3 p-4 d-flex flex-row align-items-center justify-items-center">

            <div class="col-4">
                <select class="form-select" id="filtro_marca">
                    <option selected>Marca...</option>
                    <option value="1">Iphone</option>
                    <option value="2">LG</option>
                    <option value="3">Samsung</option>
                    <option value="4">Nokia</option>
                </select>
            </div>
            <div class="col-4">
                <select class="form-select" id="filtro_cor">
                    <option selected>Cor...</option>
                    <option value="1">Preto</option>
                    <option value="2">Branco</option>
                    <option value="3">Cinza</option>
                </select>
            </div>

            <div class="col-4 d-flex align-content-center justify-content-center">
                <button type="submit" class="botao-filtrar btn btn-primary">Filtrar</button>
            </div>
        </form>
    </div>




    <div class="col-xxl-12 d-flex flex-row align-items-center justify-content-center flex-wrap">
            <?php 
            

               foreach($result as $linha){
                $nomeProduto = $linha['nome'];
                $categoriaProduto = $linha['categoria'];
                $corProduto = $linha['cor'];
                $precoProduto = $linha['preco'];
            ?>
        <div class="p-3 col-xxl-3 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12">
            <a class="link-produto" href="pagina_produto.php?id=<?php echo $linha['id'];?>">
                <div class="card shadow">
                    <img src="img/nokia.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-center mb-2"><?php echo $nomeProduto ?></h5>
                        <div class="my-1 d-flex flex-direction justify-items-center align-content-center">
                            <div class="bloco-icone-card d-flex flex-column align-items-center justify-content-center">
                                <i class="fa-solid fa-mobile-screen"></i></div>
                            <p class="card-text"><?php echo $categoriaProduto ?></p>
                        </div>
                        <div class="my-1 d-flex flex-direction justify-items-center align-content-center">
                            <div class="bloco-icone-card d-flex flex-column align-items-center justify-content-center">
                                <i class="fa-solid fa-brush"></i></div>
                            <p class="card-text"><?php echo $corProduto ?></p>
                        </div>
                        <div class="my-1 d-flex flex-direction justify-items-center align-content-center">
                            <div class="bloco-icone-card d-flex flex-column align-items-center justify-content-center">
                                <i class="fa-solid fa-money-bill"></i></div>
                            <p class="card-text"><?php echo $precoProduto ?> R$</p>
                        </div>

                        <a href="#" class="botao-detalhes-produto btn btn-primary">Detalhes</a>
                    </div>
                </div>
            </a>
        </div>
        <?php } ?>
    </div>


</section>