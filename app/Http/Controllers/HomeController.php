<?php

namespace App\Http\Controllers;

use App\Models\Homepage;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    // public function sample() {
    //      

    //     return view('sample', ['units' => $data]);
    // }


    public function index() {
        return view('home.index');
    }

    public function services() {
        return view('home.services');
    }

    public function vehicles() {
        $data = Homepage::where('unit_type', 'old')->get();
        return view('home.vehicles', ['units' => $data]);
    }

    public function newArrival() {
        $data = Homepage::where('unit_type', 'new')->get();
        return view('home.vehicles', ['units' => $data]);
    }

    public function finanCal() {
        return view('landing.financing-calculator');
    }

    public function about() {
        return view('landing.about');
    }

    public function contact() {
        return view('landing.contact');
    }



}
