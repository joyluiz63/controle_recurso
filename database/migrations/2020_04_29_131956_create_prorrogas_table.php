<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProrrogasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prorrogas', function (Blueprint $table) {
            $table->id();
            $table->date('solicitado')->nullable();//Data em que foi solcitada a prorrogação
            $table->string('numoficio')->nullable();//Numero do oficio que solicita a prorrogação
            $table->date('resposta')->nullable();//Data da resposta a solcitação
            $table->char('documento', 20)->nullable();//Numero da informação/documento
            $table->char('concedido', 20)->nullable();//Dias, meses, ou ano concedido de prorrogação
            $table->string('obsprorroga')->nullable();//Observações
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
        Schema::dropIfExists('prorrogas');
    }
}
