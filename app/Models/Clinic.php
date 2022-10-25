<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clinic extends Model
{
    use HasFactory;
    public function doc()
    {
        // return $this->belongsTo(Doctor::class, 'doctor_id', 'id');
        return $this->hasMany(Doctor::class, 'doctor_id', 'id');

        // return $this->hasMany(User::class, 'clinic_id', 'id');

    }
}