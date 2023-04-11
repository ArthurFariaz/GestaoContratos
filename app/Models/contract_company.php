<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contract_company extends Model
{
    use HasFactory;
    public function Contratos()
    {
        return $this->hasOne(contract::class);
    }
    public function Empresas()
    {
        return $this->hasOne(company::class);
    }



}
