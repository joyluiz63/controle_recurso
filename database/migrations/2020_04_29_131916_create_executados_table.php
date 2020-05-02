<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExecutadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('executados', function (Blueprint $table) {
            $table->id();
            $table->string('descrexecutado');//Descrição do item adquirido. Ex: Impressora laser Hp
            $table->decimal('qtdexecutado');//Quantidade do item adquirido
            $table->decimal('valorun');// Valor unitário empenhado
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
        Schema::dropIfExists('executados');
    }
}
