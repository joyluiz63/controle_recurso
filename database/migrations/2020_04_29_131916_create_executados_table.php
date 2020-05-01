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
            $table->string('descrexecutado');
            $table->decimal('qtdexecutado');
            $table->decimal('valorun');
            $table->date('dtpedido')->nullable();
            $table->string('numpedido')->nullable();
            $table->date('dtempenho')->nullable();
            $table->string('numempenho')->nullable();
            $table->decimal('empenhado')->nullable();
            $table->decimal('anulado')->nullable();
            $table->decimal('liquidado')->nullable();
            $table->decimal('pago')->nullable();
            $table->string('numnotafiscal')->nullable();
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
