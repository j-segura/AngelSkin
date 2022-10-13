<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Foto;

class FotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fotos = Foto::orderBy('id', 'desc')->get();
        return view('admin.fotos.index', compact('fotos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.fotos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|max:2048'
        ]);

        $foto = $request->all();

        if ($image = $request->file('image')) {
            $rutaGuardarImg = 'img/gallery/';
            $imageFoto = "foto" . date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($rutaGuardarImg, $imageFoto);
            $foto['image'] = "$imageFoto";
        }

        $foto = Foto::create($foto);

        return redirect()->route('admin.fotos.edit', compact('foto'))->with('info', 'La imagen se agrego con exito!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Foto $foto)
    {
        return view('admin.fotos.show', compact('foto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Foto $foto)
    {
        return view('admin.fotos.edit', compact('foto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Foto $foto)
    {
        $request->validate([
            'image' => 'required|image|max:2048'
        ]);

        $fot = $request->all();

        if ($image = $request->file('image')) {
            $rutaGuardarImg = 'img/gallery/';
            $imageFoto = "foto" . date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($rutaGuardarImg, $imageFoto);
            $fot['image'] = "$imageFoto";
        }else{
            unset($foto['image']);
        }

        $foto->update($fot);
        return redirect()->route('admin.fotos.edit', compact('foto'))->with('info', 'La imagen se actualizo con exito!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Foto $foto)
    {
        $foto->delete();
        return redirect()->route('admin.fotos.index')->with('info', 'La foto se elmino con exito!');
    }
}
