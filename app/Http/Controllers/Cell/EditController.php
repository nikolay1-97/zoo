<?php

namespace App\Http\Controllers\Cell;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cell;
use App\Models\Animal;


class EditController extends Controller
{
    public function __invoke(Cell $cell) {
        
        return view('cell.edit', compact('cell'));
    }
}