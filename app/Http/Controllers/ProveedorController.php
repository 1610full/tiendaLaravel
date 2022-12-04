<?php

namespace App\Http\Controllers;

use App\Models\Proveedor;
use Illuminate\Http\Request;

class ProveedorController extends Controller
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
        $proveedores = Proveedor::all();
        return view('proveedores.proveedorIndex', compact('proveedores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('proveedores.proveedorCreate');
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
            'direccion' => 'required|max:65535',
            'telefono' => 'required|max:20',
            'email' => 'required|max:255',
            'descripcion' => 'max:65535',
        ]);

        Proveedor::create($request->all());

        return redirect('/proveedores');
    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $proveedor = Proveedor::with('productos.autor')->findorFail($id);
        return view('proveedores.proveedorShow', compact('proveedor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('proveedores.proveedorEdit', ['proveedor' => Proveedor::findorFail($id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required|max:255',
            'direccion' => 'required|max:65535',
            'telefono' => 'required|max:20',
            'email' => 'required|max:255',
            'descripcion' => 'max:65535',
        ]);

        $proveedor = Proveedor::findorFail($id);

        $proveedor->nombre      = $request->nombre;
        $proveedor->direccion   = $request->direccion;
        $proveedor->telefono    = $request->telefono;
        $proveedor->email       = $request->email;
        $proveedor->descripcion = $request->descripcion;

        $proveedor->save();

        return redirect('/proveedores');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $proveedor = Proveedor::findorFail($id);
        $proveedor->delete();
        return redirect('/proveedores');
    }
}
