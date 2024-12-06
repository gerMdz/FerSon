<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comentario extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'comentarios';
    protected $fillable = [
        'body',
        'comentarioable_id',
        'comentarioable_type',
    ];

    public function comentarioable(){
        return $this->morphTo();
    }
}
