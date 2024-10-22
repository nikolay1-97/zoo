<?php

namespace App\Http\Controllers\Animal;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Animal\BaseAnimalController;
use Illuminate\Http\Request;
use App\Models\Cell;
use App\Models\Animal;


class StoreAnimalController extends BaseAnimalController
{
    public function __invoke() {
        
        $data = request() -> validate([
            'cell_id' => 'integer',
            'name' => 'string',
            'age' => 'integer',
            'type' => 'string',
            'description' => 'string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $imageName = time().'.'.request()->image->getClientOriginalExtension();
        $data['image'] = $imageName;
        $is_create = $this->service->store($data);

        if($is_create){
            request()->image->move(public_path('images'), $imageName);
            $cell_id = $data['cell_id'];
            $cell = Cell::findOrFail($cell_id);
            $animals = $this->service->get_by_cell_id($cell_id);
            return redirect() -> route('cell.show', compact('cell', 'animals'));
        }
        return 'В клетке нет свободных мест';
    }
}