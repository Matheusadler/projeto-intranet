<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Noticia extends Model
{
    //
    protected $fillable = ['chapeu', 'setor', 'titulo_interno', 'titulo_capa', 'subtitulo', 'texto', 'data_inicial', 'data_final', 'banco_imagem_id', 'editoria_id'];
    protected $dates = ['data_inicial', 'data_final'];


    public function editoria()
    {
        return $this->belongsTo(Editoria::class);
    }

    public function banco_imagem()
    {
        return $this->belongsTo(BancoImagem::class);
    }
}
