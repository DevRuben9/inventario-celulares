<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsuarioModel extends Model
{
    use HasFactory;

    public function rol(){
        return $this->belongsTo(RolModel::class, 'idRol');
    }
}
