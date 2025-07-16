<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table = 'categorias';
    protected $primaryKey = 'id_categoria';
    public $timestamps = false;

    public function comercios()
    {
        return $this->belongsToMany(Comercio::class, 'comercios_categorias', 'id_categoria', 'id_comercio');
    }

}
