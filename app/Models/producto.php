<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = ['id'];

    /**
     * Get the autor that owns the producto.
     */
    public function autor()
    {
        return $this->belongsTo(Autor::class);
    }

    /**
     * The proveedors that sell this producto.
     */
    public function proveedors()
    {
        return $this->belongsToMany(Proveedor::class);
    }
}
