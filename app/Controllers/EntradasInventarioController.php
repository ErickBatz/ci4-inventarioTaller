<?php

namespace App\Controllers;

use App\Models\EntradasInventarioModel;

class EntradasInventarioController extends ApiCrudController
{
    protected $modelName = EntradasInventarioModel::class;
    protected $resourceName = 'entrada de inventario';
}
