<?php

namespace App\Http\Controllers\Animal;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cell;
use App\Models\Animal;


class EditAnimalController extends Controller
{
    public function __invoke(Animal $animal) {
        
        $cells = Cell:: all();

        return view('animal.edit', compact('cells', 'animal'));
    }
}