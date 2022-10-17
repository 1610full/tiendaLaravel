<?php

namespace App\Http\Controllers;

use App\Models\Producto;
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
        $productos = Producto::all();
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

        Producto::create($request->all());

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
            'producto' => Producto::findorFail($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    // SE TIENE QUE CAMBIAR NOMBRE
    // DE VARIABLE DE producto a libro
    public function edit(Producto $libro)
    {
        return view('libros.libroEdit', compact('libro'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Producto $libro)
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

        $libro->nombre              = $request->nombre;
        $libro->autor               = $request->autor;
        $libro->editorial           = $request->editorial;
        $libro->ano_de_publicacion  = $request->ano_de_publicacion;
        $libro->mes_de_publicacion  = $request->mes_de_publicacion;
        $libro->tipo_de_publicacion = $request->tipo_de_publicacion;
        $libro->pais                = $request->pais;
        $libro->paginas             = $request->paginas;
        $libro->descripcion         = $request->descripcion;
        $libro->precio              = $request->precio;
        $libro->stock               = $request->stock;

        $libro->save();

        return redirect('/libros');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Producto $libro)
    {
        $libro->delete();
        return redirect('/libros');
    }
}
