<?php

namespace App\Models;

use App\Models\Titol;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Autor extends Model
{
    public function titols(){
        return $this->hasMany(Titol::class);
    }
    
    use HasFactory;
}
