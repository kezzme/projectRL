<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trades extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'user_id',
        'uid',
        'car_year', 
        'car_make', 
        'car_model', 
        'car_variant', 
        'car_price', 
        'first_name', 
        'last_name',
        'contact',
        'email',
        'unit_year', 
        'unit_make', 
        'unit_model', 
        'unit_variant', 
        'plate_no',
        'unit_price',
        'date',
        'time',
        'photo_1',
        'photo_2',
        'photo_3',
        'photo_4',
        'photo_5',
        'photo_6',
        'status',
    ];

    public function userTrades(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
