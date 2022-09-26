<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nota extends Model
{
    //Buscar a tabela do banco no singular
    //protected $table = 'nota';

    //Necessario para o update (erro mass)
    protected $guarded = [];

    public static function rules(){
        return[
            'numero' => 'required|max:255|min:3',
            'tomador' => 'required|max:255|min:3',
            'prestador' => 'required|min:14',
            'valor' => 'required|min:14',
            'email' => 'required',
            'email' => 'required',
        ];
    }

    public static function messages(){
        return[
            'numero.required'=> 'O campo Número é obrigatório!',
            'numero.max'=> 'O campo Número deve ter até 255 caracteres!',
            'numero.min'=> 'O campo Número deve ter no minimo 3 caracteres!',

            'tomador.required'=> 'O Tomador é obrigatório!',
            'tomador.max'=> 'O campo Tomador deve ter até 255 caracteres!',
            'tomador.min'=> 'O campo Tomador deve ter no minimo 3 caracteres!',

            'prestador.required'=> 'O Prestador é obrigatório!',
            'prestador.max'=> 'O campo Prestador deve ter até 255 caracteres!',
            'prestador.min'=> 'O campo Prestador deve ter no minimo 3 caracteres!',


            'valor.required' => 'O campo Valor é obrigatório!',
            'valor.min' => 'O campo Valor deve ter até 14 caracteres!',

            'telefone.required' => 'O campo Telefone é obrigatório!',

            'email.required' => 'O campo Email é obrigatório!',
        ];

    }

    public function prestador(){
        return $this->hasOne(Prestador::class);
    }

    public function tomador(){
        return $this->hasOne(Tomador::class);
    }

    use HasFactory;
}
