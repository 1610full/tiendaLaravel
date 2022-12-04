<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Producto extends Model
{
    use HasFactory;
    use SoftDeletes;

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
