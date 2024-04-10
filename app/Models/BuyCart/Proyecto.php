<?php

namespace App\Models\BuyCart;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
    use HasFactory;
    protected $table = 'bcart_proyectos';
    protected $fillable = [
        'nombre',
        'descripcion',
        'imagen',
        'precio',
        'category',
        'categories_id',
    ];
    public function categoria()
    {
        return $this->hasMany(Category::class, 'id', 'categories_id');
    }
}
