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

        $request->validate([
            'nome' => 'required|max:255|min:3',
            'endereco' => 'required|max:255|min:3',
            'cnpj' => 'required|min:14',
            'telefone' => 'required',
            'email' => 'required',
        ]);

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
