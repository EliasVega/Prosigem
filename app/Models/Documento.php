<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Documento extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre'
    ];

    public function cargos()
    {
        return $this->belongsToMany(Cargo::class);
    }

    public function cargoDocumentos(){
        return $this->belongsToMany(CargoDocumento::class);
    }
}
