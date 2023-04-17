<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Administrator extends Model
{
    use HasFactory;

    protected $visible = ['nome','cpf','contato'];

    public function relContract(): BelongsToMany
    {
        return $this->belongsToMany(Contract::class);
    }

}
