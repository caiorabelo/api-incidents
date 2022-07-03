<?php

namespace App\Repositories;

use App\Models\Type;

class TypeRepository extends AbstractRepository
{
    protected $model;
    
    public function __construct(Type $model)
    {
        $this->model = $model;
    }
}
