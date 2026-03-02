<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    protected $fillable = [
        'seller_id',
        'client_id',
        'fecha',
        'total',
        'Direccion_entrega',
        'metodo_pago',
        'state_sale',
        'state_payment',
        'state',
    ];

    public function seller()
    {
        return $this->belongsTo(Seller::class);
    }

    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    public function detalles()
    {
        return $this->hasMany(DetalleVenta::class);
    }
}
