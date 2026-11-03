<?php

namespace App\Models;

class FacturasModel extends ApiCrudModel
{
    protected $table            = 'facturas_fel';
    protected $primaryKey       = 'id_factura';
    protected $allowedFields    = [
        'id_factura',
        'id_venta',
        'seriea',
        'numero',
        'estado'
    ];
}
