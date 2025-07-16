<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImagenComercio extends Model
{
    protected $table = 'imagenes_comercios';
    protected $primaryKey = 'id_imagen_comercio';
    public $timestamps = false;


    public function comercio(){

        return $this->belongsTo(Comercio::class, 'id_comercio');

    }
}
