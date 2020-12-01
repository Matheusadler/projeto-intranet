<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Promocao extends Model
{
    //
    protected $fillable = ['titulo', 'premio', 'imagem', 'regulamento', 'quantidade', 'pergunta', 'info', 'data_inicio', 'data_fim', 'data_sorteio'];
    protected $dates = ['data_inicio', 'data_fim', 'data_sorteio'];
}
