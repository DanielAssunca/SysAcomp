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
                                            <div class="col-md-12">

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
                                    <div class="container">

                                        <div class="row">
                                            <div class="col-md-12">


                                                <div class="panel-group" id="accordion">
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading">
                                                            <h4 class="panel-title">
                                                                <a data-toggle="collapse" data-parent="#accordion"
                                                                    href="#collapse1">
                                                                    FORMAS DE PAGAMENTO</a>
                                                            </h4>
                                                        </div>
                                                        <div id="collapse1" class="panel-collapse collapse">
                                                            <div class="panel-body">
                                                                <textarea id="w3review" name="w3review" rows="4" cols="182">

                                                                        </textarea></div>
                                                        </div>
                                                    </div>
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading">
                                                            <h4 class="panel-title">
                                                                <a data-toggle="collapse" data-parent="#accordion"
                                                                    href="#collapse2">
                                                                    CATEGORIAS</a>
                                                            </h4>
                                                        </div>
                                                        <div id="collapse2" class="panel-collapse collapse">
                                                            <div class="panel-body">Lorem ipsum dolor sit amet, consectetur
                                                                <textarea id="w3review" name="w3review" rows="4" cols="182">

                                                                    </textarea></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading">
                                                        <h4 class="panel-title">
                                                            <a data-toggle="collapse" data-parent="#accordion"
                                                                href="#collapse3">
                                                                PLANOS DE PAGAMENTO</a>
                                                        </h4>
                                                    </div>
                                                    <div id="collapse3" class="panel-collapse collapse">
                                                        <div class="panel-body"> <textarea id="w3review" name="w3review"
                                                                rows="4" cols="182">

                                                                </textarea></div>
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
