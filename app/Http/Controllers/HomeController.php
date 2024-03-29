<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Doctor;
use App\Models\Clinic;
use App\Models\Appointment;
use App\Models\AppointmentSet;
use App\Models\MedicalRecord;
use App\Models\Prescription;
use App\Models\Time;
use App\Notifications\CheckAppNotification;
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

        $docData = appointment::where('user_id', $id)
        ->with('clinic')->pluck('doctor');
        $doctorNames = doctor::whereIn('id', $docData)->get();

        // return $dataAppoints;
        return view('user.appoints', compact('dataAppoints', 'doctorNames')); 
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
        time::where('time', $request->time)
        ->update(['status'=>1]);
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

        $appoint->save();

        // $mailData = [
        //     'name'=>auth()->user()->name,
        //     'time'=>$request->time,
        //     'date'=>$request->date,
        //     'doctorName' => $doctorName->name

        // ];
        // dd($appoint);
        // return redirect()->back()->with('message', 'Appointment Request Successful!');

    }

    public function CnclAppnt(Request $request, $id){
        $appoint = appointment::where('id', $id)
            ->update(['status' => 'Decline']);
            return redirect()->back()->with('message', 'Appointment has been decline!');
    }
        

    public function notif(){
        $userId = Auth::id();
        $appointments= appointment::with('clinic')->where('user_id',$userId)->orderBy('created_at', 'DESC')->get();
        return view('user.notification', compact('appointments'));
    }

    public function SelectDoc($id){
        $dataDoctors = doctor::where('clinic_id', $id)->get('id');
        $doctors = AppointmentSet::with('doctor')
        ->whereIn('doctor_id', $dataDoctors)
        ->whereDate('date',date('Y-m-d'))->get();
    
        // $doctors = AppointmentSet::with('doctor')
        // ->whereDate('date',date('Y-m-d'))->get();

        return $doctors;
    }

    public function SelectTime($id){
        $dataDoctors = doctor::where('clinic_id', $id)->get('id');
        $date = AppointmentSet::
        whereDate('date',date('Y-m-d'))->pluck('date')->first();
    
        $appointment = AppointmentSet::whereIn('doctor_id', $dataDoctors)->where('date',$date)->first();
        $time = Time::where('appointmentSet_id',$appointment->id)->where('status', 0)->get();


        return $time;
    }

    public function findDoctors(Request $request, $id){
        $dataDoctors = doctor::where('clinic_id', $id)->get('id');
        $doctors = AppointmentSet::with('doctor')
        ->whereIn('doctor_id', $dataDoctors)
        ->whereDate('date',$request->date)->get();

        return $doctors;
    }

    public function findTimes(Request $request, $id){

        // $message = $request->doctor('doctor_id')->pluck{'id'}; 
        // $name = ($request->doctor);
        $showAllDoc = doctor::where('clinic_id', $id)->get('id');
        $date = AppointmentSet::
        whereIn('doctor_id', $showAllDoc)
        ->whereDate('date',date($request->date))->get();
        $select = $date->where('doctor_id', $request->doctor)->pluck('id');
        $times = Time::whereIn('appointmentSet_id', $select)->where('status',0)->get();

        return $times;
    }

    public function findDates($id){
        $dataDoctors = doctor::where('clinic_id', $id)->get('id');
        $dates = AppointmentSet::
        whereIn('doctor_id', $dataDoctors)->latest()->pluck('date')->first();
        return $dates;
    }

    public function records(){
       $userId = Auth::id();
       $clinicId = appointment::where('user_id', $userId)->pluck('clinic_id');
       $clinicDetails = clinic::find($clinicId);
       
       $doctorId = appointment::where('user_id', $userId)->pluck('doctor');
       $doctorDetails = doctor::find($doctorId);

       $appointmentDetails = appointment::where('user_id', $userId)->get();
       
       $appointment_id = appointment::where('user_id', $userId)->where('state', 'Completed')->pluck('id');
       $result = MedicalRecord::whereIn('appointments_id', $appointment_id)->get();
       $prescription = Prescription::whereIn('appointments_id', $appointment_id)->get();
       return view('user.records', compact('clinicDetails', 'doctorDetails', 'appointmentDetails', 'result', 'prescription'));
    }

    public function uploadrecords($id){
        $record = MedicalRecord::where('appointments_id', $id)->first();
        return response()->json($record);
    }
    
    public function uploadprescription($id){
        $prescription = Prescription::where('appointments_id', $id)->first();
        return response()->json($prescription);
    }

    
    public function notify(){
        
        $userId = Auth::id();
        $user = user::find($userId);
        auth()->user()->notify(new CheckAppNotification($user));


    }



}