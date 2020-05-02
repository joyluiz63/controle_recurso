<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eventos', function (Blueprint $table) {
            $table->id();
            $table->date('dtevento')->nullable();//Data em que aconteceu o fato relatado
            $table->string('descrdocumento')->nullable();//Se houver, qual documento:Licitação, pregão, etc
            $table->string('numdocumento')->nullable();//Numero do documento informado acima
            $table->string('obsevento')->nullable();//Descrição do evento
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
        Schema::dropIfExists('eventos');
    }
}
