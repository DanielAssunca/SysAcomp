@extends('shared.base')
@section('content')
<div class="panel panel-default">
    <!-- Default panel contents -->
    <div class="panel-heading">Detalhes do Contato</div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-12">
                <h4>Sobre o Contato</h4>
                <p>Nome: {{$contatos->nome}}</p>
                <p>E-Mail: {{$contatos->email}}</p>
                <p>Telefone: {{$contatos->celular}}</p>
                <p>Telefone: {{$contatos->telefone}}</p>
                <p>Tipo de Cliente: {{$contatos->skype}}</p>
            </div>
        </div>
    </div>
</div>
<a href="{{ url()->previous() }}" class="btn btn-info">Voltar</a>
@endsection
