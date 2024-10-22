<?php

namespace App\Services\Animal;
use App\Models\Cell;
use App\Models\Animal;


class Service
{
    public function store($data)
    {
        $animals = Animal::where('cell_id', $data['cell_id']) -> get();
        $cell = Cell::findOrFail($data['cell_id']);
        if($cell['capacity'] <= count($animals)){
            return false;
        }
        Animal::create($data);
        return true;
    }

    public function update($animal, $data)
    {
        $animal -> update($data);
    }

    public function get_by_cell_id($cell_id)
    {
        
        $animals = Animal::where('cell_id', $cell_id) -> get();
        return $animals;
    }

    public function get_by_id($id){

        $animal = Animal::findOrFail($id);
        return $animal;
    }
}