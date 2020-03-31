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

        <form method="post" action="{{route ('eventos.store')}}">
            {{ csrf_field() }}
            <h4>Dados do Evento</h4>
            <hr>

            <div class="form-group">
                <label for="nome">Nome</label>
                <input type="text" class="form-control" placeholder="Nome do Evento" name="nome" required>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="data">Data de Inicio</label>
                        <input type="data" class="form-control" placeholder="Data de Inicio" name="data" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="logo_eventovg">Logo do Evento</label>
                        <input type="tel" class="form-control" placeholder="Logo do Evento" required name="logo_evento">
                    </div>
                </div>
            </div>
            <div class="row">

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="localevento">Local</label>
                        <input type="localevento" class="form-control" placeholder="Local do Evento" required name="localevento">
                    </div>
                </div>
            </div>

            <div class="row">

                <div class="col-md-6">
                    <div class="form-group">

                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Site do Evento:</span>
                            </div>
                            <textarea name="site_evento" style="margin: 0px; width: 538px;height: 230px;"
                                class="form-control" aria-label="With textarea"></textarea>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">

                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Site da Entidade:</span>
                            </div>
                            <textarea name="site_entidade" style="margin: 0px; width: 538px; height: 230px;"
                                class="form-control" aria-label="With textarea"></textarea>
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
        @endsection
