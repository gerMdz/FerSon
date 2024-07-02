<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Domicilio extends Model
{
    use SoftDeletes, HasFactory;

    protected $fillable = [
        'address',
        'ciudad',
        'pais',
        'profiler_id',
        'postal_code'
    ];

    public function profiler(): BelongsTo
    {
        return $this->belongsTo(Profiler::class);
    }
}
