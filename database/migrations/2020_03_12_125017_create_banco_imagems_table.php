<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBancoImagemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('banco_imagems', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('legenda', 255)->nullable();
            $table->string('titulo', 255)->nullable();
            $table->string('caminho', 255);

            $table->charset = 'latin1';
            $table->collation = 'latin1_swedish_ci';
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
        Schema::dropIfExists('banco_imagems');
    }
}
