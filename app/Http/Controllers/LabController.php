<?php

namespace App\Http\Controllers;
use App\blood;
use App\lab;
use Illuminate\Http\Request;

class LabController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $labs=lab::all();
        return view('lab.index',['labs'=>$labs]);
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
        return view('lab.create',['bloods'=>$bloods]);
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
        $labs=new lab();
        $labs->Hepatitis_B=$request->hepatitisb;
        $labs->Hepatitis_C=$request->hepatitisc;
        $labs->HIV=$request->hiv;
        $labs->Malaria=$request->malaria;
        $labs->bloods_id=$request->blood_id;
        $labs->save();
        return redirect('labs');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\lab  $lab
     * @return \Illuminate\Http\Response
     */
    public function show(lab $lab)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\lab  $lab
     * @return \Illuminate\Http\Response
     */
    public function edit(lab $lab)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\lab  $lab
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, lab $lab)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\lab  $lab
     * @return \Illuminate\Http\Response
     */
    public function destroy(lab $lab)
    {
        //
    }
}
