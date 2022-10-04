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
            'numero' => 'required|int',
            'tomador_id' => 'int',
            'prestador_id' => 'int',
            'valor' => 'required|max:14',
        ];
    }

    public static function messages(){
        return[
            'numero.required'=> 'O campo Número é obrigatório!',
            'numero.max'=> 'O campo Número deve ter até 255 caracteres!',
            'numero.min'=> 'O campo Número deve ter no minimo 3 caracteres!',

            'tomador_id.required'=> 'O Tomador é obrigatório!',

            'prestador_id.required'=> 'O Prestador é obrigatório!',

            'valor.required' => 'O campo Valor é obrigatório!',
            'valor.max' => 'O campo Valor deve ter até 14 caracteres!',

        ];

    }

    //Relacionamentos

    public function prestador(){
        return $this->hasOne(Prestador::class,'id', 'prestador_id');
    }

    public function tomador(){
        return $this->hasOne(Tomador::class,'id', 'tomador_id');
    }

    use HasFactory;
}
