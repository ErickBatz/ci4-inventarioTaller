<?php

namespace App\Models;

class VehiculoModel extends ApiCrudModel
{
    protected $table            = 'vehiculo';
    protected $primaryKey       = 'id_vehiculo';
    protected $allowedFields    = [
        'id_vehiculo',
        'id_cliente',
        'color',
        'marca',
        'anio',
        'modelo',
        'placas'
    ];
}
