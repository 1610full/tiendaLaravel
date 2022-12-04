<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Autor;
use App\Models\Producto;
use App\Models\Proveedor;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // $this->call([
        //     AutorSeeder::class,
        //     ProveedorSeeder::class,
        // ]);

        Producto::factory()
                ->for(Autor::factory())
                ->has(Proveedor::factory()->count(3))
                ->create();
    }
}
