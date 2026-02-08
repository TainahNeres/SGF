<?php

namespace App\Http\Controllers;

use App\Models\Setor;
use App\Models\Campus;
use Illuminate\Http\Request;

class SetorController extends Controller
{
    public function index()
    {
        $setores = Setor::with('campus')->get();
        return view('setores.index', compact('setores'));
    }

    public function create()
    {
        $campi = Campus::all();
        return view('setores.create', compact('campi'));
    }

    public function store(Request $request)
    {
        Setor::create([
            'nome' => $request->nome,
            'campus_id' => $request->campus_id,
            'padrao' => $request->has('padrao')
        ]);

        return redirect()->route('setores.index');
    }
}
