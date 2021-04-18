<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Programa extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'titulo',
        'introduccion',
    ];

    public function cargos()
    {
        return $this->belongsToMany(Cargo::class);
    }

    public function users()
    {
        return $this->hasManyThrough(User::class, Cargo::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
