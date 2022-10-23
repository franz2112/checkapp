<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\User;

use App\Models\Doctor;

use App\Models\Clinic;

use App\Models\Appointment;

class HomeController extends Controller
{
    //
    public function redirect(){
        if(Auth::id()){
            if(Auth::user()->usertype=='0'){
                return view('user.home');
            }
            else if (Auth::user()->usertype=='1'){
                return view('admin.home');
                
                // return Clinic::find(1)->getUser;
            }
            else{
                return view('AdminDevs.dashboard');
            }
        }
        else{
            return redirect()->back();
        }
    }

    public function index(){
        return view('welcome');
    }

    public function appoints(){
        $id = Auth::id();
        $dataAppoints = appointment::where('patient_id', $id)
        ->with('clinic')->get();
        // return $dataAppoints;
        return view('user.appoints', compact('dataAppoints')); 

    }

    public function clinics(){
        $data = clinic::all();
        return view('user.clinics', compact('data'));
    }
    
    public function selectedClinic($id){
        $dataDoctors = doctor::where('clinic_id', $id)->get();
        $clinic = clinic::where('id', $id)->get();
        return view('user.clinic-menu', compact('clinic', 'dataDoctors' ));

    }

}