@extends('layout.app')

@section('content')
<h2>Orçamentos</h2>

<a href="{{ route('orcamentos.create') }}">Novo Orçamento</a>

<ul>
@foreach($orcamentos as $orcamento)
    <li>
        Ano {{ $orcamento->ano }} —
        R$ {{ number_format($orcamento->valor_disponivel, 2, ',', '.') }}
    </li>
@endforeach
</ul>
@endsection
