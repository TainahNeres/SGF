@extends('layout.app')

@section('content')
<h2>Nova Instituição</h2>

<form method="POST" action="{{ route('instituicoes.store') }}">
    @csrf

    <label>Nome</label><br>
    <input type="text" name="nome" required><br><br>

    <button type="submit">Salvar</button>
</form>
@endsection
