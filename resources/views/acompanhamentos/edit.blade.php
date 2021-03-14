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
                <li><a href="{{route('index')}}">Home</a></li>
                <li class="active"><a href="{{route('acompanhamentos.index')}}">Acompanhamentos</a></li>
                <li class="active"><a href="{{route('eventos.index')}}">Eventos</a></li>
                <li class="active"><a href="{{route('contatos.index')}}">Contatos</a></li>
                <li class="active"><a href="#">Acompanhamentos</a></li>
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
                            <h3>Edição de Acompanhamentos</h3>
                        </div>
                        <div class="panel-body">

                            <form method="post" action="{{route ('acompanhamentos.update', $acompanhamento->id)}}">
                                <input type="hidden" name="_method" value="PUT">
                                {{ csrf_field() }}
                                <h4>Dados do acompanhamento</h4>
                                <hr>
                                <div class="row">

                                    <div class="col-md-6">

                                        <div class="form-group">
                                            <label for="clientes_id">Selecione o Cliente</label>
                                            <select class="form-control" name="clientes_id" required>

                                                @foreach($clientes as $cliente)
                                                <option value="{{$cliente->id}}"
                                                    {{(isset($acompanhamento->cliente_id) && $acompanhamento->cliente_id == $cliente->id ?
                                                    'selected' : '')}}>{{$cliente->nome}}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                </div>


                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <a href="{{ url()->previous() }}" class="btn btn-info">Voltar</a>
                                            <button type="submit" class="btn btn-primary">Editar</button>
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
