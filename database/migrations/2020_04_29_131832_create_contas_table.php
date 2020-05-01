<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contas', function (Blueprint $table) {
            $table->id();
            $table->char('banco_atual',30)->nullable();
            $table->char('banco_antigo',30)->nullable();
            $table->char('cc_contabil_atual',30)->nullable();
            $table->char('apl_contabil_atual',30)->nullable();
            $table->char('cc_contabil_antigo',30)->nullable();
            $table->char('apl_contabil_antigo',30)->nullable();
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
        Schema::dropIfExists('contas');
    }
}
