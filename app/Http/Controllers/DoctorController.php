<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Doctor;

class DoctorController extends Controller
{
    public function index()
    {
        $doctor=Doctor::where('is_active', '=', '1')->get();

        return view('index', compact('doctor'));
    }
    

    public function show(Doctor $doctor)
    {
        // $doctor= Doctor::find($id);
        // dd($doctor);


        return view('doctors/show', compact('doctor'));
    }

    public function create()
    {
        return view('doctors/create');
    }

    public function store()
    {
        // Doctor::create([
        //     'name'=>request('name'),
        //     'speciality'=>request('speciality'),
        //     'is_active'=>request('is_active'),
        //     'institution'=>request('institution')
        //     ]);

        Doctor::create(request()->validate([
            'name'=>['required','min:5'],
            'speciality'=>['required','min:5'],
            'is_active'=>'required',
            'institution'=>'required'
        ]));

        return redirect('/');
    }

    public function edit(Doctor $doctor)
    {
        // $doctor= Doctor::find($id);
        // dd($doctor);

        return view('doctors/edit', compact('doctor'));
    }

    public function update(Doctor $doctor)
    {
     
        // $doctor=Doctor::find($id);
        // dd($doctor->id);
        $doctor->update(request()->validate([
            'name' => 'required|min:5',
            'speciality' => 'required|min:5',
            'institution' => 'required'
        ]));

        // $doctor->name=request('name');
        // $doctor->speciality = request('speciality');
        // $doctor->is_active = request('is_active');
        // $doctor->institution = request('institution');
            
        //  $doctor->save();

              
        return redirect('/');
    }

    public function destroy(Doctor $doctor)
    {
        $doctor->delete();

        
        return redirect('/');
    }
}
