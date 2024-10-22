<?php

namespace App\Http\Controllers\Cell;

use App\Http\Controllers\Cell\BaseController;
use Illuminate\Http\Request;
use App\Models\Cell;
use App\Models\Animal;


class StoreController extends BaseController
{
    public function __invoke() {
        $data = request() -> validate([
            'title' => 'string',
            'capacity' => 'integer',
        ]);
        
        $this->service->store($data);
        return redirect() -> route(route: 'cell.index');
    }
}