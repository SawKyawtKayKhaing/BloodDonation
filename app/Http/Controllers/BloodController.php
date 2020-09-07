<?php

namespace App\Http\Controllers;

use App\blood;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class BloodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //    
            $bloods=blood::all();
        return view('blood.index',['bloods'=>$bloods]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('blood.create');
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
        $bloods=new blood();
        $bloods->blood_group = $request->blood;
        $bloods->bag_number = $request->bag;
        $bloods->save();
        return redirect()->action('/bloods');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\blood  $blood
     * @return \Illuminate\Http\Response
     */
    public function show(blood $blood)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\blood  $blood
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $bloods=blood::find($id);
        return view('blood.edit',['blood'=>blood::get(),'bloods'=>$bloods]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\blood  $blood
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $bloods=blood::find($id);
        $bloods->blood_group = $request->blood;
        $bloods->bag_number=$request->bag_number;
        $bloods->save();
        return redirect('bloods');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\blood  $blood
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        blood::findOrFail($id)->delete();
        return redirect('bloods');
    }
}
