<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trades extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'user_id',
        'car_year', 
        'car_make', 
        'car_model', 
        'car_variant', 
        'first_name', 
        'last_name',
        'phone',
        'year', 
        'make', 
        'model', 
        'variant',
        'plate_no',
        'unit_price',
        'date',
        'time',
    ];

    public function userTrades(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
