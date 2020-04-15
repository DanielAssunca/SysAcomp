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

                            <form method="post" action="{{route ('acompanhamentos.update', $acompanhamentos->id)}}">
                                <input type="hidden" name="_method" value="PUT">
                                {{ csrf_field() }}
                                <h4>Dados do acompanhamento</h4>
                                <hr>

                                <div class="form-group">
                                    <label for="nome">Nome Fantasia</label>
                                    <input type="text" class="form-control" placeholder="Nome Fantasia" name="nome"
                                        required value="{{$acompanhamentos->nome}}">
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="email">E-mail</label>
                                            <input type="email" class="form-control" placeholder="e-mail" name="email"
                                                required value="{{$acompanhamentos->email}}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="telefone">Telefone</label>
                                            <input type="tel" class="form-control" placeholder="Telefone de Contato"
                                                name="telefone" required value="{{$acompanhamentos->telefone}}">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <label>Cep:
                                                    <input class="form-control" name="cep" type="text" id="cep"
                                                        size="10" value="{{$acompanhamentos->cep}}" maxlength="9" onblur="pesquisacep(this.value);" />
                                                </label><br />

                                                <label>Rua:
                                                    <input class="form-control" name="rua" type="text" id="rua"
                                                        size="60"value="{{$acompanhamentos->rua}}"></label><br />
                                                <label>Bairro:
                                                    <input class="form-control" name="bairro" type="text" id="bairro"
                                                        size="40" value="{{$acompanhamentos->bairro}}"></label><br />

                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <label>Cidade:
                                                    <input class="form-control" name="cidade" type="text" id="cidade"
                                                        size="40" value="{{$acompanhamentos->cidade}}"></label><br />
                                                <label>Estado:
                                                    <input class="form-control" name="uf" type="text" id="uf"
                                                        size="2" value="{{$acompanhamentos->uf}}"></label><br />
                                                <label>IBGE:
                                                    <input class="form-control" name="ibge" type="text" id="ibge"
                                                        size="8" value="{{$acompanhamentos->ibge}}"></label><br />
                                            </div>
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
                                                    class="form-control" aria-label="With textarea"> {{$acompanhamentos->customizacoes}}
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
                                                    aria-label="With textarea">{{$acompanhamentos->observacoes}}</textarea>
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
