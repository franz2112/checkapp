<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\DB;

use Illuminate\Support\Str;

use Illuminate\Database\Query\JoinClause;

use App\Models\Clinic;

use App\Models\Caccept;

use App\Models\User;

class DeveloperController extends Controller
{
    //
    public function Cupload(Request $request){
        $this->validateCupload($request);

        $clinic=new clinic;
        $profile=$request->Profile;
        $proof=$request->Proof;
        $profilename=time().'.'.$profile->getClientoriginalExtension();
        $proofname=time().'.'.$proof->getClientoriginalExtension();
        $request->Profile->move('assets/admin/img/clinicimage',$profilename);
        $request->Proof->move('assets/admin/img/clinicimage',$proofname);
        $clinic->Profile=$profilename;
        $clinic->Proof=$proofname;
        $clinic->clinicname=$request->clinicname;
        $clinic->ofname=$request->ofname;
        $clinic->olname=$request->olname;
        $clinic->caddress=$request->caddress;
        $clinic->cemail=$request->cemail;
        $clinic->Ccontact=$request->Ccontact;
        $clinic->save();
        return redirect()->back()->with('message', 'Application Submitted, wait for the confirmation!');
    }

    // request clinics
    public function clinicreq(){
        $data = clinic::all();
        return view('AdminDevs.home', compact('data'));
    }

    // approve clinic request
    public function clinicslct(Request $request, $id){
        
        $cemail = clinic::select('cemail')
            ->where('id', $id)
            ->pluck('cemail')
            ->first();
        $email = User::where('email', $cemail)->exists();
        $data = User::where('email', $cemail)->pluck('id')->first();
        $flag='';
        if ($email){
            User::where('email', $cemail)->update(['usertype' => 1]);
            clinic::where('cemail', $cemail)
                ->update([
                    'status' => 'registered',
                    'user_id' => $data
                ]);
            $flag='success';
        }else{
            $flag='Email not found';
        }
        return redirect()->back()->with('message', $flag);
    }

    public function clinicdecline($id){
        $data=clinic::select('id')
        ->where('id', $id)
        ->update(['status' => 'declined']);     
        return redirect()->back()->with('message', 'Request have been declined!');
    }


     
}