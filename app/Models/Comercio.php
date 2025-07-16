<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comercio extends Model
{
    protected $table = 'comercios';
    protected $primaryKey = 'id_comercio';
    public $timestamps = false;


    public function usuario()
    {
        //DUDA
        return $this->belongsTo(User::class, 'id_usuario', 'id');
    }

    public function imagenes()
    {
        return $this->hasMany(ImagenComercio::class, 'id_comercio');
    }

    public function productos()
    {
        return $this->hasMany(Producto::class, 'id_comercio');
    }

    public function categorias()
    {
        return $this->belongsToMany(Categoria::class, 'comercios_categorias', 'id_comercio', 'id_categoria');
    }
}
