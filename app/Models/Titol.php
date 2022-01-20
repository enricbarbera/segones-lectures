<?php

namespace App\Models;

use App\Models\Autor;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Titol extends Model
{
    public function autor() {
        return $this->belongsTo(Autor::class);
    }

    protected $fillable = ['title', 'autor_id', 'genre', 'language', 'edition_year'];

    use HasFactory;
}
