<body>
<main>
    <nav class="flex-shrink-0 p-3 bg-dark" style="width: 280px;">
        <a href="../index.php" class="d-flex align-items-center flex-column pb-3 mb-3 link-light text-decoration-none border-bottom">
            <img src="../img/logo.png" >
            <span class="fs-5 fw-semibold text-light">Controle Administrativo</span>
        </a>
        <ul class="list-unstyled ps-0">
            <li class="mb-1">
                <button class="btn btn-toggle align-items-center rounded collapsed text-light" data-bs-toggle="collapse" data-bs-target="#home-collapse" aria-expanded="false">
                    Produtos
                </button>
                <div class="collapse" id="home-collapse">
                    <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                        <li class="my-2"><a href="cadastrar-categoria.php" class="link-light rounded">Cadastrar Categoria</a></li>
                        <li class="my-2"><a href="cadastrar-produto.php" class="link-light rounded">Cadastrar Produto</a></li>
                        <li class="my-2"><a href="deletar-produto.php" class="link-light rounded">Deletar Produto</a></li>
                    </ul>
                </div>
            </li>
            <li class="mb-1">
                <button class="btn btn-toggle align-items-center rounded collapsed text-light" data-bs-toggle="collapse" data-bs-target="#dashboard-collapse" aria-expanded="false">
                    Relátorios
                </button>
                <div class="collapse" id="dashboard-collapse">
                    <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                        <li class="my-2"><a href="#" class="link-light rounded">Relatórios de Vendas</a></li>
                    </ul>
                </div>
            </li>
            <li class="mb-1">
                <button class="btn btn-toggle align-items-center rounded collapsed text-light" data-bs-toggle="collapse" data-bs-target="#orders-collapse" aria-expanded="false">
                    Configurações
                </button>
                <div class="collapse" id="orders-collapse">
                    <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                        <li class="my-2"><a href="#" class="link-light rounded">Contas</a></li>
                        <li class="my-2"><a href="#" class="link-light rounded">Usuários</a></li>
                    </ul>
                </div>
            </li>
            <li class="border-top my-3"></li>

            <li class="mb-1">
                <button class="btn btn-toggle align-items-center rounded collapsed text-light" data-bs-toggle="collapse" data-bs-target="#account-collapse" aria-expanded="false">
                    Sair
                </button>
            </li>
        </ul>
</nav>
