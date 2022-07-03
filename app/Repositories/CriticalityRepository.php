<?php

namespace App\Repositories;

use App\Models\Criticality;

class CriticalityRepository extends AbstractRepository
{
    protected $model;
    
    public function __construct(Criticality $model)
    {
        $this->model = $model;
    }
}
