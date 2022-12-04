<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Autor extends Model
{
    use HasFactory;

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = ['id'];

    /**
     * Get libros by this autor.
     */
    public function libros()
    {
        return $this->hasMany(Producto::class);
    }

    /**
     * Interact with the user's full name.
     *
     * @return  \Illuminate\Database\Eloquent\Casts\Attribute
     */
    protected function fullName(): Attribute
    {
        return Attribute::make(
            // get: fn ($value, $attributes) => new FullName(
            //     $attributes['apellido'],
            //     $attributes['nombre'],
            // ),
            get: fn ($value, $attributes) => $attributes['apellido'].', '.$attributes['nombre'],
        );
    }
}
