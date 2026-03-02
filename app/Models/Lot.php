<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lot extends Model
{
    protected $fillable = [
        'product_id',
        'proveedor',
        'precio_compra',
        'precio_venta',
        'stock_disponible',
        'fecha_ingreso',
        'fecha_compra',
        'codigo_lote',
        'state',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
