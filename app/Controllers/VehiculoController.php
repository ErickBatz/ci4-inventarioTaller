<?php

namespace App\Controllers;

use App\Models\VehiculoModel;

class VehiculoController extends ApiCrudController
{
    protected $modelName = VehiculoModel::class;
    protected $resourceName = 'vehiculo';
}
