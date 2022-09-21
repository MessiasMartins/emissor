<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Tomador;


class TomadorController extends Controller
{

    public function index(){
        $tomadores = Tomador::all();
        return view('tomadores.index', ['tomadores' => $tomadores]);
    }

    public function create(){
        return view('tomadores.create');
    }

    public function store(Request $request){

        //Validação de campos apenas no controller

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

        return redirect('tomadores/index');
    }

    public function show($id){

    }

    public function edit($id){

    }

    public function update($id){

    }

    public function destroy($id){
        Tomador::findOrFail($id) ->delete();

        return redirect('tomadores/index');
    }

}
