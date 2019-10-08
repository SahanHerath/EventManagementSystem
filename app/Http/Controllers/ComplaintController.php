<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Complaint;

class ComplaintController extends Controller
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
        //
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

    public function form($id)
    {
        //
        $data=DB::table('users')
             ->where('users.id','=',$id)
             ->get();

        return view('YourComplaint',compact('data'));
    }

    public function addcomplaint(request $request)
    {
        //
        $request->validate(
            ['user_email' => 'required|string|max:255|email',
            'complaint_about' =>'required|string|max:20',
            'complaint' =>'required|string|max:500',
            
            
            
           
        ],
        ['user_email.required'=> "Fill out this field",
        'complaint_about.required'=> "Fill out this field",
        'complaint.required'=> "Fill out this field",
        
        
        ]
    );
        
        $complaint = new Complaint;
        
        $complaint->user_email=$request->user_email;
        $complaint->user_id =$request->id;
        $complaint->complaint_about =$request->complaint_about;
        $complaint->complaint =$request->complaint;
        $complaint->save();

         return redirect()->back()->with('flash_message','Your Complaint is Added');

    }
}
