<?php

namespace App\Http\Controllers;

use App\Models\Appointments;
use App\Models\Units;
use GuzzleHttp\Psr7\Message;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function show($uid) {
        $data = Units::findOrFail($uid);
        // dd($data);
        return view('home.view-details', ['units' => $data]);
    }

    public function store(Request $request){
        $validate = $request->validate([
            'user_id'  => 'required',
            'uid'  => 'required',
            'car_year'  => 'required',
            'car_make' => 'required',
            'car_model' => 'required',
            'car_variant' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'phone' => 'required',
            'price' => 'required',
            'date' => 'required',
            'time' => 'required'
            // Add more validation rules as needed
        ], [
            'required' => 'Need to fill up your :attribute',
        ]);
       
        Appointments::create($validate);

        return view('home.appoint');
    }
}
