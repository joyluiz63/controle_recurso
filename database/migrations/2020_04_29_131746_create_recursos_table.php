<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecursosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recursos', function (Blueprint $table) {
            $table->id();
            $table->string('descrrecurso');//Informar se o recurso é proveniente emenda, portaria, convênio, etc
            $table->char('numprocesso', 30)->nullable();//Informar o numero do processo, portaria, proposta, etc
            $table->char('origem', 30); //Select: Federal, Estadual, Muncipal, Outros
            $table->char('objeto', 30); //Informar se é custeio, obras, material permanente
            $table->string('destino')->nullable();//Para onde se destina o objeto
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
        Schema::dropIfExists('recursos');
    }
}
