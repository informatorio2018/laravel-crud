<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
	
    protected $fillable = ['categoria'];


    public function productos()
    {
        return $this->hasMany('App\Producto');
    }


}
