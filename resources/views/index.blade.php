@extends('layout.app', ['current' => 'index'])

@section('body')
<div class="jumbotron bg-light border border-secondary">
    <div class="row">
        <div class="card-deck">
            <div class="card">
                <div class="card-body">
                    <h1 class="card-title">Websystem - Cadastro de clientes</h1>
                    <p class="card-text">Cadastre seus clientes</p>
                    <a href="{{route('novoCliente')}}" class="btn btn-primary" title="Novo Cliente">Novo</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection