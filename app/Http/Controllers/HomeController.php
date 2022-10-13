<?php

namespace App\Http\Controllers;

use App\Models\Articulo;
use App\Models\Categoria;
use App\Models\Foto;
use App\Models\Marca;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $articulos = Articulo::orderBy('id', 'desc')->take(10)->get();
        $fotos = Foto::all();
        $categorias = Categoria::orderBy('id', 'desc')->get();
        return view('articulos.index', compact('fotos', 'categorias', 'articulos'));
    }

    public function tienda(){
        $articulos = Articulo::orderBy('id', 'desc')->paginate(9);
        return view('articulos.tienda', compact('articulos'));
    }

    public function show(Articulo $articulo){
        return view('articulos.show', compact('articulo'));
    }

    public function categoria(Categoria $categoria){
        $articulos = Articulo::where('categoria_id', $categoria->id)->latest('id')->paginate(9);
        return view('articulos.categoria', compact('articulos', 'categoria'));
    }

    public function marca(Marca $marca){
        $articulos = Articulo::where('marca_id', $marca->id)->latest('id')->paginate(9);
        return view('articulos.marca', compact('articulos', 'marca'));
    }
}
