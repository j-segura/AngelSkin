<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Articulo;
use Illuminate\Http\Request;
use App\Models\Categoria;
use App\Models\Marca;

class ArticuloController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articulos = Articulo::orderBy('id', 'desc')->get();
        return view('admin.articulos.index', compact('articulos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = Categoria::pluck('name', 'id')->toArray();
        $marcas = Marca::pluck('name', 'id')->toArray();
        return view('admin.articulos.create', compact('categorias', 'marcas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'name' => 'required',
                'slug' => 'required|unique:articulos',
                'descripcion' => 'required',
                'image' => 'required|image|max:2048',
                'precio' => 'required',
                'categoria_id' => 'required',
                'marca_id' => 'required',
            ]
        );

        $articulo = $request->all();

        if ($image = $request->file('image')) {
            $rutaGuardarImg = 'img/articulos/';
            $imageArticulo = "articulo" . date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($rutaGuardarImg, $imageArticulo);
            $articulo['image'] = "$imageArticulo";
        }

        $articulo = Articulo::create($articulo);

        return redirect()->route('admin.articulos.edit', compact('articulo'))->with('info', 'El articulo se agrego con exito!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Articulo $articulo)
    {
        return view('admin.articulos.show', compact('articulo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Articulo $articulo)
    {
        $categorias = Categoria::pluck('name', 'id')->toArray();
        $marcas = Marca::pluck('name', 'id')->toArray();
        return view('admin.articulos.edit', compact('articulo', 'categorias', 'marcas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Articulo $articulo)
    {
        $request->validate(
            [
                'name' => 'required',
                'slug' => "required|unique:articulos,slug,$articulo->id",
                'descripcion' => 'required',
                'image' => 'image|max:2048',
                'precio' => 'required',
                'categoria_id' => 'required',
                'marca_id' => 'required',
            ]
        );

        $arti = $request->all();

        if ($image = $request->file('image')) {
            $rutaGuardarImg = 'img/articulos/';
            $imageArticulo = "articulo" . date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($rutaGuardarImg, $imageArticulo);
            $arti['image'] = "$imageArticulo";
        }else{
            unset($arti['image']);
        }

        $articulo->update($arti);

        return redirect()->route('admin.articulos.edit', compact('articulo'))->with('info', 'El articulo se actualizo con exito!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Articulo $articulo)
    {
        $articulo->delete();
        return redirect()->route('admin.articulos.index')->with('info', 'El articulo se elimino con exito');
    }
}
