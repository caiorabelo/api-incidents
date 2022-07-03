<?php

namespace App\Repositories;

abstract class AbstractRepository
{
    protected $model;

    public function findAll()
    {
        return $this->model->all();
    }

    public function findId($id)
    {
        return $this->model->find($id);
    }

    public function create($request)
    {
        $modelRequest = $request->all();
        $this->model->create($modelRequest);
        return response()->json(
            "Created Success!",
            200
        );
    }

    public function update($request, $id)
    {
        $modelData = $this->model->find($id);
        $modelRequest = $request->all();
        $modelData->update($modelRequest);
        return response()->json(
            "Updated Success!",
            200
        );
    }

    public function delete($id)
    {
        $modelData = $this->model->find($id);
        $modelData->delete($modelData);
        return response()->json(
            "Deleted Success!",
            200
        );
    }
}
