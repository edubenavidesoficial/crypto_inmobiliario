<?php

namespace App\Models\BuyCart;

use App\Models\Cliente;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table = 'bcart_orders';
    protected $fillable = [
        'customer_id',
        'status',
        'max_price',
        'is_gift',
        'gift_message',
        'payment_method',
        'retailer_credentials',
        'webhooks',
        'client_notes',
    ];
    protected $casts = [
        'is_gift' => 'boolean',
    ];
    public function costumer(){
        return $this->hasMany(Cliente::class,'customer_id','id');
    }
    public function orderItem(){
        return $this->hasMany(OrderItem::class,'order_id','id');

    }

}
