<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prestador extends Model
{
    protected $table = 'prestador';

    public static function rules(){
        return[
            'nome' => 'required|max:255|min:3',
            'endereco' => 'required|max:255|min:3',
            'cnpj' => 'required|min:14',
            'telefone' => 'required',
            'email' => 'required',
        ];
    }

    public static function messages(){
        return[
            'nome.required'=> 'O campo Nome é obrigatório!',
            'nome.max'=> 'O campo Nome deve ter até 255 caracteres!',
            'nome.min'=> 'O campo Nome deve ter no minimo 3 caracteres!',

            'endereco.required'=> 'O Endereço é obrigatório!',
            'endereco.max'=> 'O campo Endereço deve ter até 255 caracteres!',
            'endereco.min'=> 'O campo Endereço deve ter no minimo 3 caracteres!',

            'cnpj.required' => 'O campo CNPJ é obrigatório!',
            'cnpj.min' => 'O campo CNPJ deve ter 14 caracteres!',

            'telefone.required' => 'O campo Telefone é obrigatório!',

            'email.required' => 'O campo Email é obrigatório!',


        ];
    }

    use HasFactory;
}
