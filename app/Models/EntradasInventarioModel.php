<?php

namespace App\Models;

class EntradasInventarioModel extends ApiCrudModel
{
    protected $table            = 'entradas_inventario';
    protected $primaryKey       = 'id_entrada';
    protected $allowedFields    = [
        'id_entrada',
        'id_proveedor',
        'fecha_entrada',
        'numero_documento',
        'observaciones'
    ];
}
