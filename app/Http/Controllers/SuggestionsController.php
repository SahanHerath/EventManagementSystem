<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Suggestion;

class SuggestionsController extends Controller
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
        $request->validate(
            ['Email' => 'required|string|max:255|email',
            'Name' =>'required|string|max:255',
            'Message' =>'required|string|max:500',
            'Contact_No' =>'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'Regarding' =>'required|string|max:20',
            
            
            
           
        ],
        ['Email.required'=> "Fill out this field",
        'Name.required'=> "Fill out this field",
        'Message.required'=> "Fill out this field",
        'Contact_No.required'=> "Fill out this field",
        'Regarding.required'=> "Fill out this field",
        
        
        ]
    );
        
        $suggest = new Suggestion;
        
        $suggest->Name=$request->Name;
        $suggest->Email =$request->Email;
        $suggest->Contact_No =$request->Contact_No;
        $suggest->Regarding =$request->Regarding;
        $suggest->Message =$request->Message;
        $suggest->state ="0";
        $suggest->save();

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

    public function allsuggestions()
    {
        //
        $data=DB::table('suggestions')
             ->get();

        return view('suggestions',compact('data'));
    }
}
