<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    use HasFactory;

    protected $guarded = [];

    //relacion 1:n

    public function articulos() {
        return $this->hasMany('App\Models\Articulo');
    }
}
