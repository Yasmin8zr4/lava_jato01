<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Veiculo;

class Agendamento extends Model
{
    protected $fillable = [
        'date',
        'time',
        'veiculo_id',
    ];

    public function veiculo(): BelongsTo {
        return $this->belongsTo(Veiculo::class);
    }
}
