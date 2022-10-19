<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\Doctor;

use App\Models\Clinic;

class AdminController extends Controller
{
    //
    public function Appointments(){
        return view('admin.Appointments');
    }

    public function AddDoctor(){
        $datadoctor = doctor::all();
        return view('admin.addDoctor', compact('datadoctor'));
    }
    public function upload(Request $request){
        $doctor=new doctor;
        $id = Auth::id();
        $clinic = clinic::where('id', $id)->exists();


        $image=$request->file;
        $imagename=time().'.'.$image->getClientoriginalExtension();
        $request->file->move('assets/admin/img/doctorimage',$imagename);
        $doctor->file=$imagename;
        $doctor->Dfname=$request->Dfname;
        $doctor->Dlname=$request->Dlname;
        $doctor->Gender=$request->Gender;
        $doctor->date=$request->date;
        $doctor->Specialization=$request->Specialization;
        $doctor->Demail=$request->Demail;
        $doctor->Dphone=$request->Dphone;
        $doctor->clinic_id=$clinic;

        $doctor->save();
        //    return redirect()->back()->with('message', 'Doctor Added Successfully');
        return $doctor;

    }


}