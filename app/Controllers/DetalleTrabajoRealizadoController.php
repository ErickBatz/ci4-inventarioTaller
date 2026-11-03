<?php

namespace App\Controllers;

use App\Models\DetalleTrabajoRealizadoModel;

class DetalleTrabajoRealizadoController extends ApiCrudController
{
    protected $modelName = DetalleTrabajoRealizadoModel::class;
    protected $resourceName = 'detalle de trabajo realizado';
}
