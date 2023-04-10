<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contract extends Model
{
    use HasFactory;


    public function Empresas()
    {
        return $this->hasMany(company::class);
    }
    public function Administradores()
    {
        return $this->hasMany(administrator::class);
    }

}


