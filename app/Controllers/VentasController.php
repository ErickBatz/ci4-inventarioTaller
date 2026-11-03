<?php

namespace App\Controllers;

use App\Models\VentasModel;

class VentasController extends ApiCrudController
{
    protected $modelName = VentasModel::class;
    protected $resourceName = 'venta';
}
