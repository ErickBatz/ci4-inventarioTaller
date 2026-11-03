<?php

namespace App\Models;

class OrdenesTrabajoModel extends ApiCrudModel
{
    protected $table            = 'ordenes_trabajo';
    protected $primaryKey       = 'id_orden_trabajo';
    protected $allowedFields    = [
        'id_orden_trabajo',
        'id_vehiculo',
        'id_cliente',
        'fecha_ingreso',
        'fecha_salida',
        'kilometraje',
        'diagnostico',
        'observaciones',
        'estado'
    ];
}
