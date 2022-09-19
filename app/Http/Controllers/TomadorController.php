<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Tomador;


class TomadorController extends Controller
{
    public function tomador(){
        return view('tomadores');
    }

    public function store(Request $request){

        $tomador = new tomador;

        $tomador->nome = $request->nome;
        $tomador->endereco = $request->endereco;
        $tomador->cnpj = $request->cnpj;
        $tomador->telefone = $request->telefone;
        $tomador->email = $request->email;

        $tomador->save();

        return redirect('/');
    }
}
