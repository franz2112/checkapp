<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Doctor extends Model
{
    use HasFactory;

    
    public function setBirthDateAttribute($value){
        $this->attributes ['bdate'] = Carbon::createFromFormat('m/d/Y',  $value)->format('Y-m-d');
    }
    public function getBirthDateAttribute(){
        return Carbon::createFromFormat('Y-m-d',  $this->attributes['bdate'] )->format('m/d/Y');
    }
}