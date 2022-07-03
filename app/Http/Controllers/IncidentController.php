<?php

namespace App\Http\Controllers;

use App\Http\Requests\IncidentRequest;
use App\Repositories\IncidentRepository;
use Illuminate\Http\Request;

class IncidentController extends Controller
{
    private $incidentRepository;

    public function __construct(IncidentRepository $incidentRepository)
    {
        $this->incidentRepository = $incidentRepository;
    }

    public function index()
    {
        return $this->incidentRepository->findAll();
    }

    public function store(IncidentRequest $request)
    {
        return $this->incidentRepository->create($request);
    }

    public function show($id)
    {
        return $this->incidentRepository->findId($id);
    }

    public function update(IncidentRequest $request, $id)
    {
        return $this->incidentRepository->update($request, $id);
    }

    public function destroy($id)
    {
        return $this->incidentRepository->delete($id);
    }
}
