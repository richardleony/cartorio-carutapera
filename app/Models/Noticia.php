<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Noticia extends Model
{
    use HasFactory;

    protected $fillable = ['titulo', 'slug', 'conteudo', 'data_publicacao'];

    /**
     * Define um mutator para o atributo 'titulo' para gerar automaticamente o 'slug'.
     *
     * @param  string  $value
     * @return void
     */
    public function setTituloAttribute($value)
    {
        $this->attributes['titulo'] = $value;
        $this->attributes['slug'] = Str::slug($value);
    }
}