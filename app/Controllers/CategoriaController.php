<?php

namespace App\Controllers;

use App\Models\CategoriaModel;

class CategoriaController extends ApiCrudController
{
    protected $modelName = CategoriaModel::class;
    protected $resourceName = 'categoria';
}
