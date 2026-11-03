<?php

namespace App\Controllers;

use App\Models\MovimientoInventarioModel;

class MovimientoInventarioController extends ApiCrudController
{
    protected $modelName = MovimientoInventarioModel::class;
    protected $resourceName = 'movimiento de inventario';
}
