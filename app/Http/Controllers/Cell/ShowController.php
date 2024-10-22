<?php

namespace App\Http\Controllers\Cell;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cell;
use App\Models\Animal;
use App\Http\Controllers\Cell\BaseController;


class ShowController extends BaseController
{
    public function __invoke($id) {
        
        $cell = $this->service->get_by_id($id);
        $animals = Animal::where('cell_id', $id) -> get();

        return view('cell.show', compact('cell', 'animals')); 
    }
}