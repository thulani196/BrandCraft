<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ServiceRequest;

class RequestsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */



    public function index()
    {
        return view('requests');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'fullname'=>'required',
            'organization'=>'required',
            'personal_number'=>'required',
            'org_number'=>'required',
            'service'=>'required',
            'date'=>'required',
        ]);

        $req = new ServiceRequest;
        $req->customer_name = $request->input('fullname');
        $req->organization = $request->input('organization');
        $req->phone_number = $request->input('personal_number');
        $req->org_phone = $request->input('org_number');
        $req->service = $request->input('service');
        $req->date= $request->input('date');
        
        $req->save();
        return redirect('requests')->with('success','Service request successfully submitted!');
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
    }
}
