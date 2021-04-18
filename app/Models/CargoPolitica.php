<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CargoPolitica extends Model
{
    use HasFactory;

    protected $fillable = [
        'cargo_id',
        'politica_id'
    ];
}
