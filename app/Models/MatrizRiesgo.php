<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MatrizRiesgo extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'area',
        'descripcion',
    ];

    public function cargos()
    {
        return $this->belongsToMany(Cargo::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
