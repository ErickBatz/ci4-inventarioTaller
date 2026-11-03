<?php

namespace App\Models;

class DetalleTrabajoRealizadoModel extends ApiCrudModel
{
    protected $table            = 'detalle_trabajo_realizado';
    protected $primaryKey       = 'id_detalleTrabajo';
    protected $allowedFields    = [
        'id_detalleTrabajo',
        'id_orden_trabajo',
        'descripcion',
        'precio',
        'id_usuario'
    ];
}
