<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use eloquentFilter\QueryFilter\ModelFilters\Filterable;
class Category extends Model
{
    use HasFactory;
    use Filterable;
    private static $whiteListFilter = ['*'];
    protected $fillable = [
        'name',
        'image',
        'description'
    ];

    public function subCategorias(){
        return $this->hasMany(SubCategoria::class, 'categories_id','id');
    }
}
