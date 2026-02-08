@extends('layout.app')

@section('content')
<h2>Campi</h2>

<a href="{{ route('campi.create') }}">Novo Campus</a>

<ul>
@foreach($campi as $campus)
    <li>
        {{ $campus->nome }} — 
        {{ $campus->instituicao->nome }}
    </li>
@endforeach
</ul>
@endsection
