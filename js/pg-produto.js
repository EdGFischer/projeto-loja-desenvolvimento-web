
/*SE ADICIONAR O VALOR DO PRODUTO COM CENTAVOS VAI QUEBRAR O CODIGO*/
/*E NAO POR O "R$" NO VALOR SE NAO QUEBRA TEMBEM, TEM Q POR COMO HTML*/

/*função de adicionar produto*/

var botao = document.getElementById("botao-produto")
botao.addEventListener('click', (e) => {
    console.log("chegou");
    adicionar1()
})
console.log("oi");


var estoque = document.getElementById("estoque-mercadoria").innerText;
var valorMercadoria = document.getElementById("valor-mercadoria").innerText;
var totalCarrinho = 0;
var vezes = 0;

function adicionar1() {
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



