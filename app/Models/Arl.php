<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Arl extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'nombre',
    ];

    public function sedes()
    {
        return $this->hasMany(Sede::class);
    }
}
