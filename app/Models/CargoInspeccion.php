<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CargoInspeccion extends Model
{
    use HasFactory;

    protected $fillable = [
        'cargo_id',
        'inspeccion_id'
    ];
}
