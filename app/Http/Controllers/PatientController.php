<?php

namespace App\Http\Controllers;
use App\patient;
use App\blood;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $patients=patient::get();
        return view('Patients.index',['patients'=>$patients]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $bloods=blood::get();
        return view('Patients.create',['bloods'=>$bloods]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   $this->validate($request,['name'=>'required|max:255',]);
        //
        $patient= new patient();
        $patient->name=$request->name;
        $patient->phone=$request->phone;
        $patient->bloods_id=$request->bloods_id;
        $patient->save();
        return redirect('/patients');
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
        $patient=patient::find($id);
        $bloods=blood::get();
        return view('Patients.edit',compact('patient','bloods'));
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
        $patient= patient::find($id);
        $patient->name=$request->name;
        $patient->phone=$request->phone;
        $patient->bloods_id=$request->bloods_id;
        $patient->save();
        return redirect('/patients');
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
        patient::findOrFail($id)->delete();
        return redirect('patients');
    }
}
