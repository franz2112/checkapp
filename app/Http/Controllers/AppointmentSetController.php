<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\AppointmentSet;

use App\Models\Time;

use Illuminate\Support\Facades\Validator;

class AppointmentSetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return view('admin.doctorindex');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {   
        // $this->validate($request,[
        //     'date'=>'required|unique:appointment_sets,date,NULL,id,doctor_id,'.$id,
        //     'time' =>'required'
        // ]);
        // $setAppoint = AppointmentSet::create([
        //     'doctor_id' => $id,
        //     'date' => $request->date 
        // ]);
        // foreach($request->time as $time){
        //     Time::create([
        //         'appointmentSet_id' => $setAppoint->id,
        //         'time' => $time,
        //         // 'status' => 0,
        //     ]);
        // }
        // return redirect()->back()->with('message', 'Appointment created for '. $request->date);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function check(Request $request, $id)
    {
        // $dates = $request->date;
        // $appointment  = AppointmentSet::where('date', $dates)
        //     ->where('doctor_id', $id)->first();
        // if(!$appointment){
        //     // return redirect()->to('/Doctor-check/{id}')
        //     // ->with('errmessage', 'Appointment Time is not Available for this date.');
        // }
        // $appointmentSetID= $appointmentSet->id;
        // $Time= $Time::where('appointmentSet_id', $appointmentSetID)->get();
        // return $time;
        // return view('admin.appointment.index', compact('times', 'appointmentSetID', 'date'));
    }
}