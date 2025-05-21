<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

class Entrada extends Model
{
    use HasFactory;

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }


    public function image(): MorphOne
    {
        return $this->morphOne(Images::class, 'imageable');
    }

    public function comentarios(): MorphMany
    {
        return $this->morphMany(Comentario::class, 'comentarioable');
    }

    /**
     * ManyToMany Polymorphic
     */

    public function etiquetas(): MorphToMany
    {
        return $this->morphToMany(Etiqueta::class, 'etiquetable')
            ->withTimestamps();
    }
}
