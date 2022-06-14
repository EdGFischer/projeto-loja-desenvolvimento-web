<?php
require_once('head.php');
require_once('topo.php');
?>

    <section class="container">
        <div class="col-xxl-12">
            <div class="text-center text-uppercase m-5">
                <h3>Mercadorias em Estoques</h3>
            </div>
        </div>


        <div class="col-xxl-12 d-flex flex-row align-items-center justify-content-center flex-wrap">

            <div class="p-3 col-xxl-3 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12">
                <div class="card shadow">
                    <img src="img/nokia.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <!--CARACTERISTICAS PRODUTO-->
                        <h5 class="card-title text-center">Nome Produto 1</h5>
                        <p class="card-text">Valor: R$<span id="valor-mercadoria">2.450</span></p>
                        <p class="card-text" id="emEstoque">Em Estoque <span id="estoque-mercadoria">10</span></p>

                        <button id="botao-produto" onclick="adicionar1()">Adicionar Carrinho</button>
                    </div>
                </div>
            </div>

        </div>



    </section>


    <script>
        /*SE ADICIONAR O VALOR DO PRODUTO COM CENTAVOS VAI QUEBRAR O CODIGO*/
        /*E NAO POR O "R$" NO VALOR SE NAO QUEBRA TEMBEM, TEM Q POR COMO HTML*/
        
        /*função de adicionar produto*/
        var estoque = document.getElementById("estoque-mercadoria").innerText;
        var valorMercadoria = document.getElementById("valor-mercadoria").innerText;
        var totalCarrinho = 0;
        var vezes = 0;
        function adicionar1() {
            document.getElementById("idHiddenCarrinho").style.display="block"
            estoque = estoque - 1;

            if (document.getElementById("estoque-mercadoria").innerText = "Produto sem estoque") {
                document.getElementById("estoque-mercadoria").innerText = estoque;

                if (estoque == -1) {
                    alert('produto sem estoque');
                    document.getElementById("botao-produto").style.display="none"
                    document.getElementById("emEstoque").style.display="none"
                }
            }

            /* logica para atualizar o carrinho*/
            document.getElementById('valor-mercadoria').innerText

            vezes = vezes + 1;

            totalCarrinho = valorMercadoria * vezes;

            var myNumeral = numeral (totalCarrinho);
            var currencyString = myNumeral.format('$0,0.000');

            document.getElementById("valor-carrinho").innerText = ( 'R' + currencyString);
            document.getElementById("valor-carrinho").style.fontWeight="bold"
            document.getElementById("valor-carrinho").style.color="red"
        }


    </script>

<?php
require_once('footer.php');
?>