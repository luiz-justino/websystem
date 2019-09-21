@extends('layout.app', ["current" => "relatorios"])

@section('body')

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
            <select class="custom-select form-control mb-2 mr-sm-2" name="estado" id="estado">
                <option selected>Selecione o estado</option>
                <option value="AC">AC</option>
                <option value="AC">AC</option>
                <option value="AP">AP</option>
                <option value="AM">AM</option>
                <option value="BA">BA</option>
                <option value="CE">CE</option>
                <option value="DF">DF</option>
                <option value="ES">ES</option>
                <option value="GO">GO</option>
                <option value="MA">MA</option>
                <option value="MT">MT</option>
                <option value="MS">MS</option>
                <option value="MG">MG</option>
                <option value="PA">PA</option>
                <option value="PB">PB</option>
                <option value="PR">PR</option>
                <option value="PE">PE</option>
                <option value="PI">PI</option>
                <option value="RJ">RJ</option>
                <option value="RN">RN</option>
                <option value="RS">RS</option>
                <option value="RO">RO</option>
                <option value="RR">RR</option>
                <option value="SC">SC</option>
                <option value="SP">SP</option>
                <option value="SE">SE</option>
                <option value="TO">TO'</option>
            </select>

            <label class="sr-only" for="cidade">Cidade</label>
            <input type="text" class="form-control mb-2 mr-sm-2" id="cidade" name="cidade" placeholder="Cidade" title="Cidade">

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