<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CargoMatrizriesgo extends Model
{
    use HasFactory;

    protected $fillable = [
        'cargo_id',
        'matrizRiesgo_id'
    ];
}
