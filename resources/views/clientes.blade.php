@extends('layout.app', ["current" => "clientes"])

@section('body')
<link href="{{ asset('css/app.css')}}" rel="stylesheet">
<link href="{{ asset('css/jquery.dataTables.min.css')}}" rel="stylesheet">

<script src="{{ asset('js/app.js')}}" type="text/javascript"></script>
<script src="{{ asset('js/jquery.dataTables.min.js')}}" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#tblClientes').DataTable( {
            "language": {
            "sEmptyTable": "Nenhum registro encontrado",
            "sInfo": "Mostrando de _START_ até _END_ de _TOTAL_ registros",
            "sInfoEmpty": "Exibindo 0 até 0 de 0 registros",
            "sInfoFiltered": "(Filtrados de _MAX_ registros)",
            "sInfoPostFix": "",
            "sInfoThousands": ".",
            "sLengthMenu": "_MENU_ resultados por página",
            "sLoadingRecords": "Carregando...",
            "sProcessing": "Processando...",
            "sZeroRecords": "Nenhum registro encontrado",
            "sSearch": "Pesquisar",
              "paginate": {
                "previous": "Anterior  ",
                "next": "  Próximo",
                "sFirst": "Primeiro",
                "sLast": "Último",
              }
          }
        });
    });
</script>
<div class="card border">
    <style>
        td{
            height: auto;
            line-height: initial;
            padding: 0px;
        }
    </style>
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
    <div class="alert alert-success">
        @if (count($clientes) > 0)
        {{count($clientes)}} registro(s) encontrado(s)
        @else
        Nenhum registro encontrado.
        @endif
    </div>    
    <div class="card-body">
        <table class=" table table-ordered table-hover" id="tblClientes" style="width: 100%">
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
                        <button id="btnEditar" name="btnEditar" onclick="editar({{$cliente->id}});" title="Editar" class="btn btn-primary btn-sm">
                            <i class="fa fa-edit"></i>
                        </button>
                        <button id="btnExcluir" name="btnExcluir" onclick="excluir({{$cliente->id}});" title="Excluir" class="btn btn-danger btn-sm">
                            <i class="fa fa-trash-o"></i>
                        </button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
<script src="{{ asset('js/app.js')}}" type="text/javascript"></script>
<script src="{{ asset('js/jquery.dataTables.min.js')}}" type="text/javascript"></script>
<script type="text/javascript">
    function editar(id) {
    window.location.href = "clientes/editar/" + id;
    }

    function excluir(id) {
    if (false === confirm('Deseja realmente excluir este clientes?')) {
    return false;
    }
    window.location.href = "clientes/excluir/" + id;
    }
</script>
@endsection