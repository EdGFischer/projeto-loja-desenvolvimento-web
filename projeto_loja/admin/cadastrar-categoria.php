<?php
require_once('head.php');
require_once('topo.php');
?>

<section class="d-flex flex-column align-items-center justify-content-center w-100" style="height: 100vh;">
    <div class="card" style="width: 18rem;">
        <div class="card-body rounded bg-dark">
            <h5 class="card-title text-center text-light txt-uppercase mb-3">Cadastro Categoria</h5>
            <form class="mb-5 text-center">
                <div class="username d-flex flex-column-reverse ">
                    <input class="inputUsername" type="text" name="" required="">
                    <label class="username">Nome Categoria</label>
                </div>
                
                <button style="display:none;" id="botaoCadastrar" type="button" class="btn btn-secondary botaoLogarCadastrar" data-bs-dismiss="modal">Cadastrar</button>
            </form>
            <button type="" class="btn btn-light">Cadastrar Categoria</button>
        </div>
    </div>

</section>
