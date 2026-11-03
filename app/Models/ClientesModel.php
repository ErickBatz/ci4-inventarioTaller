<?php

namespace App\Models;

class ClientesModel extends ApiCrudModel
{
    protected $table            = 'clientes';
    protected $primaryKey       = 'id_cliente';
    protected $allowedFields    = [
        'id_cliente',
        'nombre',
        'nit',
        'correo_electronico',
        'direccion',
        'telefono'
    ];
}
