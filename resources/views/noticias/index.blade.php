@extends('layouts.app')

@section('title', 'Últimas Notícias')

@section('content')
    <h1>Últimas Notícias do Cartório</h1>

    @if ($noticias->isEmpty())
        <p>Nenhuma notícia publicada no momento.</p>
    @else
        <ul>
            @foreach ($noticias as $noticia)
                <li>
                    <a href="{{ route('noticias.show', $noticia->slug) }}">{{ $noticia->titulo }}</a>
                    <small>Publicado em: {{ $noticia->data_publicacao ? $noticia->data_publicacao->format('d/m/Y') : 'Data não informada' }}</small>
                </li>
            @endforeach
        </ul>
    @endif
@endsection