<?php
require_once('head.php');
require_once('topo.php');
require_once('Classes/Conexao.php');
require_once('Classes/Produto.php');

$produto = new Produto();
$produtoBuscado = $produto->recuperarProduto($_GET['id']);
$prod = $produtoBuscado[0];
?>

<section class="container">
    <div class="col-xxl-12">
        <div class="text-center text-uppercase m-5">
            <h3>Página do Produto:</h3>
        </div>
    </div>


    <div class="col-xxl-12 d-flex flex-row justify-content-center flex-wrap">
        <div class="p-3 col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
            <div class="bloco-produto shadow">
                <div class="d-flex flex-column align-items-center">
                    <img src="<?= $prod['url_foto'] ?>" class="card-img-top" style="height:300px; max-width: fit-content">
                </div>
                <div class="card-body">
                    <!--CARACTERISTICAS PRODUTO-->
                    <h5 class="card-title text-center"><?= $prod['nome'] ?></h5>
                    <p class="card-text"><b>Valor:</b> R$<span id="valor-mercadoria"><?= $prod['preco'] ?></span></p>
                    <p class="card-text" id="emEstoque"><b>Em Estoque:</b> <span id="estoque-mercadoria"><?= $prod['quantidade'] ?></span> unidades</p>
                    <p id="produtoesgotado" style="display:none"><b>PRODUTO ESGOTADO</b></p>
                    <button class="btn btn-primary" id="botao-produto" onclick="adicionar1()">Adicionar Carrinho</button>
                </div>
            </div>
        </div>

        <div class="p-3 col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
            <div class="bloco-produto shadow card-body">
                <p><b>Categoria:</b> <?= $prod['categoria'] ?></p>
                <p><b>Marca:</b> <?= $prod['marca'] ?></b></p>
                <p><b>Cor:</b> <?= $prod['cor'] ?></p>
                <p><b>Descrição:</b><br><?= $prod['descricao'] ?></p>
            </div>
        </div>

    </div>



</section>
<div class="d-flex justify-content-center" style="margin-top:20px;">
    <img src="img\propaganda.gif" alt="" width="100%">
</div>
<?php
require_once('footer.php');
?>

<script>
    /*SE ADICIONAR O VALOR DO PRODUTO COM CENTAVOS VAI QUEBRAR O CODIGO*/
    /*E NAO POR O "R$" NO VALOR SE NAO QUEBRA TEMBEM, TEM Q POR COMO HTML*/

    /*função de adicionar produto*/
    var estoque = document.getElementById("estoque-mercadoria").innerText;
    var valorMercadoria = document.getElementById("valor-mercadoria").innerText;
    var totalCarrinho = 0;
    var vezes = 0;

    function adicionar1() {
        document.getElementById("idHiddenCarrinho").style.display = "block"
        estoque = estoque - 1;

        if (document.getElementById("estoque-mercadoria").innerText = "Produto sem estoque") {
            document.getElementById("estoque-mercadoria").innerText = estoque;

            if (estoque == -1) {
                alert('produto sem estoque');
                document.getElementById("botao-produto").style.display = "none"
                document.getElementById("emEstoque").style.display = "none"
                document.getElementById("produtoesgotado").style.display = "block"

            }
        }

        /* logica para atualizar o carrinho*/
        document.getElementById('valor-mercadoria').innerText

        vezes = vezes + 1;

        totalCarrinho = valorMercadoria * vezes;

        var myNumeral = numeral(totalCarrinho);
        var currencyString = myNumeral.format('$0,0.00');

        document.getElementById("valor-carrinho").innerText = ('R' + currencyString);
        document.getElementById("valor-carrinho").style.fontWeight = "bold"
        document.getElementById("valor-carrinho").style.color = "red"
    }
</script>