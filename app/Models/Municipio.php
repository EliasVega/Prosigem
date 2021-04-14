<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Municipio extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'departamento_id',
        'nombre',
    ];

    public function departamento()
    {
        return $this->belongsTo(Departamento::class);
    }
}
