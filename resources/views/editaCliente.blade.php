@extends('layout.app', ["current" => "editaCliente"])

@section('body')
<main role="main">
    <div class="row">
        <div class="container">
            <div class="card border">
                <div class="card-header">
                    <div class="card-title">
                        <h3>Edição de cliente</h3>
                    </div>
                </div>
                <div class="card-body col-md-10" >
                    <form action="{{route('atualizaCliente', $cliente->id)}}" method="POST">
                        @csrf
                        <div class="form-group row">
                            <label for="nome" class="col-3 col-form-label">Nome</label> 
                            <div class="col-8">
                                <input id="nome" name="nome" type="text" class="form-control col-8" value="{{$cliente->nome}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-3 col-form-label">E-mail</label> 
                            <div class="col-8">
                                <input id="email" name="email" type="text" class="form-control col-8" value="{{$cliente->email}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="idade" class="col-3 col-form-label">Idade</label> 
                            <div class="col-8">
                                <input id="idade" name="idade" type="text" class="form-control col-8" value="{{$cliente->idade}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="estado_civl" class="col-3 col-form-label">Estado Civil</label> 
                            <div class="col-8">
                                <select id="estado_civil" name="estado_civil" class="custom-select form-control col-2">
                                    <option value="Solteiro" @if($cliente == 'Solteiro') selected=""@endif)>Solteiro</option>
                                    <option value="Casado" @if($cliente == 'Casado') selected="" @endif>Casado</option>
                                    <option value="Divorciado" @if($cliente == 'Divorciado') selected="" @endif>Divorciado</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="endereco" class="col-3 col-form-label">Endereço</label> 
                            <div class="col-8">
                                <input id="endereco" name="endereco" type="text" class="form-control col-8" value="{{$cliente->endereco}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="numero" class="col-3 col-form-label">Número</label> 
                            <div class="col-8">
                                <input id="numero" name="numero" type="text" class="form-control col-8" value="{{$cliente->numero}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="bairro" class="col-3 col-form-label">Bairro</label> 
                            <div class="col-8">
                                <input id="bairro" name="bairro" type="text" class="form-control col-8" value="{{$cliente->bairro}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="cidade" class="col-3 col-form-label">Cidade</label> 
                            <div class="col-8">
                                <input id="cidade" name="cidade" type="text" class="form-control col-8" value="{{$cliente->cidade}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="estado" class="col-3 col-form-label">Estado</label> 
                            <div class="col-8">
                                <input id="estado" name="estado" type="text" class="form-control col-8" value="{{$cliente->estado}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-3">Ativo</label> 
                            <div class="col-8">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input name="ativo" id="ativo_1" type="radio" class="custom-control-input" value="1" @if ($cliente->ativo == '1')checked @endif> 
                                    <label for="ativo_1" class="custom-control-label">Sim</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input name="ativo" id="ativo_0" type="radio" class="custom-control-input" value="0" @if ($cliente->ativo == '0')checked @endif> 
                                    <label for="ativo_0" class="custom-control-label">Não</label>
                                </div>
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
        </div>
    </div>
</div>
</main>
@endsection