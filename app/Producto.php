<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $fillable = ['codArt','producto','descripcion','foto','categoria_id'];

    public function categoria()
    {
        return $this->belongsTo('App\Categoria');
    }

}
