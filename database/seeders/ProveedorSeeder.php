<?php

namespace Database\Seeders;

use App\Models\Proveedor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProveedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Proveedor::create([
            'nombre' => 'Luneta',
            'direccion' => 'Luna #43, GDL',
            'telefono' => '123456',
            'email' => 'luneta@proveedor.com',
            'descripcion' => 'vendedor de libros de ficcion',
        ]);
    }
}
