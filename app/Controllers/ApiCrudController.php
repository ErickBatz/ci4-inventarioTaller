<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;

abstract class ApiCrudController extends ResourceController
{
    protected $format = 'json';
    protected $resourceName = 'registro';

    public function index()
    {
        return $this->respond($this->model->getAllRecords());
    }

    public function show($id = null)
    {
        $record = $this->model->getRecord($id);

        if ($record === null) {
            return $this->failNotFound('No se encontro ' . $this->resourceName . ' con ID: ' . $id);
        }

        return $this->respond($record);
    }

    public function create()
    {
        $data = $this->request->getJSON(true);

        if (! is_array($data)) {
            return $this->fail('El cuerpo debe contener un objeto JSON valido.', 400);
        }

        $id = $this->model->createRecord($data);

        if ($id === false) {
            return $this->failValidationErrors($this->model->errors());
        }

        return $this->respondCreated([
            'status'  => 201,
            'mensaje' => ucfirst($this->resourceName) . ' creado con exito.',
            'id'      => $id,
        ]);
    }

    public function update($id = null)
    {
        $data = $this->request->getJSON(true);

        if (! is_array($data)) {
            return $this->fail('El cuerpo debe contener un objeto JSON valido.', 400);
        }

        if ($this->model->getRecord($id) === null) {
            return $this->failNotFound('No se encontro ' . $this->resourceName . ' con ID: ' . $id);
        }

        if (! $this->model->updateRecord($id, $data)) {
            return $this->failValidationErrors($this->model->errors());
        }

        return $this->respond([
            'status'  => 200,
            'mensaje' => ucfirst($this->resourceName) . ' actualizado con exito.',
        ]);
    }

    public function delete($id = null)
    {
        if (! $this->model->deleteRecord($id)) {
            return $this->failNotFound('No se encontro ' . $this->resourceName . ' con ID: ' . $id);
        }

        return $this->respond([
            'status'  => 200,
            'mensaje' => ucfirst($this->resourceName) . ' eliminado con exito.',
        ]);
    }
}
