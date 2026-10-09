<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Proprietario;

class Veiculo extends Model
{
    protected $fillable = [
        'model',
        'plate',
        'proprietario_id'
    ];

    public function proprietario(): BelongsTo {
        return $this->belongsTo(Proprietario::class);
    }
}
