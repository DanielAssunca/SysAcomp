@extends('shared.base')
@section('content')
<div class="panel panel-default">
    <!-- Default panel contents -->
    <div class="panel-heading">Detalhes do Evento</div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-12">
                <h4>Sobre o Evento</h4>
                <p>Nome: {{$eventos->nome}}</p>
                <p>Data: {{$eventos->data_evento}}</p>
                <p>Site: {{$eventos->site_evento}}</p>
                <p>Local: {{$eventos->localevento}}</p>
            </div>
        </div>
    </div>
</div>
<a href="{{ url()->previous() }}" class="btn btn-info">Voltar</a>
@endsection
