<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $app = Appointment::all();
        return view('pages.appointment', compact('app'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('pages.add-appointment');
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
            'app_name' => 'required',
            'app_date' => 'required',
            'app_address' => 'required',
            'app_contact' => 'required',
            'app_email' => 'required',
            'app_status' => 'required',
            'app_services' => 'required'
        ]);
        $app = Appointment::create($storeData);

        return redirect('/appointments')->with('success', 'Appointment created!');
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
        $app = Appointment::findOrFail($id);
        return view('pages.edit-appointment', compact('app'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Appointment $app)
    {
        $request->validate([
            'app_name' => 'required',
            'app_date' => 'required',
            'app_address' => 'required',
            'app_contact' => 'required',
            'app_email' => 'required',
            'app_status' => 'required',
            'app_services' => 'required'
        ]);
        $app->update($request->all());
        
        return redirect('/appointments')->with('success', 'Appointment updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $app = Appointment::findOrFail($id);
        $app->delete();

        return redirect('/appointments')->with('success', 'Appointment deleted successfully');
    }
}
