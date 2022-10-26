<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\Doctor;

use App\Models\Clinic;

use App\Models\Appointment;

use App\Models\User;

class AdminController extends Controller
{
    // doctor side
    public function Appointments(){
        
        $id = Auth::id(); 
        $ClinicInfo = clinic::where('user_id', $id)->get();
        
        // get clinic info
        $ClinicId = clinic::where('user_id', $id)->pluck('id')->first();    

        // get who have appointment in this clinic
        $dataAppoints = appointment::where('clinic_id', $ClinicId)
        ->where('status', 'pending')
        // ->with('User')
        ->paginate(1);
        
        $allAppoints = appointment::where('clinic_id', $ClinicId)
        ->get();

        // return $dataAppoints;
        return view('admin.appointments', compact('dataAppoints', 'ClinicInfo', 'allAppoints')); 
    }
    public function AppRoval(Request $request, $id){
        $appoint = appointment::where('id', $id)
            ->update(['status' => 'Approved']);  
            return redirect()->back()->with('message', 'Appointment has been Approved!');
        }
    public function AppCel(Request $request, $id){
        $appoint = appointment::where('id', $id)
            ->update(['status' => 'Declined']);
            return redirect()->back()->with('message', 'Appointment has been declined!');
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
        $clinicInfo = clinic::where('user_id', $id)->get();

        return view('admin.addDoctor', compact('datadoctor', 'clinicInfo'));
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

        $appoint->save();
        return redirect()->back()->with('message', 'Appointment Request Successful!');

    }


}