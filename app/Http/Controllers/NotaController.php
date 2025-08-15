<?php

namespace App\Http\Controllers;

use App\Models\Nota;

class NotaController extends Controller
{
    public function list()
    {        
        $notas = Nota::orderBy('tanggal', 'desc')->get();

        return view('nota.list', compact('notas'), ['pageTitle' => 'List Nota']);
    }

}
