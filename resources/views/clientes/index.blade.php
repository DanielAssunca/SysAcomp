@extends('shared.base')
@section('content')
<div class="panel panel-default">
    <div class="panel-heading">Lista de Clientes</div>
    <form method="GET" action="{{route('clientes.index', 'buscar' )}}">
        <div class="row">
            <div class="col-md-12">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Digite o nome do cliente" name="buscar">
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
                        <th>Email</th>
                        <th>Telefone</th>
                        <th>Tipo de Cliente</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($clientes as $clientes)
                    <tr>
                        <td>{{$clientes->nome}}</td>
                        <td>{{$clientes->email}}</td>
                        <td>{{$clientes->telefone}}</td>
                        <td>{{$clientes->tipocliente}}</td>


                        <td>
                            <a href="{{route('clientes.edit', $clientes->id)}}"><i
                                    class="glyphicon glyphicon-pencil"></i></a>
                            <a href="{{route('clientes.remove', $clientes->id)}}"><i
                                    class="glyphicon glyphicon-trash"></i></a>
                            <a href="{{route('clientes.show', $clientes->id)}}"><i
                                    class="glyphicon glyphicon-zoom-in"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div align="center" class="row">
        {{-- TEM QUE VER POR QUE ESSA PORRA NAO ESTA SENDO RECONHCIDA PELO LARAVEL {{ $imoveis->links() }} --}}

    </div>
</div>
<a href="{{route('clientes.create')}}"><button class="btn btn-primary">Adicionar</button></a>
@endsection
