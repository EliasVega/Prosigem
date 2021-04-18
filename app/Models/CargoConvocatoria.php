<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CargoConvocatoria extends Model
{
    use HasFactory;

    protected $fillable = [
        'cargo_id',
        'convocatoria_id',
    ];
}
