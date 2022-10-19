<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clinic extends Model
{
    use HasFactory;
    public function clinic()
    {
    	// return $this->belongsTo('App\Models\Doctor');
        return $this->belongsTo(Doctor::class, 'doctor_id', 'id');
    }
}