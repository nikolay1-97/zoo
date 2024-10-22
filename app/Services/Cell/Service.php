<?php

namespace App\Services\Cell;
use App\Models\Cell;
use App\Models\Animal;


class Service
{
    public function store($data)
    {
        Cell::create($data);
    }

    public function update($cell, $data)
    {
        $animals = Animal::where('cell_id', $cell['id']) -> get();
        if($data['capacity'] < count($animals)){
            return false;
        }
        $cell -> update($data);
        return true;
    }

    public function get_by_id($id){

        $cell = Cell::findOrFail($id);
        return $cell;
    }
}