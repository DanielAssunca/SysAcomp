@extends('shared.base')

@section('content')

    <body>
        {{--AQUI VAI SER CONSTRIODO O MENU DA APLICAÇÃO!!! --}}
        <nav class="navbar navbar-inverse float-left">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle pull-left">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">SysAcomp</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#">Sair</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="main">
            <div class="menu">
                <ul>
                    <li><a href="{{ route('index') }}">Home</a></li>
                    <li class="active"><a href="{{ route('clientes.index') }}">Clientes</a></li>
                    <li class="active"><a href="{{ route('eventos.index') }}">Eventos</a></li>
                    <li class="active"><a href="{{ route('contatos.index') }}">Contatos</a></li>
                    <li class="active"><a href="{{ route('acompanhamentos.index') }}">Acompanhamentos</a></li>
                    <li class="visible-xs"><a href="#">Sair</a></li>
                </ul>
            </div>
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        @if ($errors->any())
                            <div class="alert alert-danger" role="alert">
                                @foreach ($errors->all() as $error)
                                    {{ $error }}<br>
                                @endforeach
                            </div>
                        @endif
                        <div class="panel panel-default">

                            <div class="panel-heading">
                                <h3>Cadastro de Acompanhamentos</h3>
                            </div>
                            <div class="panel-body">

                                <form method="post" action="{{ route('acompanhamentos.store') }}">
                                    {{ csrf_field() }}



                                    <div class="container">

                                        <div class="row">
                                            <div class="col-md-7">

                                                <div class="form-group">
                                                    <label for="clientes_id">Selecione o Cliente</label>
                                                    <select name="select_cliente" id="select_cliente" class="form-control"
                                                        required>
                                                        <option>Selecione</option>
                                                        @foreach ($clientes as $cliente)

                                                            <option value="{{ $cliente->id }}">
                                                                {{ $cliente->nome }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                {{--AQUI VAI FUNCIONAR CRIANDO UM NOVO METODO
                                                DENTRO DO CONTROLER ACOMPNHAMENTO PARA POPULAR ATRAVEZ DO AJAX VAI SER USADO
                                                AJAX(JAVASCRIPT)!!! --}}
                                                <div class="form-group">
                                                    <label for="eventos_id">Selecione o Evento</label>
                                                    <select name="select_eventos" id="select_eventos" disabled="true"
                                                        class="form-control" required>

                                                    </select>
                                                </div>

                                            </div>
                                        </div>
                                    </div>


                                    <div class="container container-fluid">

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="panel panel-default">
                                                    <div class="panel-heading" style="cursor: pointer"
                                                        onclick="$('#panel-body-t-geradas-c').toggle(200)">
                                                        <h3 class="panel-title">
                                                            <b>
                                                                <center>PLANOS DE PAGAMENTO - CATEGORIAS E FORMAS DE
                                                                    PAGAMENTO </center>
                                                            </b>

                                                        </h3>
                                                    </div>
                                                    <div class="panel-body" id="panel-body-t-geradas-c"
                                                        style="display: none;">

                                                        <div class="row">
                                                            <div class="col-md-6">


                                                            </div>

                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="panel panel-default">
                                                    <div class="panel-heading" style="cursor: pointer"
                                                        onclick="$('#panel-body-t-geradas-c').toggle(200)">
                                                        <h3 class="panel-title">
                                                            <b>
                                                                <center>CONFIGURADORES ATIVOS E MODELOS DE
                                                                    E-MAIL</center>
                                                            </b>

                                                        </h3>
                                                    </div>
                                                    <div class="panel-body" id="panel-body-t-geradas-c"
                                                        style="display: none;">

                                                        <div class="row">
                                                            <div class="col-md-6">


                                                            </div>

                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>




                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="panel panel-default">
                                                    <div class="panel-heading" style="cursor: pointer"
                                                        onclick="$('#panel-body-t-geradas-c').toggle(200)">
                                                        <h3 class="panel-title">
                                                            <b>
                                                                <center>VALIDAÇÃO DE SÓCIOS E COMPROVANTES
                                                                </center>
                                                            </b>

                                                        </h3>
                                                    </div>
                                                    <div class="panel-body" id="panel-body-t-geradas-c"
                                                        style="display: none;">

                                                        <div class="row">
                                                            <div class="col-md-6">


                                                            </div>

                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>



                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="panel panel-default">
                                                    <div class="panel-heading" style="cursor: pointer"
                                                        onclick="$('#panel-body-t-geradas-c').toggle(200)">
                                                        <h3 class="panel-title">
                                                            <b>
                                                                <center>TESTE REALIZADOS</center>
                                                            </b>

                                                        </h3>
                                                    </div>
                                                    <div class="panel-body" id="panel-body-t-geradas-c"
                                                        style="display: none;">

                                                        <div class="row">
                                                            <div class="col-md-6">


                                                            </div>

                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>



        <div class="col-md-6">
            <div class="form-group">
                <a href="{{ url()->previous() }}" class="btn btn-info">Voltar</a>
                <button type="submit" class="btn btn-primary">Cadastrar</button>
            </div>

        </div>







    </body>
@endsection
