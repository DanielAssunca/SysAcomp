@extends('shared.base')
@section('content')
<div class="panel panel-default">
    <div class="panel-heading">Lista de Contatos</div>
    <form method="GET" action="{{route('contatos.index', 'buscar' )}}">
        <div class="row">
            <div class="col-md-12">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Digite o nome do contato" name="buscar">
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
                        <th>Celular</th>
                        <th>Telefone</th>
                        <th>Skype</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($contatos as $contato)
                    <tr>
                        <td>{{$contatos->nome}}</td>
                        <td>{{$contatos->email}}</td>
                        <td>{{$contatos->celular}}</td>
                        <td>{{$contatos->telefone}}</td>
                        <td>{{$contatos->skype}}</td>


                        <td>
                            <a href="{{route('contatos.edit', $contato->id)}}"><i
                                    class="glyphicon glyphicon-pencil"></i></a>
                            <a href="{{route('contatos.remove', $contato->id)}}"><i
                                    class="glyphicon glyphicon-trash"></i></a>
                            <a href="{{route('contatos.show', $contato->id)}}"><i
                                    class="glyphicon glyphicon-zoom-in"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div align="center" class="row">
      {{ $contatos->links() }}

    </div>
</div>
<a href="{{route('contatos.create')}}"><button class="btn btn-primary">Adicionar</button></a>
@endsection
