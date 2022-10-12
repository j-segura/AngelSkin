<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Foto;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $fotos = Foto::all();
        $categorias = Categoria::orderBy('id', 'desc')->get();
        return view('articulos.index', compact('fotos', 'categorias'));
    }
}
