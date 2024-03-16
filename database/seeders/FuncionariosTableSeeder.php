<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FuncionariosTableSeeder extends Seeder
{
    public function run()
    {
        // Verifique se existe um registro na tabela 'escalas' com o ID 1
        $escala = DB::table('escalas')->find(1);

        // Se existir, insira o funcionário associando-o à escala
        if ($escala) {
            DB::table('funcionarios')->insert([
                'nome' => 'Fulano de Tal',
                'cpf' => '123.456.789-00',
                'telefone' => '(00) 1234-5678',
                'endereco' => 'Rua Exemplo, 123',
                'matricula' => '0001',
                'numero_pis' => '12345678900',
                'setor' => 'TI',
                'horario_entrada' => '08:00',
                'horario_saida' => '18:00',
                'escala_id' => 1, // ID da escala existente na tabela 'escalas'
                'data_admissao' => '2022-01-01',
                'data_desligamento' => null,
                'contratacao' => 'CLT',
                'ferias' => 'Julho',
                'salario' => 3000.00,
                'bonificacao' => 500.00,
                'observacoes' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                'created_at' => now(),
                'updated_at' => now(),
                'data_ponto' => '2024-03-12',
                'ponto_entrada' => '2024-03-12 08:00:00',
                'ponto_saida' => '2024-03-12 18:00:00',
                'data_horas_extras' => '2024-03-12',
                'horas_extras' => 2,
            ]);
        } else {
            // Se a escala não existir, insira o funcionário sem associar a uma escala
            DB::table('funcionarios')->insert([
                'nome' => 'Fulano de Tal',
                'cpf' => '123.456.789-00',
                'telefone' => '(00) 1234-5678',
                'endereco' => 'Rua Exemplo, 123',
                'matricula' => '0001',
                'numero_pis' => '12345678900',
                'setor' => 'TI',
                'horario_entrada' => '08:00',
                'horario_saida' => '18:00',
                // Remova o 'escala_id' da inserção
                'data_admissao' => '2022-01-01',
                'data_desligamento' => null,
                'contratacao' => 'CLT',
                'ferias' => 'Julho',
                'salario' => 3000.00,
                'bonificacao' => 500.00,
                'observacoes' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                'created_at' => now(),
                'updated_at' => now(),
                'data_ponto' => '2024-03-12',
                'ponto_entrada' => '2024-03-12 08:00:00',
                'ponto_saida' => '2024-03-12 18:00:00',
                'data_horas_extras' => '2024-03-12',
                'horas_extras' => 2,
            ]);
        }
    }
}
