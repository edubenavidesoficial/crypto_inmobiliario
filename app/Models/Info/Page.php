<?php

namespace App\Models\Info;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory;
    protected $table = 'inf_pages';
    protected $fillable = [
        'namePage',
        'content',
        'state',
    ];
    protected $casts = [
        'state' => 'boolean',
    ];
}
