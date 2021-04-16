<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'asesor',
        'servicio',
        'inicio_servicio',
        'fin_servicio',
        'fecha_facturacion',
        'estado',
        'logo',
    ];

    public function departamento()
    {
        return $this->belongsTo(Departamento::class);
    }


    public function municipio()
    {
        return $this->belongsTo(Municipio::class);
    }

    public function servicio()
    {
        return $this->belongsTo(Servicio::class);
    }
}
