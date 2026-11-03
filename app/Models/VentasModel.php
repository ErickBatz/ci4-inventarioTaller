<?php

namespace App\Models;

class VentasModel extends ApiCrudModel
{
    protected $table            = 'venta';
    protected $primaryKey       = 'id_venta';
    protected $allowedFields    = [
        'id_venta',
        'id_orden_trabajo',
        'id_cliente',
        'id_usuario',
        'fecha_venta',
        'subTotal',
        'descuento',
        'impuesto',
        'total',
        'estado'
    ];
}
