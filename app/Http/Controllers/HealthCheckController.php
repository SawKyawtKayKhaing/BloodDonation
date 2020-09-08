<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Facades\DB;
use App\health_check;
use App\donar;
class HealthCheckController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $health_checks=health_check::get();
        return view('health_check.index',['health_checks'=>$health_checks]);
    

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $donars=donar::get();
        return view('health_check.create',['donars'=>$donars]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {    $this->validate($request,['pressure'=>'required|max:255',]);
        //
        $health_checks=new health_check();
        $health_checks->blood_pressure=$request->pressure;
        $health_checks->weight=$request->weight;
        $health_checks->medical_status=$request->medical;
        $health_checks->period_of_time=$request->period_of_time;
        $health_checks->donars_id=$request->donar_id;
        $health_checks->save();
        return redirect('/health_checks');
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
        $donars=donar::get();
        return view('health_check.edit',['donars'=>$donars]);
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
        $health_checks=health_check::find($id);
        $health_checks->blood_pressure=$request->pressure;
        $health_checks->weight=$request->weight;
        $health_checks->medical_status=$request->medical;
        $health_checks->period_of_time=$request->period_of_time;
        $health_checks->donars_id=$request->donar_id;
        $health_checks->save();
        return redirect('/health_checks');
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
        health_check::findOrFail($id)->delete();
        return redirect('health_checks');

    }
}
