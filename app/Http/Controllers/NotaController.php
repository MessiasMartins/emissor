<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nota;
use App\Models\Tomador;
use App\Models\Prestador;

class NotaController extends Controller
{
    public function index()
    {
        $notas = Nota::all();

        return view('notas.index', ['notas' => $notas]);
    }

    public function create()
    {
        $tomadores = Tomador::all();
        $prestadores = Prestador::all();

        return view('notas.create', [
            'tomadores' => $tomadores,
            'prestadores' => $prestadores

        ]);
    }

    public function store(Request $request)
    {
        //Validação de Campos e mensagens personalizadas
        $request->validate(Nota::rules(), Nota::messages());

        //Caso dê certo salva no banco, caso contrário é feito o rollback nas tabelas
        //try{
            //DB::beginTransaction();

        $nota = new Nota;
        $nota->numero = $request->numero;
        $nota->tomador_id = $request->tomador_id;
        $nota->prestador_id = $request->prestador_id;
        $nota->valor = $request->valor;
        $nota->save();

        //DB::commit();
        return redirect()->route('nota.index')->with('msg', 'Nota cadastrada com sucesso!');
        //} catch(\Exception $ex){
            //DB::rollback();
        //}
    }
}
