<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class administrator extends Model
{
    use HasFactory;
    protected $visible = ['nome','cpf','contato'];
    public function Contrato()
    {
        return $this->hasMany(contract::class);
    }
}
