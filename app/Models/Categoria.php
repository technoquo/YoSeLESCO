<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;

    protected $fillable = ['category', 'icono','banner', 'color', 'slug', 'status'];


    public function perfiles()
    {
        return $this->hasMany(Perfil::class);
    }
}
