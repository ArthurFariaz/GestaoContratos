<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Company extends Model
{
    use HasFactory;

    protected $table = 'companies';
    protected $fillable = ['nome','cnpj','descricao','contrato_ativo','contratos_id'];

    public function relContract(): BelongsToMany{
        return $this->belongsToMany(Contract::class);
    }
}
