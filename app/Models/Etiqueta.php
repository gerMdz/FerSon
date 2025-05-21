<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Etiqueta extends Model
{
    use SoftDeletes, HasFactory;

    protected $fillable = [
        'name',
    ];

    public function entradas(): MorphToMany
    {
        return $this->morphedByMany(Entrada::class, 'etiquetable');
    }

    public function cursos(): MorphToMany
    {
        return $this->morphedByMany(Curso::class, 'etiquetable');
    }


}
