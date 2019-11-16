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

    public function removesuggestions($id)
    {
        $data=Suggestion::where('id',$id)->delete();

        return redirect()->back();
    }

    public function Finance()
    {
        //
        $data=DB::table('suggestions')
            ->where('Regarding','=','Financial') 
            ->get();

        return view('suggestions.Finance',compact('data'));
    }
    public function Service()
    {
        //
        $data=DB::table('suggestions')
            ->where('Regarding','=','Services') 
            ->get();

        return view('suggestions.Services',compact('data'));
    }
    public function Community()
    {
        //
        $data=DB::table('suggestions')
            ->where('Regarding','=','Community') 
            ->get();

        return view('suggestions.Community',compact('data'));
    }
    public function Development()
    {
        //
        $data=DB::table('suggestions')
            ->where('Regarding','=','Development') 
            ->get();

        return view('suggestions.Development',compact('data'));
    }
    public function General()
    {
        //
        $data=DB::table('suggestions')
            ->where('Regarding','=','General Info') 
            ->get();

        return view('suggestions.General',compact('data'));
    }
    public function Advertising()
    {
        //
        $data=DB::table('suggestions')
            ->where('Regarding','=','Advertising') 
            ->get();

        return view('suggestions.Advertising',compact('data'));
    }
    public function Bug()
    {
        //
        $data=DB::table('suggestions')
            ->where('Regarding','=','Website Bug') 
            ->get();

        return view('suggestions.Website',compact('data'));
    }
    public function Donation()
    {
        //
        $data=DB::table('suggestions')
            ->where('Regarding','=','Donations') 
            ->get();

        return view('suggestions.Donations',compact('data'));
    }
}
