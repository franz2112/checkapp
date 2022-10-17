<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use Illuminate\Database\Query\JoinClause;

use App\Models\Clinic;

use App\Models\Caccept;

use App\Models\User;

class DeveloperController extends Controller
{
    //
    public function Cupload(Request $request){
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

    public function clinicreq(){
        $data = clinic::all();
        return view('AdminDevs.home', compact('data'));
    }

    public function clinicslct($id){
    //    $update = [ 'Users.usertype' => 1, 
    //    'Clinics.status' => 'registered' ];
        // $cemail = clinic::find($id)->pluck('cemail')->first();
        $cemail = clinic::select('cemail')
            ->where('id', $id)
            ->pluck('cemail')
            ->first();
        $email = User::where('email', $cemail)->exists();
        
        $flag='';

        if ($email){
            User::where('email', $cemail)->update(['usertype' => 1]);
            clinic::where('cemail', $cemail)->update(['status' => 'registered']);
            // User::where('email', $cemail)->exists();
            // $data = DB::table('clinics')
            // ->select('id', $id)
            // ->join('Users', function($join){
            //     $join->on('clinics.cemail', '=', 'Users.email');
            // })
            // ->where('Users.id', '=', $id)
            // ->where('Users.email', $cemail)        
            // ->update($update);
            $flag='success';
        }else{
            $flag=$cemail;
        }
        return redirect()->back()->with('message', $flag);

        // dd($data);
     }

        


     
}