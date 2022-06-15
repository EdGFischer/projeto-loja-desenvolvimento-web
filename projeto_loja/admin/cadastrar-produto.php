<?php
require_once('head.php');
require_once('topo.php');
?>

<section class="d-flex flex-column align-items-center justify-content-center w-100" style="height: 100vh;">
    <div class="card" style="width: 25rem;">
        <div class="card-body rounded bg-dark">
            <h5 class="card-title text-center text-light txt-uppercase mb-3">Cadastro Produto</h5>
            <form class="mb-5 text-center" action="cadastroProduto.php" method="post">
                <div class="username d-flex flex-column-reverse ">
                    <input class="inputUsername" type="text" name="" required="">
                    <label class="username">Nome Aparalho</label>
                </div>
                <div class="d-flex flex-column-reverse mt-1">
                    <select name="categoria">
                        <option disabled selected value>--- selecione uma categoria ---- </option>
                        <option value="valor1">Smartphone</option>
                        <option value="valor2">Tablet</option>
                        <option value="valor3">Notbook</option>
                    </select>
                    <label class="text">Categoria</label>
                </div>
                <div class="d-flex flex-column-reverse mt-1">
                    <select name="categoria">
                        <option disabled selected value>--- selecione uma marca ---- </option>
                        <option value="valor1">Iphone</option>
                        <option value="valor2">Motorola</option>
                        <option value="valor3">Nokia</option>
                        <option value="valor4">Samsung</option>
                    </select>
                    <label class="text">Marca</label>
                </div>
                <div class="d-flex flex-column-reverse mt-1">
                    <input class=" text-center" type="text" name="" required="">
                    <label class="text">Cor</label>
                </div>
                <div class="d-flex flex-column-reverse mt-1">
                    <input class="text-center" type="number" name="" required="">
                    <label class="text">Quantidade disponível</label>
                </div>
                <div class="d-flex flex-column-reverse mt-1">
                    <input class="text-center" type="number" name="" required="">
                    <label class="text">Preço Unitário</label>
                </div>
                <div class="d-flex flex-column-reverse mt-1">
                    <textarea class="text-center" style="min-height: 100px;" type="file" name="" required=""></textarea>
                    <label class="text">Descrição Produto</label>
                </div>
                <div class="d-flex flex-column-reverse mt-1">
                    <input class="text-center" type="file" name="" required="">
                    <label class="text">Imagem</label>
                </div>

                <button style="display:none;" id="botaoCadastrar" type="button" class="btn btn-secondary botaoLogarCadastrar" data-bs-dismiss="modal">Cadastrar</button>
            </form>
            <button type="" class="btn btn-light">Cadastrar</button>
        </div>
    </div>

</section>