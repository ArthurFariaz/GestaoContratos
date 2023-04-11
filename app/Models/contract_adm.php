<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contract_adm extends Model
{
    use HasFactory;
    public function Contratos()
    {
        return $this->hasOne(contract::class);
    }
    public function Adms()
    {
        return $this->hasOne(administrator::class);
    }

}
