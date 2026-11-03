<?php

namespace App\Controllers;

use App\Models\ClientesModel;

class ClientesController extends ApiCrudController
{
    protected $modelName = ClientesModel::class;
    protected $resourceName = 'cliente';
}
