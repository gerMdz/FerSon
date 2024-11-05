<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Support\Str;

class Profiler extends Model
{
    use HasFactory, HasUuids;

    public $table = 'profilers';
    protected $keyType = 'string';
    public $incrementing = false;

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    protected $fillable = [
        'user_id',
        'job',
        'phone',
        'website',
        'address',
        'city',
        'country',
        'postal_code',
        'image',
    ];




    protected $guarded = [
        'id',
        'created_at',
        'updated_at',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    protected static function boot()
    {
        parent::boot();
        static::creating(static fn($model) => $model->id = (string) Str::uuid());

    }

    public function domicilios(): HasOne
    {
        return $this->hasOne(Domicilio::class);
    }

    public function image(): MorphOne
    {
        return $this->morphOne(Images::class, 'imageable');
    }
}
