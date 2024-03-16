<?php

namespace App\Models\BuyCart;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PrecioPeso extends Model
{
    use HasFactory;
    protected $table = 'bcart_precios_pesos';
    protected $fillable = [
        'peso',
        'precio',
    ];
}
