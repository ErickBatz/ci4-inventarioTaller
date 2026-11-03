<?php

namespace App\Controllers;

use App\Models\OrdenesTrabajoModel;

class OrdenesTrabajoController extends ApiCrudController
{
    protected $modelName = OrdenesTrabajoModel::class;
    protected $resourceName = 'orden de trabajo';
}
