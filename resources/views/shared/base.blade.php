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
    <script type="text/javascript" src="<?php echo asset('js/script.js')?>"></script>
    <script type="text/javascript" src="<?php echo asset('js/jquery-3.1.1.js')?>"></script>
    <link rel="stylesheet" href="<?php echo asset('css/style.css')?>" type="text/css">

</head>

<body>

    {{--AQUI VAI SER CONSTRIODO O MENU DA APLICAÇÃO!!! --}}
    <div class="row">
        <div class="col-md-12 float-right">
            <nav class="navbar navbar-inverse float-left">
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
                    <li><a href="{{route('home.index')}}">Home</a></li>
                    <li class="active"><a href="{{route('clientes.index')}}">Clientes</a></li>
                    <li class="active"><a href="{{route('eventos.index')}}">Eventos</a></li>
                    <li><a href="#">Contatos</a></li>
                    <li><a href="#">Acompanhamentos</a></li>
                    <li class="visible-xs"><a href="#">Sair</a></li>
                </ul>
            </div>
        </div>
    </div>
</body>

<div class="container">

    @yield('content')


</div>

</html>
