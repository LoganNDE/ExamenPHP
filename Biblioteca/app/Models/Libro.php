<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    protected $table = 'libros';
    protected $primaryKey = 'id';
    protected $fillable = ['titulo', 'autor', 'editorial', 'caratula'];

    public function socios(){
        return $this->belongsToMany(Socio::class, 'prestamos','libro_id','socio_id');
    }
}
