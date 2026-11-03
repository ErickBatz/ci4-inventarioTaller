<?php

namespace App\Models;

class ProveedoresModel extends ApiCrudModel
{
    protected $table            = 'proveedores';
    protected $primaryKey       = 'id_proveedor';
    protected $allowedFields    = [
        'id_proveedor',
        'nombre',
        'nit',
        'telefono',
        'correo',
        'direccion',
        'estado'
    ];
}
