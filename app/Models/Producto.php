<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table = 'productos';
    protected $primaryKey = 'id_producto';
    public $timestamps = false;


    public function comercio(){

        return $this->belongsTo(Comercio::class, 'id_comercio');
    }

    public function imagenes(){

        return $this->hasMany(ImagenProducto::class, 'id_producto');
    }
}
