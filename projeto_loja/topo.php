<body>

<nav class="shadow p-2">
    <section class="container d-flex flex-row justify-content-between align-items-center">
        <div>IMAGEM LOGO DA EMPRESA</div>
        <div class="d-flex flex-row align-items-center justify-items-center">
            <div class="mx-3 d-flex text-center flex-column">
                <i class="fa-solid fa-cart-arrow-down fa-2x"></i>
                <div id="idHiddenCarrinho" style="display:none;">
                <span>Valor Carrinho:</span><span id="valor-carrinho">0</span>
                </div>
            </div>
            <div class="mx-3">
                <button type="button" class="botaoCliente" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <i class="fa-solid fa-circle-user fa-3x"></i>
                    </button>
            </div>
        </div>
    </section>
</nav>




<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content backgroundCadastro">
        <div class="d-flex justify-content-center">
            <button  class="botoesCadastro" onclick="trocarParaLogin()" id="idCadastrar" >Cadastrar-se</button>
            <button  style="display:none;"class="botoesCadastro" onclick="trocarParaCadastro()" id="idLogin" >Logar</button>
        </div>
        <!-- login -->
        <div id="idTelaLogin"class="container justify-content-center text-center flex-column" style="display:flex;">
            <h4>Entrar</h4>
            <div class="username d-flex flex-column-reverse ">
                <input class="inputUsername" type="text" name="" required="">
                <label class="username">Username</label>
            </div>
            <div class="password d-flex flex-column-reverse ">
                <input class="inputPassword" type="password" name="" required="">
                <label class="password">Password</label>
            </div>
        </div>
        <!-- cadastro -->
        <div id="idTelaCadastro"class="container justify-content-center text-center flex-column" style="display:none;">
            <h4>Cadastrar-se</h4>
            <div class="username d-flex flex-column-reverse ">
                <input class="inputUsername" type="text" name="nome" required="">
                <label class="nome">Nome</label>
            </div>
            <div class="username d-flex flex-column-reverse ">
                <input class="inputUsername" type="email" name="" required="">
                <label class="username">Email</label>
            </div>
            <div class="password d-flex flex-column-reverse ">
                <input class="inputPassword" type="password" name="" required="">
                <label class="password">Password</label>
            </div>
        </div>
      <div class="botoesEnvio">
        <button style="display:none;" id="botaoCadastrar"type="button" class="btn btn-secondary botaoLogarCadastrar" data-bs-dismiss="modal">Cadastrar</button>
        <button style="display:block;" id="botaoLogar"type="button" class="btn btn-secondary botaoLogarCadastrar" data-bs-dismiss="modal">Logar</button>
      </div>
    </div>
  </div>
</div>

<style>
    .botaoCliente{
        background-color: transparent;
        border-color: transparent;
    }
    .botoesCadastro{
        background-color: lightblue;
        border-color: lightblue;
        font-size: 23px;
        display: block;
        border: 0px;
        padding: 20px;
        border-radius: 50%;
    }
    .username {
        width:50%;
        margin:auto;
    }
    .password {
        width:50%;
        margin:auto;
    }
    .botoesEnvio{
        display:flex;
        justify-content:center;
        padding:30px;
    }
    .backgroundCadastro{
        background-color:var(--color-quiternary);
    }
    .inputPassword{
        border-radius:4px;
    }
    .inputUsername{
        border-radius:4px;
    }
    .botaoLogarCadastrar{
        transition:0.4s;
        background-color: lightblue;
        color:black;
    }
    .botaoLogarCadastrar:hover{
        background-color: lightblue;
        opacity: 0.8;
        color:black;
        border:2px solid black;
    }
    
</style>
<script>
    function trocarParaCadastro() {
        document.getElementById('idTelaLogin').style.display="flex"
        document.getElementById('idTelaCadastro').style.display="none"

        document.getElementById('botaoLogar').style.display="block"
        document.getElementById('botaoCadastrar').style.display="none"

        document.getElementById('idLogin').style.display="none"
        document.getElementById('idCadastrar').style.display="block"



        console.log('woqeoqw');
    }
    function trocarParaLogin() {
        document.getElementById('idTelaLogin').style.display="none"
        document.getElementById('idTelaCadastro').style.display="flex"

        document.getElementById('botaoLogar').style.display="none"
        document.getElementById('botaoCadastrar').style.display="block"

        document.getElementById('idLogin').style.display="block"
        document.getElementById('idCadastrar').style.display="none"



        console.log('woqeoqw');
    }
</script>
    