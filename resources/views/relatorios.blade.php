@extends('layout.app', ["current" => "relatorios"])

@section('body')
<link href="{{ asset('css/app.css')}}" rel="stylesheet">
<link href="{{ asset('css/jquery.dataTables.min.css')}}" rel="stylesheet">

<script src="{{ asset('js/app.js')}}" type="text/javascript"></script>
<script src="{{ asset('js/jquery.dataTables.min.js')}}" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('#tblRelatorioClientes').DataTable({
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
                    "previous": "Anterior",
                    "next": "Próximo",
                    "sFirst": "Primeiro",
                    "sLast": "Último",
                }
            },
        });
    });

    function buscaCidades(e) {
        document.querySelector("#cidade").innerHTML = '';
        var cidade_select = document.querySelector("#cidade");
        var num_estados = json_cidades.estados.length;
        var j_index = -1;
        // aqui eu pego o index do Estado dentro do JSON
        for (var x = 0; x < num_estados; x++) {
            if (json_cidades.estados[x].sigla == e) {
                j_index = x;
            }
        }

        if (j_index != -1) {

            // aqui eu percorro todas as cidades e crio os OPTIONS
            json_cidades.estados[j_index].cidades.forEach(function (cidade) {
                var cid_opts = document.createElement('option');
                cid_opts.setAttribute('value', cidade)
                cid_opts.innerHTML = cidade;
                cidade_select.appendChild(cid_opts);
            });
        } else {
            document.querySelector("#cidade").innerHTML = '';
        }
    }
</script>
<h5>Relatórios de clientes</h5>

<div class="card border">
    <div class="card-header">
        <div class="card-title">
            <h5>Filtros</h5>
        </div>
        <form class="form-inline" action="{{route('executaRelatorio')}}" method="POST">
            @csrf
            <label class="sr-only" for="idade">Idade</label>
            <input type="number" class="form-control mb-2 mr-sm-2" id="idade" name="idade" placeholder="Idade" title="Idade">
            
            <label class="sr-only" for="estado">Estado</label>
            <select id="estado" name="estado" class="form-control mb-2 mr-sm-2"></select>
            
            <label class="sr-only" for="cidade">Cidade</label>
            <select id="cidade" name="cidade" class="form-control mb-2 mr-sm-2"></select>

            <button type="submit" class="btn btn-primary mb-2">Filtrar</button>
        </form>
    </div>
</div>

<div class="alert alert-success">
    @if (count($clientes) > 0)
    {{count($clientes)}} registro(s) encontrado(s)
    @else
    Nenhum registro encontrado.
    @endif
</div>
<table class=" table table-ordered table-hover data-table display" id="tblRelatorioClientes">
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
<script src="{{ asset('js/cidades-estados-1.4-utf8.js')}}" type="text/javascript"></script>
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

    var estados = document.getElementById('estado');
    var cidades = document.getElementById('cidade');
    cidades.onchange = function ()
    {
        if (cidades.value !== "") {
            //Para o redirecionamento troque esta linha por window.location
            //veja o exemplo no final da resposta para ter um exemplo
            //alert(estados.value + " - " + cidades.value);
        }
    };
    new dgCidadesEstados({
        estado: estados,
        cidade: cidades,
        estadoVal: '<%=Request("estado") %>',
        cidadeVal: '<%=Request("cidade") %>'
    });
    var opts = estados.getElementsByTagName("option");
    var i = 0, j = opts.length, e;
    for (; i < j; i++) {
        e = opts[i];
    }

</script>
@endsection