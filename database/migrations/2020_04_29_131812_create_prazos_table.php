<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrazosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prazos', function (Blueprint $table) {
            $table->id();
            $table->decimal('valor');//Valor recebido
            $table->date('recebido');//Data do recebimento do recurso
            $table->date('inicial')->nullable();//Data do prazo de uso normal
            $table->date('prorrogado')->nullable();//Data de uso concedida por prorrogação
            // $table->foreignId('recurso_id')->constrained('recursos_table');
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
        Schema::dropIfExists('prazos');
    }
}
