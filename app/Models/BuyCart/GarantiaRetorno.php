<?php

namespace App\Models\BuyCart;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GarantiaRetorno extends Model
{
    use HasFactory;
    protected $table = 'bcart_garantias_retornos';
    protected $fillable = [
        'valor_minimo',
        'valor_maximo',
        'precio_garantia',
    ];
}
