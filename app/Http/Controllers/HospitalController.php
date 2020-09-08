<?php

namespace App\Http\Controllers;

use App\hospital;
use App\patient;
use App\NeededBlood;
use Illuminate\Http\Request;

class HospitalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $hospitals=hospital::all();
        return view('hospital.index',['hospitals'=>$hospitals]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $patients=patient::get();
        $neededbloods=NeededBlood::get();
        return view('hospital.create',['patients'=>$patients],['neededbloods'=>$neededbloods]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $hospitals=new hospital();
        $hospitals->name = $request->name;
        $hospitals->address=$request->address;
        $hospitals->phone=$request->phone;
        $hospitals->patient_id=$request->patient_id;
        $hospitals->neededbloods_id=$request->needed_bloods_id;
        $hospitals->save();
        return redirect()->action('/hospitals');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\hospital  $hospital
     * @return \Illuminate\Http\Response
     */
    public function show(hospital $hospital)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\hospital  $hospital
     * @return \Illuminate\Http\Response
     */
    public function edit(hospital $hospital)
    {
        //
        $hospitals=hospital::find($id);
        $patients=patient::get();
        $neededbloods=NeededBlood::get();
        return view('hospital.edit',compact('hospitals','patients','neededbloods'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\hospital  $hospital
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, hospital $hospital)
    {
        //
        $hospitals=hospital::find($id);
        $hospitals->name = $request->name;
        $hospitals->address=$request->address;
        $hospitals->phone=$request->phone;
        $hospitals->patient_id=$request->patient_id;
        $hospitals->neededbloods_id=$request->needed_bloods_id;
        $hospitals->save();
        return redirect('/hospitals');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\hospital  $hospital
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        hospital::findOrFail($id)->delete();
        return redirect('hospitals');
    }
}
