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
                <li><a href="{{route('home.index')}}">Home</a></li>
                <li class="active"><a href="{{route('clientes.index')}}">Clientes</a></li>
                <li class="active"><a href="{{route('eventos.index')}}">Eventos</a></li>
                <li class="active"><a href="{{route('contatos.index')}}">Contatos</a></li>
                <li class="active"><a href="{{route('acompanhamentos.index')}}">Acompanhamentos</a></li>
                <li class="visible-xs"><a href="#">Sair</a></li>
            </ul>
        </div>
        <div class="content">
            <div class="container-fluid">
                <div class="row">


                    @if($errors->any())
                    <div class="alert alert-danger" role="alert">
                        @foreach ($errors->all() as $error)
                        {{ $error }}<br>
                        @endforeach
                    </div>
                    @endif
                    <div class="panel panel-default">

                        <div class="panel-heading">
                            <h3>Cadastro de Eventos</h3>
                        </div>
                        <div class="panel-body">

                            <form method="post" action="{{route ('eventos.store')}}">
                                {{ csrf_field() }}


                                <div class="row">
                                    <div class="col-md-6">

                                        <div class="form-group">
                                            <label for="clientes_id">Selecione o Cliente</label>
                                            <select class="form-control" name="clientes_id" required>
                                                @foreach($clientes as $cliente)
                                                <option value="{{$cliente->id}}">
                                                    {{$cliente->nome}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">


                                        <div class="form-group">
                                            <label for="cod_centro_de_custo">Codigo do Centro de Custo</label>
                                            <input style="width: 190px;" type="text" class="form-control"
                                                name="cod_centro_de_custo" required>
                                        </div>
                                    </div>
                                </div>




                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="nome">Nome</label>
                                            <input type="text" class="form-control" placeholder="Nome do Evento"
                                                name="nome" required>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="data">Data de Inicio</label>
                                            <input type="text" class="form-control" placeholder="Ex.: dd/mm/aaaa"
                                                data-mask="00/00/0000" maxlength="10" autocomplete="on"
                                                class="form-control" name="data_evento" required>
                                        </div>
                                    </div>

                                </div>
                                <div class="row">

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="localevento">Local</label>
                                            <input type="localevento" class="form-control" placeholder="Local do Evento"
                                                required name="localevento">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="valida_socio">Qual a forma de validação de sócios?</label>
                                            <select class="form-control" name="valida_socio" required>
                                                <option>Não Valida</option>
                                                <option>iCase</option>
                                                <option>Webservice</option>
                                                <option>Planilha</option>
                                            </select>
                                        </div>
                                    </div>

                                </div>

                                <div class="row">

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="site_evento">Site do Evento</label>
                                            <input type="text" class="form-control" placeholder="Site do evento"
                                                name="site_evento">

                                        </div>
                                    </div>



                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="site_entidade">Site da Entidade</label>

                                            <input type="text" name="site_entidade" class="form-control">


                                        </div>
                                    </div>
                                </div>







                                <div class="col-md-6">
                                    <div class="form-group">
                                        <a href="{{ url()->previous() }}" class="btn btn-info">Voltar</a>
                                        <button type="submit" class="btn btn-primary">Cadastrar</button>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

@endsection
