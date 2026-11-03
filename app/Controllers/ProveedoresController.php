<?php

namespace App\Controllers;

use App\Models\ProveedoresModel;

class ProveedoresController extends ApiCrudController
{
    protected $modelName = ProveedoresModel::class;
    protected $resourceName = 'proveedor';
}
