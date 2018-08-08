<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $fillable = ['codArt','producto','descripcion','foto'];

    public function clientes()
    {
        return $this->hasMany('App\Cliente');
    }

}
