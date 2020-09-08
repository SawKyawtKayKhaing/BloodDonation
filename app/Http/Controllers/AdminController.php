<?php

namespace App\Http\Controllers;
use App\admin;
use App\organization;
use Illuminate\Http\Request;
use Illuminate\Facades\DB;
class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $admins=admin::all();
        return view('admin.index',['admins'=>$admins]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $organizations=organization::get();
        return view('admin.create',['organizations'=>$organizations]);
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
        $admins=new admin();
        $admins->name = $request->name;
        $admins->address=$request->address;
        $admins->phone=$request->phone;
        $admins->organization_id=$request->organization_id;
        $admins->save();
        return redirect()->action('/admins');
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
        $admins=admin::find($id);
        $organizations=organization::get();
        return view('admin.edit',compact('admins','organizations'));
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
        $admins=new admin();
        $admins->name = $request->name;
        $admins->address=$request->address;
        $admins->phone=$request->phone;
        $admins->organization_id=$request->organization_id;
        $admins->save();
        return redirect('admins');
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
        admin::findOrFail($id)->delete();
        return redirect('admins');
    }
}
