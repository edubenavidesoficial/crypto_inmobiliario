<?php

namespace App\Models\BuyCart;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ManejoAduana extends Model
{
    use HasFactory;
    protected $table = 'bcart_manejos_aduanas';
    protected $fillable = [
        'valor_minimo',
        'valor_maximo',
        'precio',
    ];
}
