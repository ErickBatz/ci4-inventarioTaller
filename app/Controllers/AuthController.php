<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use App\Models\UsuariosModel;
use CodeIgniter\HTTP\Request;

class AuthController extends ResourceController
{
    public function login()
    {
        //paso A, capturar los datos que mando react
        $json = $this->request->getJSON();
        $correo = $json->correo ?? null;
        $contrasena = $json->constrasena ?? null;

        //validar que no manden campos vacios
        if (!$correo || !$contrasena) {
            return $this->respond([
                'status' => 400,
                'message' => 'El correo y la contraseña son obligatorios'
            ], 400);
        }

        //paso 2, buscar al usuario en la base de datos
        $usuarioModel = new UsuariosModel();
        $usuario = $usuarioModel->where('correo', $correo)->first();

        //si el usuario no existe en la tabla 'usuarios'
        if (!$usuario) {
            return $this->respond([
                'status' => 404,
                'message' => 'El usuario no esta registrado'
            ], 404);
        }

        //paso 3: verificar la contrasenia 
        //password_verify compara la contrasenia que escribio el usuario
        //con la contrasenia encriptada(contrsena_hash) guardada en la BD
        if (!password_verify($contrasena, $usuario['contrasena_hash'])) {
            return $this->respond([
                'status' => 401,
                'message' => 'Contraseña incorrecta'
            ], 401);
        }

        //paso 4 si todo es correcto, devolvemos los datos del usuario 
        //ocultados la contraseña por seguridad antes de enviarla
        unset($usuario['contrasena_hash']);

        return $this->respond([
            'status' => 200,
            'message' => 'Bienvenidos al sistema',
            'usuario' => $usuario
        ]);
    }
}
