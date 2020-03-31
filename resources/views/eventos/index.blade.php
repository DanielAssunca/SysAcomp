@extends('shared.base')
@section('content')

<div class="panel panel-default">
    <div class="panel-heading">Lista de Eventos</div>
    <form method="GET" action="{{route('eventos.index', 'buscar' )}}">
        <div class="row">
            <div class="col-md-12">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Digite o nome do evento" name="buscar">
                    <span class="input-group-btn">
                        <button class="btn btn-info" style="padding-right: 20px; padding-left: 17px;"
                            type="submit">Pesquisar</button>
                    </span>
                </div>
            </div>
        </div>
    </form>
    <div class="row">
        <div class="col-md-12">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Data</th>
                        <th>Site</th>
                        <th>Local</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($eventos as $evento)
                    <tr>
                        <td>{{$evento->nome}}</td>
                        <td>{{$evento->data_evento}}</td>
                        <td>{{$evento->site_evento}}</td>
                        <td>{{$evento->localevento}}</td>


                        <td>
                            <a href="{{route('eventos.edit', $evento->id)}}"><i
                                    class="glyphicon glyphicon-pencil"></i></a>
                            <a href="{{route('eventos.remove', $evento->id)}}"><i
                                    class="glyphicon glyphicon-trash"></i></a>
                            <a href="{{route('eventos.show', $evento->id)}}"><i
                                    class="glyphicon glyphicon-zoom-in"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div align="center" class="row">
      {{ $eventos->links() }}

    </div>
</div>
<a href="{{route('eventos.create')}}"><button class="btn btn-primary">Adicionar</button></a>
@endsection
