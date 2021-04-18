<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CargoPrograma extends Model
{
    use HasFactory;

    protected $fillable = [
        'cargo_id',
        'programa_id'
    ];
}
