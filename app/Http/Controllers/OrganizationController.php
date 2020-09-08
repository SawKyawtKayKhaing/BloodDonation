<?php

namespace App\Http\Controllers;
use App\organization;
use App\NeededBlood;
use App\donar;
use Illuminate\Http\Request;
use Illuminate\Facades\DB;
class OrganizationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $organizations=organization::all();
        return view('organization.index',['organizations'=>$organizations]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        //$organizations=organization::get();
        $neededbloods=NeededBlood::get();
        $donars=donar::get();
        return view('organization.create',['neededbloods'=>$neededbloods,'donars'=>$donars]);
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
        $organizations=new organization();
        $organizations->name = $request->name;
        $organizations->address=$request->address;
        $organizations->phone=$request->phone;
        $organizations->needed_bloods_id=$request->neededblood_id;
        $organizations->donars_id=$request->donar_id;
        $organizations->save();
        return redirect()->action('/organizations');
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
        $organizations=organization::find($id);
        $neededbloods=NeededBlood::get();
        $donars=donar::get();
        return view('organization.edit',compact('organizations','neededbloods','donars'));
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
        $organizations=organization::find($id);
        $organizations->name = $request->name;
        $organizations->address=$request->address;
        $organizations->phone=$request->phone;
        $organizations->needed_bloods_id=$request->neededblood_id;
        $organizations->donars_id=$request->donar_id;

        $organizations->save();
        return redirect('organizations');

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
        organization::findOrFail($id)->delete();
        return redirect('organizations');
    }
}
