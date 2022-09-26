<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NotaController extends Controller
{
    public function index(){
        return view('notas.index');
    }

    public function create(){
        return view('notas.create');
    }

    public function store(Request $request){

        //Validação de Campos e mensagens personalizadas

        $request->validate(Nota::rules(), Nota::messages());

        $nota = new Nota;

        $nota->numero = $request->numero;
        $nota->tomador = $request->tomador;
        $nota->prestador = $request->prestador;
        $nota->valor = $request->valor;
        $nota->email = $request->email;
        $nota->email = $request->email;

        $nota->save();

        return redirect()->route('nota.index');
    }
}
