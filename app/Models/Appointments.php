<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointments extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'uid',
        'car_year', 
        'car_make', 
        'car_model', 
        'car_variant', 
        'first_name', 
        'last_name',
        'phone',
        'price',
        'date',
        'time',
    ];

    public function userAppointments(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
