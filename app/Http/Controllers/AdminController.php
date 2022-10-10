<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Doctor;
class AdminController extends Controller
{
    //
    public function Appointments(){
        return view('admin.Appointments');
    }
    public function AddDoctor(){
        return view('admin.AddDoctor');
    }
    public function upload(Request $request){
       $doctor=new doctor;

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
       $doctor->save();
       return redirect()->back()->with('message', 'Doctor Added Successfully');



    }
}