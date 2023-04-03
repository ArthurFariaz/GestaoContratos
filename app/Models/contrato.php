<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contrato extends Model
{
    use HasFactory;


    public function Empresas()
    {
        return $this->hasOne(companies::class);
    }
    public function Administradores()
    {
        return $this->hasMany(administrador::class);
    }

}


