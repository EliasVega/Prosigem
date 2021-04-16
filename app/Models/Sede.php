<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sede extends Model
{
    use HasFactory;

    protected $fillable = [
        'departamento_id',
        'municipio_id',
        'empresa_id',
        'actEco_id',
        'arl_id',
        'nombre',
        'nit',
        'direccion',
        'telefono',
        'celular',
        'nivel_riesgo',
        'gerente',
    ];

    public function departamento()
    {
        return $this->belongsTo(Departamento::class);
    }

    public function municipio()
    {
        return $this->belongsTo(Municipio::class);
    }

    public function empresa()
    {
        return $this->belongsTo(Empresa::class);
    }

    public function actEco()
    {
        return $this->belongsTo(ActividadEconomica::class);
    }

    public function arl()
    {
        return $this->belongsTo(Arl::class);
    }

    public function procesos(){
        return $this->hasMany(Proceso::class);
    }

    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function convocatorias()
    {
        return $this->hasMany(Convocatoria::class);
    }
}
