@extends('layout.app')

@section('content')
<h2>Instituições</h2>

<a href="{{ route('instituicoes.create') }}">Nova Instituição</a>

<ul>
@foreach($instituicoes as $instituicao)
    <li>{{ $instituicao->nome }}</li>
@endforeach
</ul>
@endsection
