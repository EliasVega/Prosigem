<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CargoDocumento extends Model
{
    use HasFactory;

    protected $fillable = [
        'cargo_id',
        'documento_id'
    ];
}
