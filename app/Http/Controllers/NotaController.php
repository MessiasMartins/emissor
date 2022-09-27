<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nota;

class NotaController extends Controller
{
    public function index()
    {
        $notas = Nota::all();

        return view('notas.index', ['notas' => $notas]);
    }

    public function create()
    {
        return view('notas.create');
    }

    public function store(Request $request)
    {
        //Validação de Campos e mensagens personalizadas
        $request->validate(Nota::rules(), Nota::messages());
        $nota = new Nota;
        $nota->numero = $request->numero;
        $nota->tomador = $request->tomador;
        $nota->prestador = $request->prestador;
        $nota->valor = $request->valor;
        $nota->email_prestador = $request->email_prestador;
        $nota->email_prestador = $request->email_prestador;
        $nota->save();

        return redirect()->route('notas.index')->with('msg', 'Nota cadastrada com sucesso!');
    }
}
