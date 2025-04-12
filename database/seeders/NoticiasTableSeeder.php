<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Noticia;
use Illuminate\Support\Str;
use Carbon\Carbon;

class NoticiasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $noticia1Titulo = 'Novo Horário de Atendimento';
        Noticia::create([
            'titulo' => $noticia1Titulo,
            'slug' => Str::slug($noticia1Titulo),
            'conteudo' => 'Informamos aos nossos clientes que a partir da próxima semana, nosso horário de atendimento será das 9h às 17h.',
            'data_publicacao' => Carbon::now()->subDays(5),
        ]);

        $noticia2Titulo = 'Atenção: Documentos Necessários para Casamento';
        Noticia::create([
            'titulo' => $noticia2Titulo,
            'slug' => Str::slug($noticia2Titulo),
            'conteudo' => 'Para dar entrada no processo de casamento, é necessário apresentar os seguintes documentos...',
            'data_publicacao' => Carbon::now()->subDays(10),
        ]);

        // Adicione mais notícias de exemplo aqui
    }
}