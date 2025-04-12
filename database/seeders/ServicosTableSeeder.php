<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Servico;

class ServicosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Servico::create([
            'nome' => 'Registro de Imóveis',
            'descricao' => 'Serviços de registro de compra e venda, hipotecas, etc.',
        ]);

        Servico::create([
            'nome' => 'Registro Civil de Pessoas Naturais',
            'descricao' => 'Serviços de registro de nascimento, casamento, óbito, etc.',
        ]);

        // Adicione mais serviços de exemplo aqui
    }
}