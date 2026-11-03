<?php

namespace App\Controllers;

use App\Models\DetalleRepuestoOtModel;

class DetalleRepuestoOtController extends ApiCrudController
{
    protected $modelName = DetalleRepuestoOtModel::class;
    protected $resourceName = 'detalle de repuesto de orden de trabajo';
}
