<?php

namespace App\Models;

class RepuestoModel extends ApiCrudModel
{
    protected $table            = 'repuestos';
    protected $primaryKey       = 'id_repuesto';
    protected $allowedFields    = [
        'id_repuesto',
        'id_categoria',
        'codigo_barras',
        'nombre',
        'precio_costo',
        'precio_venta',
        'stock_actual',
        'stock_minimo',
        'estado'
    ];
}
