<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('staff.index',[
            'staffs' => Staff::paginate(10),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('staff.create');
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
        $validated = $request->validate([
            'name' => 'required|string|min:2',
            'address' => 'required|string',
            'email' => 'required|email|unique:users,email',
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
        ]);
        // dd($request->all());
        $staff = new Staff();
        $staff->name = $validated['name'];
        $staff->address = $validated['address'];
        $staff->email = $validated['email'];
        $staff->phone = $validated['phone'];
        $staff->save();

        return redirect('/staffs')->with('status', 'Kakitangan Baru ( '. $validated['name'] .' ) Telah Ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function show(Staff $staff)
    {
        //
        return view('staff.show',[
            'staff' => $staff,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function edit(Staff $staff)
    {
        //
        return view('staff.edit',[
            'staff' => $staff,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Staff $staff)
    {
        //
        $validated = $request->validate([
            'name' => 'required|string|min:2',
            'address' => 'required|string',
            'email' => 'required|email|unique:users,email',
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
        ]);
        // dd($request->all());
        $staff->name = $validated['name'];
        $staff->address = $validated['address'];
        $staff->email = $validated['email'];
        $staff->phone = $validated['phone'];
        $staff->save();

        return redirect('/staffs')->with('status', 'Kakitangan ( '. $validated['name'] .' ) Telah Dikemaskini');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function destroy(Staff $staff)
    {
        //
        $staff->delete();

        return redirect('/staffs')->with('status', 'Maklumat Kakitangan ( '. $staff->name .' ) Telah Dihapus');
    }
}
