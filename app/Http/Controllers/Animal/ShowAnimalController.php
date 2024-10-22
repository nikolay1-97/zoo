<?php

namespace App\Http\Controllers\Animal;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cell;
use App\Models\Animal;
use App\Http\Controllers\Animal\BaseAnimalController;


class ShowAnimalController extends BaseAnimalController
{
    public function __invoke($id) {
        
        $animal = $this->service->get_by_id($id);

        return view('animal.show', compact('animal'));
    }
}