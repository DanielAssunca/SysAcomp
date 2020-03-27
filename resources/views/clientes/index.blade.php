@extends('shared.base')
@section('content')
    <div class="panel panel-default">   
        <div class="panel-heading">Lista de Imóveis</div>
        <form method="GET" action="{{route('clientes.index', 'buscar' )}}">
        <div class="row">
            <div class="col-md-12">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Digite o nome do Cliente" name="buscar">
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="submit">Pesquisar</button>
                    </span>
                </div>
            </div>
        </div>
        </form>
        <div class="row">
            <div class="col-md-12">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>E-Mail</th>
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
                                    <a href="#"><i class="glyphicon glyphicon-pencil"></i></a>
                                    <a href="#', $clientes->id)}}"><i class="glyphicon glyphicon-trash"></i></a>
                                    <a href="#"><i class="glyphicon glyphicon-zoom-in"></i></a>
                                </td>                               
                            </tr>                        
                        @endforeach                                
                    </tbody>
                </table>
            </div>
        </div>
        <div align="center" class="row">

        </div>
    </div>
    <a href="{{route('clientes.create')}}"><button class="btn btn-primary">Adicionar</button></a>
@endsection
