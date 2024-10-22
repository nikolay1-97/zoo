<?php

namespace App\Http\Controllers\Cell;

use App\Http\Controllers\Cell\BaseController;
use Illuminate\Http\Request;
use App\Models\Cell;
use App\Models\Animal;


class UpdateController extends BaseController
{
    public function __invoke(Cell $cell) {
        
        $data = request() -> validate([
            'title' => 'string',
            'capacity' => 'integer',
        ]);
        
        $is_update = $this->service->update($cell, $data);
        if ($is_update){
            return redirect() -> route('cell.show', $cell -> id);
        }
        return 'Вместительность клетки слишком мала';
    }
}