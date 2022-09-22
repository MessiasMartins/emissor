<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Prestador;

class PrestadorController extends Controller
{
    public function index(){
        $prestadores = Prestador::all();
        return view('prestadores.index', ['prestadores' => $prestadores]);
    }

    public function create(){
        return view('prestadores.create');
    }

    public function store(Request $request){

        //Validação de campos apenas no controller

        $request->validate(Prestador::rules());

        $prestador = new Prestador;

        $prestador->nome = $request->nome;
        $prestador->endereco = $request->endereco;
        $prestador->cnpj = $request->cnpj;
        $prestador->telefone = $request->telefone;
        $prestador->email = $request->email;

        $prestador->save();

        return redirect()->route('prestador.index');
    }

    public function show($id){

    }

    public function edit($id){

    }

    public function update($id){

    }

    public function destroy($id){

        Prestador::findOrFail($id) ->delete();

        return redirect()->route('prestador.index');
    }
}
