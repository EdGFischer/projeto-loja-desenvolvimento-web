<body>

    <nav class="shadow p-2">
        <section class="container d-flex flex-row justify-content-between align-items-center">
            <div>
                <a href="index.php">
                    <img src="img/logo.png">
                </a>
            </div>
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

                <div class="mx-3 d-flex flex-column align-items-center justify-content-center">
                    <a href="admin/index.php" class="link-area-adm d-flex flex-column align-items-center justify-content-center">
                        <p class="mt-0 mb-0">Área Administrativa</p>
                    </a>
                </div>

            </div>
        </section>
    </nav>




    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content backgroundCadastro">
                <!-- login -->
                <div id="idTelaLogin" class="container justify-content-center text-center flex-column mt-2" style="display:flex;">
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
                <div id="idTelaCadastro" class="container justify-content-center text-center flex-column mt-2" style="display:none;">
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
                    <button style="display:none;" id="botaoCadastrar" type="button" class="btn botaoLogarCadastrar" data-bs-dismiss="modal">Cadastrar</button>
                    <button style="display:block;" id="botaoLogar" type="button" class="btn botaoLogarCadastrar" data-bs-dismiss="modal">Logar</button>
                </div>
                <div class="d-flex justify-content-center my-2">
                    <button class="botoesCadastro" onclick="trocarParaLogin()" id="idCadastrar">Não possuí conta? Cadastre-se</button>
                    <button style="display:none;" class="botoesCadastro" onclick="trocarParaCadastro()" id="idLogin">Já possuí conta? Acesse agora!</button>
                </div>
            </div>
        </div>
    </div>


    <!-- Modal PRODUTOS -->
    <div class="modal fade" id="modalProdutos" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content backgroundCadastro">
                <div class="d-flex justify-content-center">
                    <button class="botoesCadastro" onclick="trocarParaLogin()" id="idCadastrar">Categoria</button>
                    <button style="display:none;" class="botoesCadastro" onclick="trocarParaCadastro()" id="idLogin">Nome da</button>
                </div>
                <!-- login -->
                <div id="idTelaLogin" class="container justify-content-center text-center flex-column" style="display:flex;">
                    <h4>Cadastrar categoria</h4>
                    <div class="username d-flex flex-column-reverse ">
                        <input class="inputUsername" type="text" name="" required="">
                        <label class="username">Categoria</label>
                    </div>

                </div>
                <!-- cadastro -->
                <div id="idTelaCadastro" class="container justify-content-center text-center flex-column" style="display:none;">
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
                    <button style="display:none;" id="botaoCadastrar" type="button" class="btn btn-secondary botaoLogarCadastrar" data-bs-dismiss="modal">Cadastrar</button>
                    <button style="display:block;" id="botaoLogar" type="button" class="btn btn-secondary botaoLogarCadastrar" data-bs-dismiss="modal">Enviar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal CADASTRAR PRODUTOS -->




    <script>
        function trocarParaCadastro() {
            document.getElementById('idTelaLogin').style.display = "flex"
            document.getElementById('idTelaCadastro').style.display = "none"

            document.getElementById('botaoLogar').style.display = "block"
            document.getElementById('botaoCadastrar').style.display = "none"

            document.getElementById('idLogin').style.display = "none"
            document.getElementById('idCadastrar').style.display = "block"



            console.log('woqeoqw');
        }

        function trocarParaLogin() {
            document.getElementById('idTelaLogin').style.display = "none"
            document.getElementById('idTelaCadastro').style.display = "flex"

            document.getElementById('botaoLogar').style.display = "none"
            document.getElementById('botaoCadastrar').style.display = "block"

            document.getElementById('idLogin').style.display = "block"
            document.getElementById('idCadastrar').style.display = "none"



            console.log('woqeoqw');
        }
    </script>