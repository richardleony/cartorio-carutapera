@extends('layouts.app')

@section('title', 'Contato')

@section('content')
    <h1>Entre em Contato</h1>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('contato.enviar') }}" method="POST">
        @csrf

        <div>
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required>
        </div>

        <div>
            <label for="email">E-mail:</label>
            <input type="email" id="email" name="email" required>
        </div>

        <div>
            <label for="mensagem">Mensagem:</label>
            <textarea id="mensagem" name="mensagem" rows="5" required></textarea>
        </div>

        <button type="submit">Enviar Mensagem</button>
    </form>
@endsection