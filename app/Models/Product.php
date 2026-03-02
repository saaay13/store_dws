<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'category_id',
        'name',
        'description',
        'image_url',
        'state',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function lots()
    {
        return $this->hasMany(Lot::class);
    }

    public function detallesVenta()
    {
        return $this->hasMany(DetalleVenta::class);
    }
}
