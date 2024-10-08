<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class EntradaEtiqueta extends Model
{
    use SoftDeletes, HasFactory;

    protected $table = 'entrada_etiqueta';

    protected $fillable = [
        'entrada_id',
        'etiqueta_id',
        'data'
    ];

    public function entrada(): BelongsTo
    {
        return $this->belongsTo(Entrada::class);
    }

    public function etiqueta(): BelongsTo
    {
        return $this->belongsTo(Etiqueta::class);
    }
}
