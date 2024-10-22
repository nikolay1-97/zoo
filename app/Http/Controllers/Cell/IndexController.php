<?php

namespace App\Http\Controllers\Cell;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cell;
use App\Models\Animal;


class IndexController extends Controller
{
    public function __invoke() {
        $cells = Cell::all();
        $animals = Animal::all();
        $cnt_animals = count($animals);

        return view('cell.index', compact('cells', 'cnt_animals'));
    }
}