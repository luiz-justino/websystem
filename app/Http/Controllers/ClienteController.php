<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;

class ClienteController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        return view('index');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function clientes() {
        $clientes = Cliente::all();
        return view('clientes', compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('novoCliente');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $request->validate([
            'nome' => 'required|unique:clientes',
            'idade' => 'required',
            'email' => 'required|email',
            'estado_civil' => 'required',
            'endereco' => 'required',
            'numero' => 'required|min:1',
            'bairro' => 'required',
            'cidade' => 'required',
            'estado' => 'required|max:2'
        ]);

        $cliente = new Cliente();
        $cliente->nome = $request->input('nome');
        $cliente->idade = $request->input('idade');
        $cliente->email = $request->input('email');
        $cliente->estado_civil = $request->input('estado_civil');
        $cliente->endereco = $request->input('endereco');
        $cliente->numero = $request->input('numero');
        $cliente->bairro = $request->input('bairro');
        $cliente->cidade = $request->input('cidade');
        $cliente->estado = $request->input('estado');
        $cliente->ativo = $request->input('ativo');
        $cliente->save();
        return redirect('/clientes');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        $cliente = Cliente::find($id);

        if (isset($cliente)) {
            return view('editaCliente', compact('cliente'));
        }

        return view('clientes');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        $cliente = Cliente::find($id);
        if (isset($cliente)) {
            $cliente->nome = $request->input('nome');
            $cliente->idade = $request->input('idade');
            $cliente->email = $request->input('email');
            $cliente->estado_civil = $request->input('estado_civil');
            $cliente->endereco = $request->input('endereco');
            $cliente->numero = $request->input('numero');
            $cliente->bairro = $request->input('bairro');
            $cliente->cidade = $request->input('cidade');
            $cliente->estado = $request->input('estado');
            $cliente->ativo = $request->input('ativo');
            $cliente->save();
        }
        return redirect('clientes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        $cliente = Cliente::find($id);
        if (isset($cliente)) {
            $cliente->delete();
        }

        return redirect('clientes');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function relatorios() {
        $clientes = [];
        
        return view('relatorios', compact('clientes'));
    }
    
    public function executaRelatorio(Request $request) {
        
        $filters = [
            'idade' => $request->input('idade'),
            'estado' => $request->input('estado'),
            'cidade' => $request->input('cidade'),
        ];
         
        $cm = new Cliente;
        
        $clientes = $cm->executaRelatorio($filters);
        
        return view('relatorios', compact('clientes'));
    }    

}
