<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\Doctor;

use App\Models\Clinic;

use App\Models\Appointment;

class AdminController extends Controller
{
    //
    public function Appointments(){
        return view('admin.Appointments');
    }
    // add new doctor
    public function upload(Request $request){
        $doctor=new doctor;
        $id = Auth::id();
        $Cid = clinic::where('user_id', $id)->pluck('id')->first();
        $image=$request->file;
        $imagename=time().'.'.$image->getClientoriginalExtension();
        $request->file->move('assets/admin/img/doctorimage',$imagename);
        $doctor->file=$imagename;
        $doctor->Dfname=$request->Dfname;
        $doctor->Dlname=$request->Dlname;
        $doctor->Gender=$request->Gender;
        $doctor->bdate=$request->date;
        $doctor->Specialization=$request->Specialization;
        $doctor->Demail=$request->Demail;
        $doctor->Dphone=$request->Dphone;
        $doctor->clinic_id=$Cid;

        $doctor->save();
        return redirect()->back()->with('message', 'Doctor Added Successfully');
    }
    // view added doctors
    public function AddDoctor(){
        $id = Auth::id();
        $Cid = clinic::where('user_id', $id)->pluck('id')->first();
        
        $datadoctor = Doctor::where('clinic_id', $Cid)->get();
        return view('admin.addDoctor', compact('datadoctor'));
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
        $appoint->patient_id=$ids;

        $appoint->save();
        return redirect()->back()->with('message', 'Appointment Request Successful!');

    }


}