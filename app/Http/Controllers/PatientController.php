<?php

namespace App\Http\Controllers;
use App\patient;
use App\blood;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
<<<<<<< HEAD:app/Http/Controllers/PatientController.php

class PatientController extends Controller
=======
use Illuminate\Facades\DB;
class DonarController extends Controller
>>>>>>> e80d5e232a238130e54b9a75ed39dc5354a26b22:app/Http/Controllers/DonarController.php
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
<<<<<<< HEAD:app/Http/Controllers/PatientController.php
        $patients=patient::get();
        return view('Patients.index',['patients'=>$patients]);
=======
        $donars=donar::all();
        return view('donar.index',['donars'=>$donars]);
>>>>>>> e80d5e232a238130e54b9a75ed39dc5354a26b22:app/Http/Controllers/DonarController.php
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
<<<<<<< HEAD:app/Http/Controllers/PatientController.php
        $patient=patient::find($id);
        $bloods=blood::get();
        return view('Patients.edit',compact('patient','bloods'));
=======
        $donars=donar::find($id);
        return view('donar.edit',['donar'=>donar::get(),'donars'=>$donars]);
>>>>>>> e80d5e232a238130e54b9a75ed39dc5354a26b22:app/Http/Controllers/DonarController.php
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
<<<<<<< HEAD:app/Http/Controllers/PatientController.php
        $patient= patient::find($id);
        $patient->name=$request->name;
        $patient->phone=$request->phone;
        $patient->bloods_id=$request->bloods_id;
        $patient->save();
        return redirect('/patients');
=======
        $donars=donar::find($id);
        $donars->name = $request->name;
        $donars->gender=$request->gender;
        $donars->address=$request->address;
        $donars->phone=$request->phone;
        $donars->age=$request->age;
        $donars->date_of_birth=$request->dob;
        $donars->member=$request->member;
        $donars->save();
        return redirect('donars');

>>>>>>> e80d5e232a238130e54b9a75ed39dc5354a26b22:app/Http/Controllers/DonarController.php
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
<<<<<<< HEAD:app/Http/Controllers/PatientController.php
        patient::findOrFail($id)->delete();
        return redirect('patients');
=======
        donar::findOrFail($id)->delete();
        return redirect('donars');
>>>>>>> e80d5e232a238130e54b9a75ed39dc5354a26b22:app/Http/Controllers/DonarController.php
    }
}
