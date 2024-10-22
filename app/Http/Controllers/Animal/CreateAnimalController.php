<?php

namespace App\Http\Controllers\Animal;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cell;
use App\Models\Animal;


class CreateAnimalController extends Controller
{
    public function __invoke() {
        
        $cells = Cell:: all();

        return view('animal.create', compact('cells'));
    }
}