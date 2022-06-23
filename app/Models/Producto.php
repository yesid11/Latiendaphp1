<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    //relacion M- 1 con categoria

    public function categoria(){
        return $this->belongsto(Categoria::class);
    }

    //relacion M- 1 con categoria

    public function marca(){
        return $this->belongsto(Marca::class);
    }
}
