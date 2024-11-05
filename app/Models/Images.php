<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Images extends Model
{
    use SoftDeletes, HasFactory, HasUuids;

    public $table = 'images';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    protected $guarded = [
        'id',
        'created_at',
        'updated_at',
    ];
    protected $fillable = [
        'imageable_id',
        'imageable_type',
        'url'
    ];

    public function imageable(): MorphTo
    {
        return $this->morphTo();
    }

    protected static function boot()
    {
        parent::boot();
        static::creating(static fn($model) => $model->id = (string)Str::uuid());

    }
}
