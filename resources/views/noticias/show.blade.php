@extends('layouts.app')

@section('title', $noticia->titulo)

@section('content')
    <a href="{{ route('noticias.index') }}">Voltar para Notícias</a>

    <h1>{{ $noticia->titulo }}</h1>

    @if ($noticia->data_publicacao)
        <p>Publicado em: {{ $noticia->data_publicacao->format('d/m/Y H:i:s') }}</p>
    @endif

    <div class="conteudo-noticia">
        {!! nl2br(e($noticia->conteudo)) !!}
    </div>
@endsection