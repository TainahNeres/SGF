@extends('layout.app')

@section('content')
<h2>Setores</h2>

<a href="{{ route('setores.create') }}">Novo Setor</a>

<ul>
@foreach($setores as $setor)
    <li>
        {{ $setor->nome }} —
        {{ $setor->campus ? $setor->campus->nome : 'Institucional' }}
    </li>
@endforeach
</ul>
@endsection
