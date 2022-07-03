<?php

namespace App\Http\Controllers;

use App\Repositories\CriticalityRepository;

class CriticalityController extends Controller
{
    private $criticalityRepository;

    public function __construct(CriticalityRepository $criticalityRepository)
    {
        $this->criticalityRepository = $criticalityRepository;
    }

    public function index()
    {
        return $this->criticalityRepository->findAll();
    }
}
