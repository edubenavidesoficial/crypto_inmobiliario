<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombres',
        'apellidos',
        'address_line1',
        'address_line2',
        'zip_code',
        'city',
        'state',
        'country',
        'phone_number',
        'instructions',
        'user_id',
        'identificacion_frontal',
        'identificacion_posterior',
    ];
    public function usuario()
    {
        return $this->hasMany(User::class, 'user_id', 'id');
    }
}
