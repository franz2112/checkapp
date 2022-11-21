<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Doctors;
class AppointmentSet extends Model
{
    protected $guarded = [];

    public function doctor(){
        return $this->belongsTo(Doctor::class,'doctor_id', 'id');
    }
}