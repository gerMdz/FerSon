<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class Entrada extends Model
{
    use HasFactory;

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function etiquetas(): BelongsToMany
    {
        return $this->belongsToMany(Etiqueta::class)
            ->withPivot('data')
            ->withTimestamps()
            ;
    }

    public function image(): MorphOne
    {
        return $this->morphOne(Images::class, 'imageable');
    }

    public function comentarios(): MorphMany
    {
        return $this->morphMany(Comentario::class, 'comentarioable');
    }

}
