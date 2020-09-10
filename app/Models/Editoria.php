<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Editoria extends Model
{
    //
    protected $fillable = ['nome', 'slug', 'editoria_pai'];
}
