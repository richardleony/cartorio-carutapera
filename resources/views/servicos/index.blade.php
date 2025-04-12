@extends('layouts.app')

@section('title', 'Serviços')

@section('content')
    <h1>Serviços Disponíveis</h1>

    @if ($servicos->isEmpty())
        <p>Nenhum serviço cadastrado no momento.</p>
    @else
        <ul>
            @foreach ($servicos as $servico)
                <li>{{ $servico->nome }} - {{ $servico->descricao }}</li>
            @endforeach
        </ul>
    @endif
@endsection