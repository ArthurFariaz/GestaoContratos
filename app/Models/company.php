<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class company extends Model
{
    use HasFactory;

    protected $table = 'companies';
    protected $fillable = ['nome','cnpj','descricao','contrato_ativo','contratos_id'];

    public function Contrato()
    {
        return $this->hasMany(contract::class);
    }
}