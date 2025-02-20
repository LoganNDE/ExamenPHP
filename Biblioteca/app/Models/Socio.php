<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Socio extends Model
{
    protected $table = 'socios';
    protected $primaryKey = 'id';

    public function libros(){
        return $this->belongsToMany(Libro::class, 'prestamos','libro_id','socio_id');
    }
}
