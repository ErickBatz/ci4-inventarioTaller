<?php

namespace App\Models;

class RolesModel extends ApiCrudModel
{
    protected $table            = 'roles';
    protected $primaryKey       = 'id_roles';
    protected $allowedFields    = [
        'id_roles',
        'nombre_rol'
    ];
}
