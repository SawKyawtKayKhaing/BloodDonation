<?php

namespace App\Http\Controllers;
use App\lab;
use App\accept;
use Illuminate\Http\Request;

class AcceptController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $accepts=accept::all();
        return view('accept.index',['accepts'->$accepts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $labs=lab::get();
        return view('accept.create',['labs'->$labs]);
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
        $accepts=new accept();
        $accepts->date_of_accept=$request->accept;
        $accepts->labs_id=$request->lab_id;
        $accepts->save();
        return redirect('accepts');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\accept  $accept
     * @return \Illuminate\Http\Response
     */
    public function show(accept $accept)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\accept  $accept
     * @return \Illuminate\Http\Response
     */
    public function edit(accept $accept)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\accept  $accept
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, accept $accept)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\accept  $accept
     * @return \Illuminate\Http\Response
     */
    public function destroy(accept $accept)
    {
        //
    }
}
