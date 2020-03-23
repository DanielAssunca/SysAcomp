
@extends('shared.base')

@section('content')
        @if($errors->any())
            <div class="alert alert-danger" role="alert">
                @foreach ($errors->all() as $error)
                    {{ $error }}<br>
                @endforeach
            </div>
        @endif
        <div class="panel panel-default">

            <div class="panel-heading"><h3>Cadastre de Cliente</h3></div>
            <div class="panel-body">

        <form method="post" action="{{route ('clientes.store')}}">
            {{ csrf_field() }}
            <h4>Dados do cliente</h4>
            <hr>
            <div class="form-group">
                <label for="nome">Nome Fantasia</label>
                <input type="text" class="form-control" placeholder="Nome Fantasia" name="nome" required>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="email">E-mail</label>
                        <input type="email" class="form-control" placeholder="e-mail" name="email" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="telefone">Telefone</label>
                        <input type="tel" class="form-control" placeholder="Telefone de Contato" required name="telefone">
                    </div>
                </div>
            </div>
            <div class="row">

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="tipocliente">Tipo de Cliente</label>
                        <select class="form-control" name="tipocliente" required>
                            <option>Organizadora de Eventos</option>
                            <option>Propria Associação</option>
                        </select>
                    </div>
                </div>
            </div>
            <h4>Endereço</h4>
            <hr>

                <div class="form-group">
                    <label for="logradouroEndereco">Logradouro</label>
                    <input type="text" class="form-control" placeholder="Logradouro" required name="logradouroEndereco">
                </div>
            <div class="row">
                <div class="col-md-10">
                    <div class="form-group">
                        <label for="bairroEndereco">Bairro</label>
                        <input type="text" class="form-control" placeholder="Bairro" required name="bairroEndereco">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label for="numero">Número</label>
                        <input type="number" class="form-control" placeholder="Número" required name="numeroEndereco">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="cidadeEndereco">Cidade</label>
                        <input type="text" class="form-control" placeholder="Cidade" required name="cidadeEndereco">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="cepEndereco">CEP</label>
                        <input type="text" class="form-control" placeholder="CEP" required name="cepEndereco">
                    </div>
                </div>
            </div>
            <a href="{{ url()->previous() }}" class="btn btn-default">Voltar</a>
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </form>
@endsection



