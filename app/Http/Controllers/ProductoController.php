<?php

namespace App\Http\Controllers;

use App\Models\Autor;
use App\Models\Producto;
use App\Models\Proveedor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductoController extends Controller
{
    /**
     * Instantiate a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index','show']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $productos = Producto::all();
        $productos = Producto::with('autor')->get();
        return view('libros.libroIndex', compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $autores = Autor::all();
        $proveedores = Proveedor::all();
        return view('libros.libroCreate', compact('autores', 'proveedores'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->proveedor);

        $request->validate([
            'nombre' => 'required|max:255',
            'autor_id' => 'required|integer|numeric|min:0',
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

        if ($request->file('imagen')->isValid()) {
            $path = $request->file('imagen')->store('imagenes');

            $request->merge(['ruta_imagen' => $path]);
        }

        $producto = Producto::create($request->all());

        $producto->proveedors()->attach($request->proveedor);

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
        $producto = Producto::findorFail($id);

        $proveedores = $producto->proveedors;

        return view('libros.libroShow', compact('producto', 'proveedores'));
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
        $autores = Autor::all();
        $autor_actual = $libro->autor;
        $proveedores = Proveedor::all();
        return view('libros.libroEdit', compact('libro', 'autores', 'autor_actual', 'proveedores'));
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
            'autor_id' => 'required|integer|numeric|min:0',
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

        if (!$request->hasFile('imagen')) {
            // no se hace nada
        } else if ($request->file('imagen')->isValid()) {
            $path = $request->file('imagen')->store('imagenes');

            $request->merge(['ruta_imagen' => $path]);

            $libro->ruta_imagen = $request->ruta_imagen;
        }

        $libro->nombre              = $request->nombre;
        $libro->autor_id            = $request->autor_id;
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

        $libro->proveedors()->detach();
        $libro->proveedors()->attach($request->proveedor);

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
