<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFuncionariosTable extends Migration
{
    public function up()
    {
        Schema::create('funcionarios', function (Blueprint $table) {
            $table->id('id_funcionario');
            $table->string('nome');
            $table->string('cpf', 14)->unique();
            $table->string('telefone')->nullable();
            $table->string('endereco')->nullable();
            $table->string('matricula')->nullable();
            $table->string('numero_pis')->nullable();
            $table->string('setor')->nullable();
            $table->string('horario_entrada')->nullable();
            $table->string('horario_saida')->nullable();
            $table->foreignId('escala_id')->nullable()->constrained('escalas');
            $table->date('data_admissao')->nullable();
            $table->date('data_desligamento')->nullable();
            $table->string('contratacao')->nullable();
            $table->string('ferias')->nullable();
            $table->decimal('salario', 10, 2)->nullable();
            $table->decimal('bonificacao', 10, 2)->nullable();
            $table->text('observacoes')->nullable();
            $table->timestamps();

            // Pontos
            $table->date('data_ponto')->nullable();
            $table->dateTime('ponto_entrada')->nullable();
            $table->dateTime('ponto_saida')->nullable();

            // Horas extras
            $table->date('data_horas_extras')->nullable();
            $table->integer('horas_extras')->default(0);
        });
    }

    public function down()
    {
        Schema::dropIfExists('funcionarios');
    }
}

