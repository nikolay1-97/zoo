<?php

namespace App\Http\Controllers\Animal;

use Illuminate\Http\Request;
use App\Models\Cell;
use App\Models\Animal;
use App\Http\Controllers\Animal\BaseAnimalController;


class UpdateAnimalController extends BaseAnimalController
{
    public function __invoke(Animal $animal) {
        
        $data = request() -> validate([
            'cell_id' => 'integer',
            'name' => 'string',
            'age' => 'integer',
            'type' => 'string',
            'description' => 'string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $imageName = time().'.'.request()->image->getClientOriginalExtension();
        request()->image->move(public_path('images'), $imageName);
        $data['image'] = $imageName;
        $this->service->update($animal, $data);
        return redirect() -> route('animal.show', $animal -> id);
    }
}