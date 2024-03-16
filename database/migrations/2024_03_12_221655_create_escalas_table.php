<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEscalasTable extends Migration
{
    public function up()
    {
        Schema::create('escalas', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->text('descricao')->nullable();
            $table->dateTime('inicio')->nullable();
            $table->dateTime('fim')->nullable();
            $table->string('dias_semana')->nullable(); // Pode ser uma string com os dias ou um JSON
            $table->string('turno')->nullable();
            $table->integer('intervalo')->nullable(); // Intervalo em minutos
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('escalas');
    }
}

