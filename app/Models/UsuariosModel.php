<?php

namespace App\Models;

class UsuariosModel extends ApiCrudModel
{
    protected $table         = 'usuarios';
    protected $primaryKey    = 'id_usuario';
    protected $allowedFields = [
        'id_usuario',
        'id_roles',
        'nombre',
        'correo',
        'contrasenia_hash',
        'estado',
    ];

    protected $validationRules = [
        'nombre'           => 'required|min_length[3]',
        'correo'           => 'required|valid_email',
        'contrasenia_hash' => 'required',
    ];

    protected $validationMessages = [
        'correo' => [
            'valid_email' => 'El formato del correo electronico no es valido.',
        ],
    ];
}
