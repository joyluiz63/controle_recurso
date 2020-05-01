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
            $table->date('solicitado')->nullable();
            $table->string('numoficio')->nullable();
            $table->date('resposta')->nullable();
            $table->char('documento', 20)->nullable();
            $table->char('tempo_concedido', 20)->nullable();
            $table->text('obsprorroga')->nullable();
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
