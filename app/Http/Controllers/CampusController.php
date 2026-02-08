<?php

namespace App\Http\Controllers;

use App\Models\Campus;
use App\Models\Instituicao;
use Illuminate\Http\Request;

class CampusController extends Controller
{
    public function index()
    {
        $campi = Campus::with('instituicao')->get();
        return view('campi.index', compact('campi'));
    }

    public function create()
    {
        $instituicoes = Instituicao::all();
        return view('campi.create', compact('instituicoes'));
    }

    public function store(Request $request)
    {
        Campus::create($request->all());
        return redirect()->route('campi.index');
    }
}
