<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Curso extends Model
{
    use SoftDeletes, HasFactory;

    protected $fillable = [
        'name',
    ];

    public function sections(): HasMany
    {
        return $this->hasMany(Section::class);
    }

    public function getLessons(): Collection
    {
        return $this->hasManyThrough(Lesson::class, Section::class)->get();
    }

    public function etiquetas(): MorphToMany
    {
        return $this->morphToMany(Etiqueta::class, 'etiquetable');
    }

}
