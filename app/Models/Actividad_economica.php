<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actividad_economica extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'codigo',
        'descripcion',
    ];

    public function sedes()
    {
        return $this->hasMany(Sede::class);
    }
}
