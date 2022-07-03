<?php

namespace App\Http\Controllers;

use App\Repositories\TypeRepository;

class TypeController extends Controller
{
    private $typeRepository;

    public function __construct(TypeRepository $typeRepository)
    {
        $this->typeRepository = $typeRepository;
    }

    public function index()
    {
        return $this->typeRepository->findAll();
    }
}
