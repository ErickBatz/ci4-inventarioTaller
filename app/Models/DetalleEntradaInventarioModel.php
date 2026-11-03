<?php

namespace App\Models;

class DetalleEntradaInventarioModel extends ApiCrudModel
{
    protected $table            = 'detalle_entrada_inventario';
    protected $primaryKey       = 'id_detalle_entrada';
    protected $allowedFields    = [
        'id_detalle_entrada',
        'id_entrada',
        'id_repuesto',
        'cantidad',
        'costo_unitario'
    ];
}
