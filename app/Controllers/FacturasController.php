<?php

namespace App\Controllers;

use App\Models\FacturasModel;

class FacturasController extends ApiCrudController
{
    protected $modelName = FacturasModel::class;
    protected $resourceName = 'factura';
}
