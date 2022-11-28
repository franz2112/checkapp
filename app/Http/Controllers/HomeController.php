<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Doctor;
use App\Models\Clinic;
use App\Models\Appointment;
use App\Models\AppointmentSet;
use App\Models\Time;
use Carbon\Carbon;
class HomeController extends Controller
{
    //
    public function redirect(){
        if(Auth::id()){
            if(Auth::user()->usertype=='0'){
                return view('user.home');
            }
            else if (Auth::user()->usertype=='1'){
                $id = Auth::id();
                $clinicInfo = clinic::where('user_id', $id)->get();

                return view('admin.home', compact('clinicInfo'));
                
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
        $dataAppoints = appointment::where('user_id', $id)
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
      
    public function rqstAppoint(Request $request, $id){
        $appoint=new appointment;
        $ids = Auth::id();
        $image=$request->specialId;
  

        if ($request->$image){
            $imagename=time().'.'.$image->getClientoriginalExtension();
            $request->specialId->move('assets/admin/img/specialId',$imagename);
            $appoint->specialId=$imagename;
        }
        $appoint->doctor=$request->doctor;
        $appoint->consultation=$request->consultation;
        $appoint->date=$request->date;
        $appoint->time=$request->time;
        $appoint->reason=$request->reason;
        $appoint->specialId=$request->specialId;
        $appoint->clinic_id=$id;
        $appoint->user_id=$ids;

        // $appoint->save();
        // return redirect()->back()->with('message', 'Appointment Request Successful!');
        return $appoint;

    }

    public function CnclAppnt(Request $request, $id){
        $appoint = appointment::where('id', $id)
            ->update(['status' => 'Declined']);
            return redirect()->back()->with('message', 'Appointment has been declined!');
    }
        

    public function notif(){
        return view('user.notification');
    }

    public function SelectTime($id){
        $dataDoctors = doctor::where('clinic_id', $id)->get('id');
        $doctors = AppointmentSet::with('doctor')
        ->whereIn('doctor_id', $dataDoctors)
        ->whereDate('date',date('2022-11-30'))->get();
    
        // $doctors = AppointmentSet::with('doctor')
        // ->whereDate('date',date('Y-m-d'))->get();

        return $doctors;
    }

    public function findDoctors(Request $request, $id){
        
        $doctors = AppointmentSet::with('doctor')->whereDate('date',$request->date)->get();
        return $doctors;
    }


    public function show($id){       
         $clinic = clinic::where('id', $id)->get();
         $dataDoctors = doctor::where('clinic_id', $id)->get();

    	// date_default_timezone_set('Australia/Melbourne');
        if(request('date')){
            $doctors = $this->findDoctorsBasedOnDate(request('date'));
            return $doctors;
        }
        $doctors = AppointmentSet::
        whereIn('doctor_id', $dataDoctors)
        ->where('date',date('Y-m-d'))->get();
    	return $doctors;
    }

    public function findDoctorsBasedOnDate($date){
        $doctors = AppointmentSet::where('date',$date)->get();
        return $doctors;

    }


}