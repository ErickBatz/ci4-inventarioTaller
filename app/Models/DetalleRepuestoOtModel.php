<?php

namespace App\Models;

class DetalleRepuestoOtModel extends ApiCrudModel
{
    protected $table            = 'detalle_respuesto_ot';
    protected $primaryKey       = 'id_detalle_ot';
    protected $allowedFields    = [
        'id_detalle_ot',
        'id_orden_trabajo',
        'id_repuesto',
        'cantidad',
        'precio_unitario'
    ];
}
