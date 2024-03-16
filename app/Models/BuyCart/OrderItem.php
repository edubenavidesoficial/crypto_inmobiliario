<?php

namespace App\Models\BuyCart;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    use HasFactory;
    protected $table = 'bcart_order_items';
    protected $fillable = [
        'order_id',
        'name',
        'description',
        'price',
        'quantity',
        'code',
        'subtotal',
        'costo_envio',
        'total',
        'transporte',
        'garantia_retorno',
        'seguro',
        'manejo_aduana',
        'cif',
        'impuesto_aduana',
        'cargos_totales_importacion',
        'precio_importacion',
        'total',
    ];

    public function order()
    {
        return $this->hasOne(Order::class, 'id', 'order_id');
    }
}
