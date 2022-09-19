<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Prestador;

class PrestadorController extends Controller
{
    public function prestador(){
        return view('prestadores');
    }

    public function store(Request $request){

        $prestador = new Prestador;

        $prestador->nome = $request->nome;
        $prestador->endereco = $request->endereco;
        $prestador->cnpj = $request->cnpj;
        $prestador->telefone = $request->telefone;
        $prestador->email = $request->email;

        $prestador->save();

        return redirect('/');
    }
}
