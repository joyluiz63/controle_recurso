<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlanejadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('planejados', function (Blueprint $table) {
            $table->id();
            $table->string('descrplano');//Descrição do item planejado. Ex: Impressora laser Hp
            $table->decimal('qtdplano');//Quantidade do item planejado
            $table->decimal('valorun');// Valor unitário orçado
            $table->foreignId('recurso_id')->constrained('recursos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('planejados');
    }
}
