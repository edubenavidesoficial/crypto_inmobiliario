<?php

namespace App\Models\BuyCart;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CalculadoraImportacion extends Model
{
    use HasFactory;
    protected $table = 'bcart_calculadora_importaciones';
    protected $fillable = [
        'nombre',
        'valor',
    ];
}
