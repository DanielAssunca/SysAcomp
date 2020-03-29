<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">


    <title>Sistema de Acompanhamento de Clientes</title>

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://github.com/DanielSilvaAssuncao/SysAcomp/blob/master/resources/js/script.js"></script>
    <link rel="stylesheet" href="<?php echo asset('css/style.css')?>" type="text/css">

</head>

<body>

    {{--AQUI VAI SER CONSTRIODO O MENU DA APLICAÇÃO!!! --}}

    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle pull-left">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Administrador</a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#">Sair</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="menu">
        <ul>
            <li><a href="#">Sair</a></li>
            <li class="active"><a href="#">Painel</a></li>
            <li><a href="#">Paginas</a></li>
            <li><a href="#">Categorias</a></li>
            <li><a href="#">Plugins</a></li>
            <li><a href="#">Ir para o site</a></li>
        </ul>
    </div>




</body>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            @yield('content')

        </div>
    </div>

</div>

</html>
