<?php

namespace App\Models;

use CodeIgniter\Model;

abstract class ApiCrudModel extends Model
{
    protected $returnType = 'array';

    public function getAllRecords(): array
    {
        return $this->findAll();
    }

    public function getRecord($id): ?array
    {
        return $this->find($id);
    }

    public function createRecord(array $data)
    {
        return $this->insert($data);
    }

    public function updateRecord($id, array $data): bool
    {
        $current = $this->find($id);

        if ($current === null) {
            return false;
        }

        unset($data[$this->primaryKey]);
        $updated = array_merge($current, $data);
        unset($updated[$this->primaryKey]);

        return $this->update($id, $updated);
    }

    public function deleteRecord($id): bool
    {
        if ($this->find($id) === null) {
            return false;
        }

        return $this->delete($id);
    }
}
