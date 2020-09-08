<?php

namespace App\Http\Controllers;

use App\NeededBLood;
use App\blood;
use Illuminate\Http\Request;
use Illuminate\Facades\DB;
class NeededBloodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $neededbloods=NeededBlood::all();
        return view('neededblood.index',['neededbloods'=>$neededbloods]);
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
        return  view('neededblood.create',['bloods'=>$bloods]);
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
        $neededbloods=new NeededBlood();
        $neededbloods->quantity = $request->quantity;
        $neededbloods->datetime = $request->datetime;
        $neededbloods->bloods_id=$request->blood_id;
        $neededbloods->save();
        return redirect()->action('/neededbloods');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\NeededBLood  $neededBLood
     * @return \Illuminate\Http\Response
     */
    public function show(NeededBLood $neededBLood)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\NeededBLood  $neededBLood
     * @return \Illuminate\Http\Response
     */
    public function edit(NeededBLood $neededBLood)
    {
        //
        $neededbloods=NeededBlood::find($id);
        $bloods=blood::get();
        return view('neededblood.edit',compact('neededbloods','bloods'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\NeededBLood  $neededBLood
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, NeededBLood $neededBLood)
    {
        //
        $neededbloods=NeededBlood::find($id);
        $neededbloods->quantity = $request->quantity;
        $neededbloods->datetime = $request->datetime;
        $neededbloods->bloods_id=$request->blood_id;
        $neededbloods->save();
        return redirect('/neededbloods');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\NeededBLood  $neededBLood
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        NeededBlood::findOrFail($id)->delete();
        return redirect('neededbloods');
    }
}
