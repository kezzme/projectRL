<?php

namespace App\Http\Controllers;

use App\Models\Units;
use Illuminate\Http\Request;

class UnitController extends Controller
{


    public function services() {
        return view('home.services');
    }

    public function vehicles() {
        $data = Units::where('unit_type', 'old')->get();
        return view('home.vehicles', ['units' => $data]);
    }

    public function newArrival() {
        $data = Units::where('unit_type', 'new')->get();
        return view('home.new-arrival', ['units' => $data]);
    }


}
