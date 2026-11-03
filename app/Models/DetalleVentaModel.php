<?php

namespace App\Models;

class DetalleVentaModel extends ApiCrudModel
{
    protected $table            = 'detalle_venta';
    protected $primaryKey       = 'id_detalle';
    protected $allowedFields    = [
        'id_detalle',
        'id_venta',
        'id_repuesto',
        'tipo',
        'descripcion',
        'cantidad',
        'precio_unitario',
        'subTotal'
    ];
}
