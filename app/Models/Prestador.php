<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prestador extends Model
{
    protected $table = 'prestador';

    //public function rules(){
        //return[
            //'nome' => 'required|max:255|min 3',
            //'endereco' => 'required|max:255|min 3',
            //'cnpj' => 'required|min 14',
            //'telefone' => 'required',
            //'email' => 'required',
        //];
    //}

    use HasFactory;
}
