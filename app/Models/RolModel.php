<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RolModel extends Model
{
    use HasFactory;
    
    public function usuarios()
    {
        return $this->hasMany(UsuarioModel::class, 'idRol');
    }
}
