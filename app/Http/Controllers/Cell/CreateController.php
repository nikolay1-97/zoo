<?php

namespace App\Http\Controllers\Cell;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cell;
use App\Models\Animal;


class CreateController extends Controller
{
    public function __invoke() {
        
        return view(view: 'cell.create');
    }
}