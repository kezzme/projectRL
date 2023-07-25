<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Trades;
use App\Models\Units;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use SebastianBergmann\CodeCoverage\Report\Xml\Unit;

class TradeController extends Controller
{
    
    public function show($uid) {
        $data = Units::findOrFail($uid);
        return view('home.trade-in', ['units' => $data]);
    }

    public function store(Request $request){
       
        $validate = $request->validate([
            'user_id'  => 'required',
            'car_year'  => 'required',
            'car_make' => 'required',
            'car_model' => 'required',
            'car_variant' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'phone' => 'required',
            'year' => 'required',
            'make' => 'required',
            'model' => 'required',
            'variant' => 'required',
            'plate_no' => 'required',
            'unit_price' => 'required',
            'image' => 'required',
            'date' => 'required',
            'time' => 'required'
            // Add more validation rules as needed
        ], [
            'required' => 'Need to fill up your :attribute',
        ]);

        if($request->hasFile('image')){
            $validate['image'] = $request->file('image')->store('trade-in', 'public');
        }
        
       
        Trades::create($validate);

        return view('home.request');
    }
}
