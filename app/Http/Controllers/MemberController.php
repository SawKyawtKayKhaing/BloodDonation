<?php

namespace App\Http\Controllers;
use App\organization;
use App\donar;
use App\member;
use Illuminate\Http\Request;
use Illuminate\Facades\DB;
class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $members=member::all();
        return view('member.index',['members'=>$members]);
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
        
        $donars=donar::get();
        return view('member.create',['organizations'=>$organizations],['donars'=>$donars]);
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
        $members=new member();
        $members->name = $request->name;
        $members->gender=$request->gender;
        $members->address=$request->address;
        $members->phone=$request->phone;
        $members->age=$request->age;
        $members->date_of_birth=$request->dob;
        $members->organization_id=$request->organization_id;
        $members->donar_id=$request->donar_id;
        $members->save();
        return redirect()->action('/members');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\member  $member
     * @return \Illuminate\Http\Response
     */
    public function show(member $member)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\member  $member
     * @return \Illuminate\Http\Response
     */
    public function edit(member $member)
    {
        //
        $members=member::find($id);
        $organizations=organization::get();
        $donars=donar::get();
        return view('member.edit',compact('members','organizations','donars'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\member  $member
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, member $member)
    {
        //
        $members=member::find($id);
        $members->name = $request->name;
        $members->gender=$request->gender;
        $members->address=$request->address;
        $members->phone=$request->phone;
        $members->age=$request->age;
        $members->date_of_birth=$request->dob;
        $members->organization_id=$request->organization_id;
        $members->donar_id=$request->donar_id;
        $members->save();
        return redirect('members');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\member  $member
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        member::findOrFail($id)->delete();
        return redirect('members');
    }
}
