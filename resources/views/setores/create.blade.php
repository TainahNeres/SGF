@extends('layout.app')

@section('content')
<h2>Novo Setor</h2>

<form method="POST" action="{{ route('setores.store') }}">
    @csrf

    <label>Nome</label><br>
    <input type="text" name="nome" required><br><br>

    <label>Campus (opcional)</label><br>
    <select name="campus_id">
        <option value="">Institucional</option>
        @foreach($campi as $campus)
            <option value="{{ $campus->id }}">
                {{ $campus->nome }}
            </option>
        @endforeach
    </select><br><br>

    <label>
        <input type="checkbox" name="padrao">
        Setor padrão
    </label><br><br>

    <button type="submit">Salvar</button>
</form>
@endsection
