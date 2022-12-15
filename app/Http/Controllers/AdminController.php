<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Collection;
use App\Models\Doctor;
use App\Models\Clinic;
use App\Models\Appointment;
use App\Models\AppointmentSet;
use App\Models\Time;
use App\Models\User;
use App\Mail\AppointmentMail;
use App\Mail\OnlineMail;
use Carbon\Carbon;
 
class AdminController extends Controller
{
    // doctor side
    public function ShowAppointments(){
        
        $id = Auth::id(); 
        $ClinicInfo = clinic::where('user_id', $id)->get();
        
        // get clinic info
        $ClinicId = clinic::where('user_id', $id)->pluck('id')->first();    

        // get who have appointment in this clinic
        $dataAppoints = appointment::where('clinic_id', $ClinicId)
        ->where('status', 'pending')
        ->get();
        $dataAppoints1 = appointment::where('clinic_id', $ClinicId)
        ->where('state', 'Waiting')
        ->get();
        
        $allAppoints = appointment::where('clinic_id', $ClinicId)
        ->get();

        $getSelectDoc = appointment::where('clinic_id', $ClinicId)->pluck('doctor');
        $docData = doctor::whereIn('id', $getSelectDoc)
        ->get();

        // $doctorNames = doctor::whereIn('id', $docData)->get();

        // return $allAppoints;
        return view('admin.appointments', compact('dataAppoints', 'ClinicInfo', 'allAppoints', 'docData', 'dataAppoints1')); 
    }

    public function approvalview(Request $request, $id){
        $idUser = Auth::id(); 
        // get clinic info
        $ClinicInfo = clinic::where('user_id', $idUser)->get();
        
        // get who have appointment in this clinic
        $ClinicId = clinic::where('user_id', $idUser)->pluck('id')->first();    
        $dataAppoints = appointment::where('clinic_id', $ClinicId)
        ->where('status', 'pending')
        ->where('id', $id)
        // ->with('User')
        ->get();
        
        $dataAppointment = appointment::where('clinic_id', $ClinicId)
        ->where('state', 'Waiting')->get();
        
        // all appointment data
        $allAppoints = appointment::where('clinic_id', $ClinicId)
        ->get();

        $getSelectDoc = appointment::where('clinic_id', $ClinicId)->pluck('doctor');
        $docData = doctor::whereIn('id', $getSelectDoc)
        ->get();

        // $getdoc = appointment::where('id', $id)->pluck('doctor');
        // $getDate = appointmentSet::where('doctor_id', $getdoc)->get();
        // return $getDate;
        return view('admin.AppointmentChose', compact('dataAppointment', 'dataAppoints', 'ClinicInfo', 'allAppoints', 'docData')); 
    }
    
