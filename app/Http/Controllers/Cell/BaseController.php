<?php

namespace App\Http\Controllers\Cell;
use App\Http\Controllers\Controller;
use App\Services\Cell\Service;


class BaseController extends Controller
{
    public $service;

    public function __construct(Service $service)
    {
        $this->service = $service;
    }
}