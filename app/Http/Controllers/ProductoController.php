<?php

namespace App\Http\Controllers;

use App\Models\producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos = producto::all();
        return view('libros.libroIndex', compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('libros.libroCreate');
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
            'nombre' => 'required|max:255',
            'autor' => 'required|max:255',
            'editorial' => 'required|max:255',
            'ano_de_publicacion' => 'required|max:255',
            'mes_de_publicacion' => 'max:255',
            'tipo_de_publicacion' => 'max:255',
            'pais' => 'max:255',
            'paginas' => 'required|integer|numeric|min:0',
            'descripcion' => 'max:65535',
            'precio' => 'required|numeric|between:0,999999.99',
            'stock' => 'required|integer|numeric|min:0',
        ]);

        producto::create($request->all());

        return redirect('/libros');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\producto  $producto
     * @return \Illuminate\Http\Response
     */
    // public function show(producto $producto) // NO JALA $PRODUCTO
    // {
    //     debug($producto);
    //     return view('libros.libroShow', compact('producto'));
    // }
    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('libros.libroShow', [
            'producto' => producto::findorFail($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function edit(producto $producto)
    {
        return view('libros.libroEdit', compact('producto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, producto $producto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function destroy(producto $producto)
    {
        //
    }
}
