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
                <li><a href="#">Acompanhamentos</a></li>
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
                            <h3>Edição de Cliente</h3>
                        </div>
                        <div class="panel-body">

                            <form method="post" action="{{route ('clientes.update', $clientes->id)}}">
                                <input type="hidden" name="_method" value="PUT">
                                {{ csrf_field() }}
                                <h4>Dados do cliente</h4>
                                <hr>

                                <div class="form-group">
                                    <label for="nome">Nome Fantasia</label>
                                    <input type="text" class="form-control" placeholder="Nome Fantasia" name="nome"
                                        required value="{{$clientes->nome}}">
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="email">E-mail</label>
                                            <input type="email" class="form-control" placeholder="e-mail" name="email"
                                                required value="{{$clientes->email}}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="telefone">Telefone</label>
                                            <input type="tel" class="form-control" placeholder="Telefone de Contato"
                                                name="telefone" required value="{{$clientes->telefone}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="tipocliente">Tipo de Cliente</label>
                                            <select class="form-control" name="tipocliente" required
                                                value="{{$clientes->tipocliente}}">
                                                <option
                                                    {{($clientes->tipocliente == 'Organizadora de Eventos'  ? 'selected' : '')}}>
                                                    Organizadora de Eventos</option>
                                                <option
                                                    {{($clientes->tipocliente == 'Propria Associação'  ? 'selected' : '')}}>
                                                    Propria
                                                    Associação</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">

                                    <div class="col-md-6">
                                        <div class="form-group">

                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">Customizações:</span>
                                                </div>
                                                <textarea name="customizacoes"
                                                    style="margin: 0px; width: 538px;height: 230px;"
                                                    class="form-control" aria-label="With textarea"> {{$clientes->customizacoes}}
                                                </textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">

                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">Observações:</span>
                                                </div>
                                                <textarea name="observacoes"
                                                    style="margin: 0px; width: 538px; height: 230px;"
                                                    class="form-control"
                                                    aria-label="With textarea">{{$clientes->observacoes}}</textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <a href="{{ url()->previous() }}" class="btn btn-info">Voltar</a>
                                            <button type="submit" class="btn btn-primary">Editar</button>
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
</body>
@endsection
