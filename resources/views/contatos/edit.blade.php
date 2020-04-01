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
        <h3>Cadastro de Contatos</h3>
    </div>
    <div class="panel-body">

        <form method="post" action="{{route ('contatos.update', $contatos->id)}}">
            <input type="hidden" name="_method" value="PUT">
            {{ csrf_field() }}
            <h4>Dados do contato</h4>
            <hr>

            <div class="form-group">
                <label for="nome">Nome</label>
                <input type="text" class="form-control" placeholder="Nome do contato" name="nome" required
                    value="{{$contatos->nome}}">
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="email">E-mail</label>
                        <input type="email" class="form-control" placeholder="e-mail" name="email" required
                            value="{{$contatos->email}}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="celular">Celular</label>
                        <input type="tel" class="form-control" placeholder="Celular de Contato" name="celular" required
                            value="{{$contatos->celular}}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="telefone">Telefone</label>
                        <input type="tel" class="form-control" placeholder="Telefone de Contato" name="telefone"
                            required value="{{$contatos->telefone}}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="skype">Skype</label>
                        <input type="text" class="form-control" placeholder="Skype do contato" name="skype"
                            required value="{{$contatos->skype}}">
                    </div>
                </div>
            </div>
            <div class="row">

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="modinscricoes">Módulo do Contato</label>
                        <select class="form-control" name="modinscricoes" required value="{{$contatos->modinscricoes}}">
                            <option {{($contatos->modinscricoes == 'Inscrições'  ? 'selected' : '')}}>
                                Organizadora de Eventos</option>
                            <option {{($contatos->modinscricoes == 'Organizadora de Eventos'  ? 'selected' : '')}}>
                                Propria
                                Associação</option>
                            <option {{($contatos->modinscricoes == 'Associação'  ? 'selected' : '')}}>Propria
                                Associação</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="row">

                <div class="col-md-6">
                    <div class="form-group">

                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Customizações:</span>
                            </div>
                            <textarea name="customizacoes" style="margin: 0px; width: 538px;height: 230px;"
                                class="form-control" aria-label="With textarea"
                                value="{{$contatos->customizacoes}}"></textarea>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">

                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Observações:</span>
                            </div>
                            <textarea name="observacoes" style="margin: 0px; width: 538px; height: 230px;"
                                class="form-control" aria-label="With textarea"
                                value="{{$contatos->observacoes}}"></textarea>
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
