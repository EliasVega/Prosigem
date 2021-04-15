<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'nombre'
    ];

    public function municipios()
    {
        return $this->hasMany(Municipio::class);
    }

    public function empresas()
    {
        return $this->hasMany(Empresa::class);
    }
}
