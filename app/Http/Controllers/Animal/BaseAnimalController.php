<?php

namespace App\Http\Controllers\Animal;
use App\Http\Controllers\Controller;
use App\Services\Animal\Service;


class BaseAnimalController extends Controller
{
    public $service;

    public function __construct(Service $service)
    {
        $this->service = $service;
    }
}