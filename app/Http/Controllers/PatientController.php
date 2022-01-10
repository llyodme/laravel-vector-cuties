<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $patient = Patient::all();
        return view('pages.patient', compact('patient'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.add-patient');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $storeData = $request->validate([
            'pat_fname' => 'required',
            'pat_mname' => 'required',
            'pat_lname' => 'required',
            'pat_gender' => 'required',
            'pat_address' => 'required',
            'pat_birth' => 'required',
            'pat_description' => 'required'
        ]);
        $patient = Patient::create($storeData);

        return redirect('/patients')->with('success', 'Patient created!');
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
        $patient = Patient::findOrFail($id);
        return view('pages.edit-patient', compact('patient'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Patient $patient)
    {
        $request->validate([
            'pat_fname' => 'required',
            'pat_mname' => 'required',
            'pat_lname' => 'required',
            'pat_gender' => 'required',
            'pat_address' => 'required',
            'pat_birth' => 'required',
            'pat_description' => 'required'
        ]);
        $patient->update($request->all());
        
        return redirect('/patients')->with('success', 'Patient updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Patient $patient)
    {
        $patient->delete();

        return redirect('/patients')->with('success', 'Patient deleted successfully');
    }
}
