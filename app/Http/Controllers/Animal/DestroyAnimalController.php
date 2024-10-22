<?php

namespace App\Http\Controllers\Animal;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cell;
use App\Models\Animal;
use App\Http\Controllers\Animal\BaseAnimalController;


class DestroyAnimalController extends BaseAnimalController
{
    public function __invoke(Animal $animal) {
        
        $cell = Cell::findOrFail($animal['cell_id']);
        $animals = $this->service->get_by_cell_id($cell['id']);
        $animal -> delete();

        return redirect() -> route('cell.show', compact('cell', 'animals'));
    }
}