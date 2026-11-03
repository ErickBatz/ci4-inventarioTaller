<?php

namespace App\Controllers;

use App\Models\DetalleEntradaInventarioModel;

class DetalleEntradaInventarioController extends ApiCrudController
{
    protected $modelName = DetalleEntradaInventarioModel::class;
    protected $resourceName = 'detalle de entrada de inventario';
}
