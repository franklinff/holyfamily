<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ContactUs;

class ContactUsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create_contactus');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $input = array(
            'name_1' => isset($request->priest_name[0]) ? $request->priest_name[0] : null,
            'name_2' => isset($request->priest_name[1]) ? $request->priest_name[1] : null,
            'name_3' => isset($request->priest_name[2]) ? $request->priest_name[2] : null,
            'name_4' => isset($request->priest_name[3]) ? $request->priest_name[3] : null,
            'number_1' => isset($request->priest_number[0]) ? $request->priest_number[0] : null,
            'number_2' => isset($request->priest_number[1]) ? $request->priest_number[1] : null,
            'number_3' => isset($request->priest_number[2]) ? $request->priest_number[2] : null,
            'number_4' => isset($request->priest_number[3]) ? $request->priest_number[3] : null,
            'address' => $request->church_address,
            'googlemap' => 'trial',
            'email' => $request->email_add,
            'created_at' => date('Y-m-d H-i-s'),
            'updated_at' => null
        );
        ContactUs::updateOrCreate(['id' => 1], $input);

        return redirect()->back();
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
