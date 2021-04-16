<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cargo extends Model
{
    use HasFactory;

    protected $fillable = [
        'empresa_id',
        'sede_id',
        'proceso_id',
        'nombre',
        'jefe',
        'subcargos',
        'rol',
        'func_cargo',
        'resp_cargo',
        'resp_sgi',
        'autoridad',
        'rend_ctas',
        'educacion',
        'formacion',
        'experiencia',
        'habilidades',
    ];

    public function empresa(){
        return $this->belongsTo(Proceso::class);
    }

    public function sede(){
        return $this->belongsTo(Proceso::class);
    }

    public function proceso(){
        return $this->belongsTo(Proceso::class);
    }

    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function documentos()
    {
        $this->BelongsToMany(Documento::class);
    }

    public function cargoDocumentos(){
        return $this->belongsToMany(CargoDocumento::class);
    }

    public function inspeccions(){
        return $this->hasMany(Inspeccion::class);
    }
}
