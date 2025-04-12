<?php

namespace App\Http\Controllers;

use App\Models\Noticia;
use Illuminate\Http\Request;

class NoticiaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $noticias = Noticia::orderBy('data_publicacao', 'desc')->get();
        return view('noticias.index', compact('noticias'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $slug)
    {
        $noticia = Noticia::where('slug', $slug)->firstOrFail();
        return view('noticias.show', compact('noticia'));
    }

    // Outros métodos do controller virão depois
}