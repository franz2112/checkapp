<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;
        
    public function Clinic(){
        return $this->belongsTo('App\Models\Clinic');
    }

    public function User(){
        return $this->belongsTo('App\Models\User');
    }
}