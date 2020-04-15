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
                    <div class="panel panel-default">
                        <div class="panel-heading">Lista de Eventos</div>
                        <form method="GET" action="{{route('eventos.index', 'buscar' )}}">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="input-group">
                                        <input type="text"  style="text-transform:uppercase;" class="form-control" placeholder="Digite o nome do evento"
                                            name="buscar">
                                        <span class="input-group-btn">
                                            <button class="btn btn-info"
                                                style="padding-right: 20px; padding-left: 17px;"
                                                type="submit">Pesquisar</button>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Nome</th>
                                        <th>Data</th>
                                        <th>Site</th>
                                        <th>Local</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($eventos as $evento)
                                    <tr>
                                        <td>{{$evento->nome}}</td>
                                        <td>{{$evento->data_evento}}</td>
                                        <td>{{$evento->site_evento}}</td>
                                        <td>{{$evento->localevento}}</td>


                                        <td>
                                            <a href="{{route('eventos.edit', $evento->id)}}"><i
                                                    class="glyphicon glyphicon-pencil"></i></a>
                                            <a href="{{route('eventos.remove', $evento->id)}}"><i
                                                    class="glyphicon glyphicon-trash"></i></a>
                                            <a href="{{route('eventos.show', $evento->id)}}"><i
                                                    class="glyphicon glyphicon-zoom-in"></i></a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>

                        </form>


                        <div align="center" class="row">
                            {{ $eventos->links() }}

                        </div>
                    </div>
                    <a href="{{route('eventos.create')}}"><button class="btn btn-primary">Adicionar</button></a>
                </div>
            </div>
        </div>
    </div>
</body>
@endsection
