@extends('layout.app')

@section('content')
<h2>Novo Orçamento</h2>

<form method="POST" action="{{ route('orcamentos.store') }}">
    @csrf

    <label>Tipo</label><br>
    <select name="tipo" required>
        <option value="instituicao">Instituição</option>
        <option value="campus">Campus</option>
        <option value="setor">Setor</option>
    </select><br><br>

    <label>ID Referência</label><br>
    <input type="number" name="referencia_id" required><br><br>

    <label>Valor estimado</label><br>
    <input type="number" step="0.01" name="valor_estimado" required><br><br>

    <label>Valor disponível</label><br>
    <input type="number" step="0.01" name="valor_disponivel" required><br><br>

    <label>Ano</label><br>
    <input type="number" name="ano" required><br><br>

    <button type="submit">Salvar</button>
</form>
@endsection
