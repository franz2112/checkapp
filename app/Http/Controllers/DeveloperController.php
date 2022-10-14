<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use App\Models\Clinic;

use App\Models\Caccept;

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
        // $data = clinic::all();
        return view('AdminDevs.home', compact('data'));
        
    }
    
    // public function clinicreqst(){
    //     // $id = $_GET['id'];
    //     // $data = clinic::where('id', '=', $id);
    //     // $reqst = '
    //     //     <div
    //     //     class="card-body  position-relative z-index-1"
    //     //     >
    //     //     <div class="mb-3">
    //     //     <img
    //     //     class="w-20 position-relative z-index-2"
    //     //     src="../assets/admin/img/clinicimage/asdasd"
    //     //     alt="profile"
    //     //     />
    //     //     </div>
    //     //     <div class="row">
    //     //         <div class="col-6">
    //     //             <h6 class="text-sm mb-0">Clinics Name:</h6>
    //     //             <p class="text-md mb-2">'. $data->clinicname .'</p>
    //     //             <h6 class="text-sm mb-0">Owners Name:</h6>
    //     //             <p class="text-md mb-2">
    //     //                 asdasd
    //     //             </p>
    //     //             <h6 class="text-sm mb-0">Address:</h6>
    //     //             <p class="text-md mb-2">
    //     //                 asd
    //     //             </p>
    //     //         </div>
    //     //         <div class="col-6">
    //     //             <h6 class="text-sm mb-0">Email:</h6>
    //     //             <p class="text-md mb-2">asdas
    //     //             </p>
    //     //             <h6 class="text-sm mb-0">Contact:</h6>
    //     //             <p class="text-md mb-2">
    //     //                 asdasd
    //     //             </p>
    //     //         </div>
    //     //     </div>
    //     // </div>    
    //     // ';

    //     return view('AdminDevs.home');

    //     // $data = clinic::all();
    //     // return view('AdminDevs.home', compact('data'));
        
    // }
    
    // public function clinicslct(Request $request){
    //     $data = clinic::first();
    //     $user = DB::table('caccepts')->insert([
    //         'clinicname' => $request->$data->clinicname,
    //         'ofname' => 'kayla@example.com',
    //         'olname' => 'kayla@example.com',
    //         'caddress' => 'kayla@example.com',
    //         'cemail' => 'kayla@exasmple.com',
    //         'Ccontact' => 'kayla@example.com',
    //         'Profile' => 'kayla@example.com',
    //         'Proof' => 'kayla@example.com',
    //         'created_at' => date("Y-m-d H:i:s", strtotime('now')),
    //         'updated_at' => date("Y-m-d H:i:s", strtotime('now')),
    //     ]);
    //     return redirect()->back();
    //     dd($data);
    // }



     
}