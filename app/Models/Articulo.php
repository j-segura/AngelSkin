<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Articulo extends Model
{
    use HasFactory;

    protected $guarded = [];

    //relacion 1:n 

    public function categoria()
    {
        return $this->belongsTo('App\Models\Categoria');
    }

    public function Marca()
    {
        return $this->belongsTo('App\Models\Marca');
    }
}
