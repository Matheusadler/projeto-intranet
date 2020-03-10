<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNoticiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('noticias', function (Blueprint $table) {
            $table->unsignedBigInteger('id');
            $table->string('chapeu', 255);
            $table->string('autor', 255);
            $table->string('titulo_interno', 255);
            $table->string('titulo_capa', 255);
            $table->string('subtitulo', 255);
            $table->text('texto');
            $table->dateTime('data_inicial');
            $table->dateTime('data_final');
            $table->unsignedBigInteger('banco_imagem_id');
            $table->unsignedBigInteger('editoria_id');
            $table->primary('id');
            $table->index('banco_imagem_id', 'fk_tb_noticia_tb_banco_imagem1_idx');
            $table->index('editoria_id', 'fk_tb_noticia_tb_editoria1_idx');

            $table->charset = 'latin1';
            $table->collation = 'latin1_swedish_ci';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('noticias');
    }
}
