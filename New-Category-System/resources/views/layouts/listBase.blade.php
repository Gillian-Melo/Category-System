<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="default/imgs/database-favicon.png">
    <link rel="stylesheet" href="default/listBase/style.css">
    @yield('style')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia&effect=fire">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="default/fontawesome/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
    <title>Controle de Estoque</title>
</head>
<body>
    <div class="navbar-fixed">
        <nav class="navbar navbar-expand-lg" id="menuBar">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="menu">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link text-success" href="{{ route('index') }}" id="homepage"><i class="fa-solid fa-database"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-success" href="#" id="salePage">Vendas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-success" href="{{ route('ClientController.listClientes') }}" id="clientPage">Clientes</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle active text-success" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" aria-current="page" id="listas">Listas</a>
                            <ul class="dropdown-menu border border-success">
                                <li><a class="item dropdown-item text-success" href="{{ route('CatController.listCategorias') }}">Categorias</a></li>
                                <li><a class="item dropdown-item text-success" href="{{ route('SubcatController.listSubcategorias') }}">Subcategorias</a></li>
                                <li><a class="item dropdown-item text-success" href="{{ route('BrandController.listMarcas') }}" id="listMarcas">Marcas</a></li>
                                <li><a class="item dropdown-item text-success" href="{{ route('ProdController.listProdutos') }}">Produtos</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle active text-success" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" aria-current="page" id="listas">Registros</a>
                            <ul class="dropdown-menu border border-success">
                                <li><a class="item dropdown-item text-success" href="{{ route('CatController.regCategorias') }}" id="regCat">Categorias</a></li>
                                <li><a class="item dropdown-item text-success" href="{{ route('SubcatController.regSubcategoria') }}" id="regSubcat">Subcategorias</a></li>
                                <li><a class="item dropdown-item text-success" href="{{ route('BrandController.regMarcas') }}" id="regMarcas">Marcas</a></li>
                                <li><a class="item dropdown-item text-success" href="{{ route('ProdController.regProdutos') }}" id="regProd">Produtos</a></li>
                            </ul>
                        </li>
                        <div id="definicoes">
                            @yield('menubar-content')
                        </div>
                    </ul>
                </div>
            </div>
        </nav>
        <span class="animationBar"></span>
    </div>
    @yield('content')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>