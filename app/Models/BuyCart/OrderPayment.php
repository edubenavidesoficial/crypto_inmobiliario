<?php

namespace App\Models\BuyCart;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderPayment extends Model
{
    use HasFactory;
    protected $table = 'bcart_order_payments';
    protected $fillable = [
        'order_id',
        'subtotal',
        'shipment',
        'discount',
        'tax',
        'tax_percentage',
        'total',
        'status',
        'voucher',
    ];
    protected $casts = [
        'is_gift' => 'boolean',
    ];
    public function order(){
        return $this->hasOne(Order::class,'id','order_id')->with('orderItem');
    }
}
