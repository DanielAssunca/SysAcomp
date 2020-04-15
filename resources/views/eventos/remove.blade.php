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
                <li><a href="{{route('acompanhamentos.index')}}">Acompanhamentos</a></li>
                <li class="visible-xs"><a href="#">Sair</a></li>
            </ul>
        </div>
        <div class="content">
            <div class="container-fluid">
                <div class="row">


                    <div class="panel panel-default">
                        <div class="panel-heading">Remover o Evento</div>
                        <div class="panel-body">
                            <form method="post" action="{{route ('eventos.destroy', $eventos->id)}}">
                                <input type="hidden" name="_method" value="DELETE">
                                {{ csrf_field() }}
                                <div class="row">
                                    <div class="col-md-12">
                                        <h4>Tem certeza que deseja remover o evento?</h4>
                                        <hr>
                                        <h4>Sobre o Evento</h4>
                                        <p>Nome: {{$eventos->nome}}</p>
                                        <p>Data: {{$eventos->data_evento}}</p>
                                        <p>Site: {{$eventos->site_evento}}</p>
                                        <p>Local: {{$eventos->localevento}}</p>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-danger">Remover</button>
                                <a href="{{ url()->previous() }}" class="btn btn-default">Cancelar</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

@endsection
