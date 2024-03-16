<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EscalasTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('escalas')->insert([
            'nome' => 'Escala 1',
            'descricao' => 'Descrição da escala 1',
            'inicio' => '2024-03-12 08:00:00',
            'fim' => '2024-03-12 18:00:00',
            'dias_semana' => 'Segunda, Quarta, Sexta',
            'turno' => 'Manhã',
            'intervalo' => 60, // Intervalo de 60 minutos
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        {
            DB::table('escalas')->insert([
                'nome' => 'Escala 2',
                'descricao' => 'Descrição da escala 2',
                'inicio' => '2024-03-13 08:00:00',
                'fim' => '2024-03-13 18:00:00',
                'dias_semana' => 'Terça, Quinta',
                'turno' => 'Tarde',
                'intervalo' => 30, // Intervalo de 30 minutos
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        
            DB::table('escalas')->insert([
                'nome' => 'Escala 3',
                'descricao' => 'Descrição da escala 3',
                'inicio' => '2024-03-14 08:00:00',
                'fim' => '2024-03-14 18:00:00',
                'dias_semana' => 'Segunda, Quarta, Sexta',
                'turno' => 'Manhã',
                'intervalo' => 60, // Intervalo de 60 minutos
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        
            DB::table('escalas')->insert([
                'nome' => 'Escala 4',
                'descricao' => 'Descrição da escala 4',
                'inicio' => '2024-03-15 08:00:00',
                'fim' => '2024-03-15 18:00:00',
                'dias_semana' => 'Terça, Quinta',
                'turno' => 'Tarde',
                'intervalo' => 30, // Intervalo de 30 minutos
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        
            DB::table('escalas')->insert([
                'nome' => 'Escala 5',
                'descricao' => 'Descrição da escala 5',
                'inicio' => '2024-03-16 08:00:00',
                'fim' => '2024-03-16 18:00:00',
                'dias_semana' => 'Segunda, Quarta, Sexta',
                'turno' => 'Manhã',
                'intervalo' => 60, // Intervalo de 60 minutos
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        
            DB::table('escalas')->insert([
                'nome' => 'Escala 6',
                'descricao' => 'Descrição da escala 6',
                'inicio' => '2024-03-17 08:00:00',
                'fim' => '2024-03-17 18:00:00',
                'dias_semana' => 'Terça, Quinta',
                'turno' => 'Tarde',
                'intervalo' => 30, // Intervalo de 30 minutos
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}

