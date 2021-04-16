<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proceso extends Model
{
    use HasFactory;

    protected $fillable = [
        'sede_id',
        'nombre',
        'lider',
        'requisitos',
        'alcance',
        'obj_esp',
        'recursos',
        'salidas',
        'estrategias',
    ];

    public function sede(){
        return $this->belongsTo(Sede::class);
    }

    public function users()
    {
        return $this->hasMany(User::class);
    }
}
