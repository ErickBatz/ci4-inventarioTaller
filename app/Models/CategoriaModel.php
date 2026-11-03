<?php

namespace App\Models;

class CategoriaModel extends ApiCrudModel
{
    protected $table            = 'categoria';
    protected $primaryKey       = 'id_categoria';
    protected $allowedFields    = [
        'id_categoria',
        'nombre',
        'descripcion',
        'estado'
    ];
}
