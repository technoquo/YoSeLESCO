<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perfil extends Model
{
    use HasFactory;

    protected $table = 'perfiles';

    protected $fillable = [
          'full_name', 
          'occupation', 
          'imagen', 
          'cell', 
          'email', 
          'instagram',
          'facebook',
          'twitter',
          'youtube',
          'google',
          'linkedin',
          'telegram',
          'status',
          'username',
          'categoria_id'       
        
        ];

        public function categories()
        {
          return $this->belongsTo(Categoria::class);
        }

}
