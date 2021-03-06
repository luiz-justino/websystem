@extends('layout.app', ["current" => "novoCliente"])

@section('body')
<script src="{{ asset('js/app.js')}}" type="text/javascript"></script>
<script src="{{ asset('js/cidades-estados-1.4-utf8.js')}}" type="text/javascript"></script>
<script type="text/javascript">
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
<div class="card border">
    <div class="card-header">
        <div class="card-title">
            <h3>Cadastro de cliente</h3>
        </div>
    </div>
    <div class="card-body col-md-10" >
        <form action="{{route('novoCliente')}}" method="POST">
            @csrf
            <div class="form-group row">
                <label for="nome" class="col-3 col-form-label">Nome</label> 
                <div class="col-8">
                    <input id="nome" name="nome" type="text" class="form-control col-8">
                </div>
            </div>
            <div class="form-group row">
                <label for="email" class="col-3 col-form-label">E-mail</label> 
                <div class="                                    col-8">
                    <input id="email" name="email" type="text" class="form-control col-8">
                </div>
            </div>
            <div class="form-group row">
                <label for="idade" class="col-3 col-form-label">Idade</label> 
                <div class="col-8">
                    <input id="idade" name="idade" type="text" class="form-control col-3">
                </div>
            </div>
            <div class="form-group row">
                <label for="estado_civl" class="col-3 col-form-label">Estado Civil</label> 
                <div class="col-8">
                    <select id="estado_civil" name="estado_civil" class="custom-select form-control col-3">
                        <option value="Selecione" selected="">Selecione</option>
                        <option value="Solteiro(a)">Solteiro(a)</option>
                        <option value="Casado(a)">Casado(a)</option>
                        <option value="Divorciado(a)">Divorciado(a)</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="endereco" class="col-3 col-form-label">Endereço</label> 
                <div class="col-8">
                    <input id="endereco" name="endereco" type="text" class="form-control col-8"">
                </div>
            </div>
            <div class="form-group row">
                <label for="numero" class="col-3 col-form-label">Número</label> 
                <div class="col-8">
                    <input id="numero" name="numero" type="text" class="form-control col-8">
                </div>
            </div>
            <div class="form-group row">
                <label for="bairro" class="col-3 col-form-label">Bairro</label> 
                <div class="col-8">
                    <input id="bairro" name="bairro" type="text" class="form-control col-8">
                </div>
            </div>
            <div class="form-group row">
                <label for="estado" class="col-3 col-form-label">Estado</label> 
                <div class="col-8">
                    <select id="estado" name="estado" class="form-control col-8"></select>
                </div>
            </div>
            <div class="form-group row">
                <label for="cidade" class="col-3 col-form-label">Cidade</label> 
                <div class="col-8">
                    <select id="cidade" name="cidade" class="form-control col-8"></select>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-8">
                    <input id="ativo" name="ativo" type="hidden" class="form-control col-8" value="1">
                </div>
            </div>
    </div> 
    <div class="form-group row">
        <div class="offset-4 col-8">
            <button id="btnSalvar" name="btnSalvar" type="submit" class="btn btn-primary">Salvar</button>
            <button id="btnCancelar" name="btnCancelar" type="cancel" class="btn btn-danger">Cancelar</button>
        </div>
    </div>
</form>
</div>
@if($errors->any())
<div class="card-footer">
    @foreach($errors->all() as $erro)
    <div class="alert alert-danger" role="alert">
        {{$erro}}
    </div>
    @endforeach
</div>
@endif
<script src="{{ asset('js/app.js')}}" type="text/javascript"></script>
<script src="{{ asset('js/cidades-estados-1.4-utf8.js')}}" type="text/javascript"></script>
<script type="text/javascript">
                    var estados = document.getElementById('estado');
                    var cidades = document.getElementById('cidade');
                    cidades.onchange = function()
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