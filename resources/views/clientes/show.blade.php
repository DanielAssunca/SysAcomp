@extends('shared.base')
@section('content')
    <div class="panel panel-default">
        <!-- Default panel contents -->
        <div class="panel-heading">Detalhes do Cliente</div>
        <div class="panel-body">
            <div class="row">
                <div class="col-md-12">
                    <h4>Sobre o Cliente</h4>
                    <p>Nome: {{$clientes->nome}}</p>
                    <p>E-Mail: {{$clientes->email}}</p>
                    <p>Telefone: {{$clientes->telefone}}</p>
                    <p>Tipo de Cliente: {{$clientes->tipocliente}}</p>
                    <p style="text-align: justify">Customizações: {{$clientes->customizacoes}}</p>
                    <p style="text-align: justify">Observações: {{$clientes->observacoes}}</p>
                </div>
            </div>
        </div>
    </div>
    <a href="{{ url()->previous() }}" class="btn btn-info">Voltar</a>
@endsection


