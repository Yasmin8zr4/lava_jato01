<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Veiculo;

class Proprietario extends Model
{
    protected $fillable = [
        'name',
        'cpf',
        'phone'
    ];
    
    public function veiculos(): HasMany {
        return $this->hasMany(Veiculo::class);
    }
}
