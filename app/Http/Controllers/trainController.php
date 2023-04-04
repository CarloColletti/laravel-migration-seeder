<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\train;

class trainController extends Controller
{
    public function trainList() {
        
        $trains = Train::all();

        return view('train-list', compact('trains'));
    }
}
