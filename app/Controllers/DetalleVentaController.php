<?php

namespace App\Controllers;

use App\Models\DetalleVentaModel;

class DetalleVentaController extends ApiCrudController
{
    protected $modelName = DetalleVentaModel::class;
    protected $resourceName = 'detalle de venta';
}
