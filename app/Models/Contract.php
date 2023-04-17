<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Contract extends Model
{
    use HasFactory;

    public function relCompanie(): BelongsToMany
    {
        return $this->belongsToMany( Company::class);
    }
    public function relAdministrator(): BelongsToMany
    {
        return $this->belongsToMany(Administrator::class);
    }

}