    public function AppRoval(Request $request, $id){
        appointment::where('id', $id)
        ->update([
            'status' => 'Approved',
            'state' => 'Waiting',
        ]);
                 
        $getSelectDoc = appointment::where('id', $id)->pluck('doctor');
        $docData = doctor::where('id', $getSelectDoc)
        ->first();
   
        $userId = appointment::where('id', $id)->pluck('user_id');
        $userInfo = user::where('id', $userId)->first();

        $clinicId = appointment::where('id', $id)->pluck('clinic_id');
        $clinicInfo = clinic::where('id', $clinicId)->first();

        $appoint = appointment::where('id', $id)->first();
  

         $mailData = [
            'fname'=>$userInfo->fname,
            'mname'=>$userInfo->mname,
            'lname'=>$userInfo->lname,
            'time'=>$appoint->time,
            'date'=>$appoint->date,
            'consultation'=>$appoint->consultation,
            'reason'=>$appoint->reason,
            'meetingLink'=>$request->meetingLink,
            'Dfname' => $docData->Dfname,
            'Dlname' => $docData->Dlname,
            'clinicname' => $clinicInfo->clinicname,
            'caddress' => $clinicInfo->caddress,
            'cemail' => $clinicInfo->cemail,
            'Ccontact' => $clinicInfo->Ccontact,
            'qrimage' => $clinicInfo->qrimage
        ];
        
        if($appoint->consultation =='Face-to-Face'){
            Mail::to($userInfo->email)
            ->send(new AppointmentMail($mailData));
            // return $clinicInfo;
        }
        else{
            Mail::to($userInfo->email)
            ->send(new OnlineMail($mailData));
            // return $clinicInfo;
        }
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
    // doctor details
    public function DocD($id){
        $profile = Auth::id();
        $profiles = clinic::where('user_id', $profile)
        ->get();

        $data=doctor::where('id', $id)->first();
        
        // $dates = doctor::where('id', $id)->pluck('bdate')->first();

        // $newformat = date('Y-m-d',$dates);
        return view('admin.doctorDetails', compact('data', 'profiles'));
    }

    public function editDoctor(Request $request, $id){
        $doctor=doctor::find($id);
        $image=$request->file;
        if($image){
            $imagename = time().'.'.$image->getClientoriginalExtension();
            $request->file->move('assets/admin/img/doctorimage', $imagename);
            $doctor->file=$imagename;
        }
        $doctor->Dfname=$request->Dfname;
        $doctor->Dlname=$request->Dlname;
        $doctor->bdate=$request->date;
        $doctor->Specialization=$request->Specialization;
        $doctor->Demail=$request->Demail;
        $doctor->Dphone=$request->Dphone;
        
        $doctor->save();
        return redirect()->back()->with('message', 'Doctor Edited Successfully');
    }

    public function updateClinic(Request $request){
        $profile = Auth::id();
        $clinic = clinic::where('user_id', $profile)->first();

        $image=$request->profile;
        $qrimages=$request->qrimage;
        if($image){
            $imagename = time().'.'.$image->getClientoriginalExtension();
            $request->profile->move('assets/admin/img/clinicimage', $imagename);
            $clinic->profile=$imagename;
        }
        elseif($qrimages){
            $qrimagename = time().'.'.$qrimages->getClientoriginalExtension();
            $request->qrimage->move('assets/admin/img/clinicimage', $qrimagename);
            $clinic->qrimage=$qrimagename;
        }
        $clinic->clinicname=$request->clinicname;
        $clinic->caddress=$request->caddress;
        $clinic->Ccontact=$request->Ccontact;
        
        $clinic->save();
        // return $clinic;
        return redirect()->back()->with('message', 'Clinic Update Successfully');
                    
    }

    public function create($id){
        $profile = Auth::id();
        $profiles = clinic::where('user_id', $profile)
        ->get();

        $data=doctor::find($id);
        return view('admin.doctorCreate', compact('data', 'profiles'));
    }

    public function store(Request $request, $id){   
        $this->validate($request,[
            'date'=>'required|unique:appointment_sets,date,NULL,id,doctor_id,'.$id,
            'time' =>'required'
        ]);
        $setAppoint = AppointmentSet::create([
            'doctor_id' => $id,
            'date' => $request->date 
        ]);
        foreach($request->time as $time){
            Time::create([
                'appointmentSet_id' => $setAppoint->id,
                'time' => $time,
                // 'status' => 0,
            ]);
        }
        return redirect()->back()->with('message', 'Appointment created for '. $request->date);
    }

    public function indexs($id){
        $profile = Auth::id();
        $profiles = clinic::where('user_id', $profile)
        ->get();

        $data=doctor::find($id);
        $appointments=AppointmentSet::latest()->where('doctor_id', $id)->get();

        return view('admin.doctorIndex', compact('data', 'profiles', 'appointments'));
    }

    public function check(Request $request, $id){
        $profile = Auth::id();
        $profiles = clinic::where('user_id', $profile)
        ->get();
        $data=doctor::find($id);

        $dates = $request->date;
        $appointment  = AppointmentSet::where('date', $dates)
            ->where('doctor_id', $id)->first();
        if(!$appointment){
            return redirect()->back()
            ->with('message', 'No time set with this date.');
            // return "fail";
        }
        $appointmentSetID= $appointment->id;
        $Time= Time::where('appointmentSet_id', $appointmentSetID)->get();

        return view('admin.doctorIndex', compact('Time', 'appointmentSetID', 'dates', 'data'));
    }

    public function update(Request $request, $id){
        $appointmentId = $request->appointmentSetID;
        $appointment = Time::where('appointmentSet_id',$appointmentId)->delete();
        foreach($request->time as $time){
            Time::create([
                'appointmentSet_id'=>$appointmentId,
                'time'=>$time,
                'status'=>0
            ]);
        }
        return redirect()->route('clinics.doctor-index', $id)->with('message','Appointment time updated!');
    }

    public function clinicProfile(){
        $profile = Auth::id();
        $profiles = clinic::where('user_id', $profile)
        ->first();
        
        return view('admin.ClinicProfile', compact('profiles'));
    }

    public function recordsClinic($id){
        $profile = Auth::id();
        $profiles = clinic::where('user_id', $profile)
        ->get();

        // get appointment in this doctor
        $getdappointments = appointment::where('doctor', $id)->where('state', 'Completed')->get();

        // get who have appointment in this clinic
        $data=doctor::where('id', $id)->first();
    
        return view('admin.recordss', compact('getdappointments', 'data'));
  
    }

    
    public function uploadresults($id){
        $appointment = appointment::with('user')->find($id);
        return response()->json($appointment);
    }

    public function newresult(request $request, $id){

        appointment::where('id', $id)
        ->update([
            'paymentstatus' => $request->result,
        ]);
        return response()->json();

    }
    
    public function complete($id){
        $idUser = Auth::id(); 

        $ClinicId = clinic::where('user_id', $idUser)->pluck('id')->first();    
        $dataAppoints = appointment::where('clinic_id', $ClinicId)
        ->where('status', 'pending')
        ->where('id', $id)->get();

        appointment::where('id', $id)
        ->update([
            'state' => 'Completed',
        ]);

        return redirect()->back()->with('message', 'Appointment Completed');

  
    }


    
}