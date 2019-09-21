<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model {

    protected $table = 'clientes';
    protected $guarded = ['id', 'created_at', 'update_at'];
    protected $fillable = [
        'nome',
        'email',
        'idade',
        'estado_civil',
        'endereco',
        'numero',
        'bairro',
        'cidade',
        'estado',
        'ativo'
    ];

    public function executaRelatorio($filters) {
        $clientes = Cliente::when(isset($filters['idade']), function($query) use ($filters) {
                    $query->where('idade', '=', $filters['idade']);
                })->when(isset($filters['estado']), function($query) use ($filters) {
                    $query->where('estado', '=', $filters['estado']);
                })->when(isset($filters['cidade']), function($query) use ($filters) {
                    $query->where('cidade', '=', $filters['cidade']);
                })->get();

        return $clientes;
    }

}
