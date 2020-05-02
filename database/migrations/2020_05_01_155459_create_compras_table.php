<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComprasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compras', function (Blueprint $table) {
            $table->id();
            $table->date('dtpedido')->nullable();//Data do pedido
            $table->string('numpedido')->nullable();//Numero do pedido
            $table->date('dtempenho')->nullable();//Data do empenho
            $table->string('numempenho')->nullable();//Numero do empenho
            $table->decimal('empenhado')->nullable();//Valor empenhado
            $table->decimal('anulado')->nullable();//Valor anulado
            $table->decimal('liquidado')->nullable();//Valor liquidado
            $table->decimal('pago')->nullable();//Valor pago
            $table->string('numnotafiscal')->nullable();//Numero da nota fiscal
            $table->foreignId('executado_id')->constrained('executados');
            $table->timestamps();
        });
    }

    //PARA ADICONAR COLUNAS CRIE UMA NOVA MIGRATION, COM O COMANDO:
    //php artisan make:migration add_foreign_table_compras --table=compras 
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('compras');
    }
}
