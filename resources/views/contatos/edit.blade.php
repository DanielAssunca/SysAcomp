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
                            <h3>Edição de Contatos</h3>
                        </div>
                        <div class="panel-body">

                            <form method="post" action="{{route ('contatos.update', $contatos->id)}}">
                                <input type="hidden" name="_method" value="PUT">
                                {{ csrf_field() }}
                                <h4>Dados do contato</h4>
                                <hr>

                                <div class="col-md-6">

                                    <div class="form-group">
                                        <label for="eventos_id">Selecione o Evento</label>
                                        <select class="form-control" name="eventos_id" required>
                                            @foreach($eventos as $evento)
                                            <option>
                                                {{$evento->nome}}</option>
                                            @endforeach
                                        </select>

                                    </div>

                                    <label for="email">E-mail</label>
                                    <input type="email" class="form-control" placeholder="e-mail" name="email"
                                        required value="{{$contatos->email}}">

                                </div>



                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">

                                            <label for="nome">Nome</label>
                                            <input type="text" class="form-control" placeholder="Nome do contato" name="nome"
                                                required value="{{$contatos->nome}}">





                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="celular">Celular</label>
                                            <input type="tel" class="form-control" placeholder="Celular de Contato"
                                                name="celular" required value="{{$contatos->celular}}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="telefone">Telefone</label>
                                            <input type="tel" class="form-control" placeholder="Telefone de Contato"
                                                name="telefone" required value="{{$contatos->telefone}}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="skype">Skype</label>
                                            <input type="text" class="form-control" placeholder="Skype do contato"
                                                name="skype" required value="{{$contatos->skype}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="modinscricoes">Módulo do Contato</label>
                                            <select class="form-control" name="modinscricoes" required
                                                value="{{$contatos->modinscricoes}}">
                                                <option
                                                    {{($contatos->modinscricoes == 'Inscrições'  ? 'selected' : '')}}>
                                                    Inscrições</option>
                                                <option
                                                    {{($contatos->modinscricoes == 'Programação Cientifica'  ? 'selected' : '')}}>
                                                    Programação Cientifica</option>
                                                <option
                                                    {{($contatos->modinscricoes == 'Associação'  ? 'selected' : '')}}>
                                                    Associação</option>
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
