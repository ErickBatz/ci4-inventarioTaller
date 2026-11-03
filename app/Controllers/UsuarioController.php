<?php

namespace App\Controllers;

use App\Models\UsuariosModel;

class UsuarioController extends ApiCrudController
{
    protected $modelName = UsuariosModel::class;
    protected $resourceName = 'usuario';
}
