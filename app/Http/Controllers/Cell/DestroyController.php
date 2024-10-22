<?php

namespace App\Http\Controllers\Cell;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cell;
use App\Models\Animal;


class DestroyController extends Controller
{
    public function __invoke(Cell $cell) {

        $cell -> delete();
        return redirect() -> route('cell.index');
    
    }
}