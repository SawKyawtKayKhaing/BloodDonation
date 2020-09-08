<?php

namespace App\Http\Controllers;

use App\record;
use App\blood;
use App\donar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class RecordController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $records=record::all();
        return view('records.index',['records'->$records]);
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
        $donars=donar::get();
        return view('records.create',['bloods'=>$bloods],['donars'=>$donars]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   $this->validate($request,['units'=>'required|max:255',]);  

        //
        $records=new record();
        $records->units=$request->units;
        $records->last_date=$request->last-date;
        $records->available=$request->available;
        $records->blood_id=$request->blood_id;
        $records->donar_id=$request->donar_id;
        $records->save();
        return redirect('/records');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\record  $record
     * @return \Illuminate\Http\Response
     */
    public function show(record $record)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\record  $record
     * @return \Illuminate\Http\Response
     */
    public function edit(record $record)
    {
        //
        $bloods=blood::get();
        $donars=donar::get();
        return view('bloods.edit',compact('bloods','donars'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\record  $record
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $records=record::find($id);
        $records->units=$request->units;
        $records->last_date=$request->last-date;
        $records->available=$request->available;
        $records->blood_id=$request->blood_id;
        $records->donar_id=$request->donar_id;
        $records->save();
        return redirect('/records');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\record  $record
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        record::findOrFail($id)->delete();
        return redirect('records');
    }
}
