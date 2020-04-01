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

    <div class="panel-heading">
        <h3>Cadastro de Contatos</h3>
    </div>
    <div class="panel-body">

        <form method="post" action="{{route ('contatos.store')}}">
            {{ csrf_field() }}
            <h4>Dados do contato</h4>
            <hr>

            <div class="form-group">
                <label for="nome">Nome</label>
                <input type="text" class="form-control" placeholder="Nome do Contato" name="nome" required>
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
                        <label for="celular">Celular</label>
                        <input type="tel" class="form-control" placeholder="Celular do Contato" required name="celular">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="telefone">Telefone</label>
                        <input type="tel" class="form-control" placeholder="Telefone de Contato" required
                            name="telefone">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="skype">Skype</label>
                        <input type="skype" class="form-control" placeholder="Skype do contato" required name="skype">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="modinscricoes">Módulo do Contato</label>
                        <select class="form-control" name="modinscricoes" required>
                            <option>Inscrições</option>
                            <option>Programação Cientifica</option>
                            <option>Associação</option>
                        </select>
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

@endsection
