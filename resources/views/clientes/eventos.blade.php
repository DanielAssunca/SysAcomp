@extends('shared.base')
@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">Eventos do Cliente</div>
        <div class="panel-body">
            <div class="row">
                <div class="col-md-12">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Nome</th>
                                <th>Ver Informações</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($clientes->eventos as $evento)
                                <tr>
                                    <td>{{ $evento->nome }}</td>
                                    <td><a href="{{ route('eventos.show', $evento->id) }}">
                                            Informações do Evento</a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <a href="{{ route('clientes.index') }}" class="btn btn-info">Voltar</a>

@endsection
