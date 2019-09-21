@extends('layout.app', ["current" => "novoCliente"])

@section('body')
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
                    <select class="custom-select form-control mb-2 mr-sm-2 col-8" name="estado" id="estado">
                        <option selected>Selecione</option>
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
                </div>
            </div>
            <div class="form-group row">
                <label for="cidade" class="col-3 col-form-label">Cidade</label> 
                <div class="col-8">
                    <input id="cidade" name="cidade" type="text" class="form-control col-8">
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
@endsection