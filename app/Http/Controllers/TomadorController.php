<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TomadorController extends Controller
{
    public function tomador(){
        return view('tomadores');
    }
}
