<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'nombre'
    ];

    public function empresas()
    {
        return $this->hasMany(Empresa::class);
    }
}
