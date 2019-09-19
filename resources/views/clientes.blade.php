@extends('layout.app', ["current" => "clientes"])

@section('body')
        <main role="main">
            <div class="row">
                <div class="container">
                    <div class="card border">
                        <div class="card-header">
                            <div class="card-title">
                                <h3>Clientes</h3>
                            </div>
                            <div class="card-text">
                                <a href="{{route('novoCliente')}}">
                                    <button id="btnNovo" name="btnNovo" title="Novo cliente" class="btn btn-primary btn-sm">
                                        <i class="fa fa-plus"></i>
                                    </button>
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            <table class=" table table-ordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Nome</th>
                                        <th>E-mail</th>
                                        <th>Idade</th>
                                        <th>Estado civil</th>
                                        <th>Endereço</th>
                                        <th>Cidade</th>
                                        <th>Estado</th>
                                        <th>Ações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($clientes as $cliente)
                                    <tr>
                                        <td>{{$cliente->id}}</td>
                                        <td>{{$cliente->nome}}</td>
                                        <td>{{$cliente->email}}</td>
                                        <td>{{$cliente->idade}}</td>
                                        <td>{{$cliente->estado_civil}}</td>
                                        <td>{{$cliente->endereco}}, {{$cliente->numero}}, {{$cliente->bairro}}</td>
                                        <td>{{$cliente->cidade}}</td>
                                        <td>{{$cliente->estado}}</td>
                                        <td>
                                            <a href="clientes/editar/{{$cliente->id}}">
                                                <button id="btnEditar" name="btnEditar" title="Editar" class="btn btn-primary btn-sm">
                                                    <i class="fa fa-edit"></i>
                                                </button>
                                            </a>
                                            <a  href="clientes/excluir/{{$cliente->id}}">
                                                <button id="btnExcluir" name="btnExcluir" title="Excluir" class="btn btn-danger btn-sm">
                                                    <i class="fa fa-trash-o"></i>
                                                </button>
                                            </a> 
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </main>
@endsection