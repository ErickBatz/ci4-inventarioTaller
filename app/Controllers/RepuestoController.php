<?php

namespace App\Controllers;

use App\Models\RepuestoModel;

class RepuestoController extends ApiCrudController
{
    protected $modelName = RepuestoModel::class;
    protected $resourceName = 'repuesto';
}
