<?php

namespace App\Repositories;

use App\Models\Incident;

class IncidentRepository extends AbstractRepository
{
    protected $model;

    public function __construct(Incident $model)
    {
        $this->model = $model;
    }

    public function findAll()
    {
        $incidents =  $this->model->all();
        foreach ($incidents as $incident) {
            $incident->criticality =  $incident->criticalityName->name;
            $incident->type =  $incident->typeName->name;
        }
        return $incidents;
    }

    public function findId($id)
    {
        $incident =  $this->model->find($id);
        $incident->criticalityName =  $incident->criticalityName->name;
        $incident->typeName =  $incident->typeName->name;
        return $incident;
    }
}
