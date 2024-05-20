<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    // Asignación masiva
    protected $fillable = [
        'name',
        'description'
    ];

    // Si queremos asignar todos menos algunos.
    protected $guarded = [
      'id',
      'created_at',
      'updated_at'
    ];
}
