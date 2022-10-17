<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class clinic extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'clinicname',
        'ofname',
        'olname',
        'caddress',
        'cemail ',
        'Ccontact ',
        'Profile',
        'Proof',
        'status',
    ];

    // public function User(){
    //     return $this->hasOne(User::class, 'cemail');
    // }
}