<?php
namespace App\Http\Controllers;

use App\Models\Orcamento;
use App\Models\Instituicao;
use App\Models\Campus;
use App\Models\Setor;
use Illuminate\Http\Request;

class OrcamentoController extends Controller
{
    public function index()
    {
        $orcamentos = Orcamento::all();
        return view('orcamentos.index', compact('orcamentos'));
    }

    public function create()
    {
        return view('orcamentos.create', [
            'instituicoes' => Instituicao::all(),
            'campi' => Campus::all(),
            'setores' => Setor::all()
        ]);
    }

    public function store(Request $request)
    {
        Orcamento::create($request->all());
        return redirect()->route('orcamentos.index');
    }
}
