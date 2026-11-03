<?php

namespace App\Models;

class MovimientoInventarioModel extends ApiCrudModel
{
    protected $table            = 'movimiento_inventario';
    protected $primaryKey       = 'id_movimiento';
    protected $allowedFields    = [
        'id_movimiento',
        'id_repuesto',
        'id_usuario',
        'tipo_movimiento',
        'cantidad',
        'costo_unitario',
        'fecha',
        'referencias',
        'observaciones'
    ];
}
