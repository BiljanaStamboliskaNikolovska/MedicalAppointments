<?php

namespace App\Http\Controllers;

use App\Appointment;
use Illuminate\Http\Request;
use App\Doctor;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $doctors=Doctor::where('is_active', '=', '1')->get();
        // dd($doctors);
        return view('appointments.create', compact('doctors'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $hasOccured=0;

        $request->validate([
            'patient_name' => 'required|max:255',
            'time_from' => 'required',
            'time_to' => 'required',
            'doctor_id' => 'required',
        ]);


        if ($request->has_occured == 'on') {
            $hasOccured=1;
        }
      
        Appointment::create([
            'patient_name'=>$request->patient_name,
            'time_from'=>$request->time_from,
            'time_to'=>$request->time_to,
            'has_occured'=> $hasOccured,
            'doctor_id'=>$request->doctor_id
        ]);

        
       
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function show(Appointment $appointment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function edit(Appointment $appointment)
    {
        $doctors=Doctor::where('is_active', '=', '1')->get();

        return view('appointments/edit', compact('appointment', 'doctors'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Appointment $appointment, Doctor $doctor)
    {
        $doctor=Doctor::where('is_active', '=', '1')->get();

        $hasOccured=0;

        // $request->validate([
        //     'patient_name' => 'required|max:255',
        //     'time_from' => 'required',
        //     'time_to' => 'required',
        //     'doctor_id' => 'required',
        // ]);


        if ($request->has_occured == 'on') {
            $hasOccured=1;
        }
      
        // dd('hello');

        $appointment->update([
            'patient_name'=>$request->patient_name,
            'time_from'=>$request->time_from,
            'time_to'=>$request->time_to,
            'has_occured'=> $hasOccured,
            'doctor_id'=>$request->doctor_id
        ]);

        return redirect('/');
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Appointment $appointment)
    {
        $appointment->delete();

        return redirect('/');
    }
}
