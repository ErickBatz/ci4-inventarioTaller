<?php

namespace App\Controllers;

use App\Models\RolesModel;

class RolesController extends ApiCrudController
{
    protected $modelName = RolesModel::class;
    protected $resourceName = 'rol';
}
