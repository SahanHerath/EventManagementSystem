<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Image;
use App\Hotel;
use App\Hall_event;
use App\Hall_feature;
use App\Reception_hall;

class HallController extends Controller
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
        $hotel = new Hotel;
        $hotel->Hotel_Name=$request->Hotel_Name;
        $hotel->Address=$request->Address;
        $hotel->Contact_No =$request->Contact_No;
        $hotel->Link =$request->Link;
        $hotel->Description =$request->Description;
        
        $hotel->user_id = Auth::user()->id;
        
        if($request->hasFile('Main_logo'))
          {
             $Main_logo=$request->file('Main_logo');
           
             $filename=time().'.'.$Main_logo->getClientOriginalExtension();
             Image::make($Main_logo)->resize(960,640)->save(public_path('/uploads/hall/'. $filename));

             
             $hotel->Main_logo=$filename;
             
         }

         $hotel->save();

         $id=$hotel->id;

         return view('CreateHall',compact('id'));
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
