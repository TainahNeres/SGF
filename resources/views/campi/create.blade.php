@extends('layout.app')

@section('content')
<h2>Novo Campus</h2>

<form method="POST" action="{{ route('campi.store') }}">
    @csrf

    <label>Nome</label><br>
    <input type="text" name="nome" required><br><br>

    <label>Instituição</label><br>
    <select name="instituicao_id" required>
        @foreach($instituicoes as $instituicao)
            <option value="{{ $instituicao->id }}">
                {{ $instituicao->nome }}
            </option>
        @endforeach
    </select><br><br>

    <button type="submit">Salvar</button>
</form>
@endsection
