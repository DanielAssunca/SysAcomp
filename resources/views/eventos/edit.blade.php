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
        <h3>Cadastro de Eventos</h3>
    </div>
    <div class="panel-body">

        <form method="post" action="{{route ('eventos.update', $eventos->id)}}">
            <input type="hidden" name="_method" value="PUT">
            {{ csrf_field() }}
            <h4>Dados do Evento</h4>
            <hr>

            <div class="form-group">
                <label for="nome">Nome</label>
                <input type="text" class="form-control" placeholder="Nome do Evento" name="nome" required
                    value="{{$eventos->nome}}">
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="data_evento">Data</label>
                        <input type="data" class="form-control" name="data_evento" required
                            value="{{$eventos->data_evento}}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="site_evento">Site</label>
                        <input type="text" class="form-control" placeholder="Site do Evento" name="site_evento" required
                            value="{{$eventos->site_evento}}">
                    </div>
                </div>
            </div>
            <div class="row">

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="localevento">Local</label>
                        <input type="text" class="form-control" placeholder="Local do Evento" name="localevento"
                            required value="{{$eventos->localevento}}">
                    </div>
                </div>
            </div>

            <div class="row">

                <div class="col-md-6">
                    <div class="form-group">

                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Logo do Evento:</span>
                            </div>
                            <img src="" alt="">
                            <textarea name="logo_evento" class="form-control" aria-label="With textarea"
                                value="{{$eventos->logo_evento}}"></textarea>
                        </div>
                    </div>
                </div>

                <div class="col-md-10">
                    <div class="form-group">
                        <a href="{{ url()->previous() }}" class="btn btn-info">Voltar</a>
                        <button type="submit" class="btn btn-primary">Cadastrar</button>
                    </div>
                </div>
        </form>
        @endsection
