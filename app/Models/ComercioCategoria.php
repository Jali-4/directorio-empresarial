<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ComercioCategoria extends Model
{
    protected $table = 'comercios_categorias';
    protected $primaryKey = 'id_comercio_categoria';
    public $timestamps = false;

    protected $fillable = ['id_comercio', 'id_categoria'];


    public function comercio()
    {
        return $this->belongsTo(Comercio::class, 'id_comercio');
    }

    public function categoria() {

        return $this->belongsTo(Categoria::class, 'id_categoria');
    }

}
