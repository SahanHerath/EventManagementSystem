<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Poruwa_ceramony;
use DB;
use Auth;
use Image;

class PoruwaController extends Controller
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
        $Poruwa = new Poruwa_ceramony;
        $Poruwa->Name=$request->Name;
        $Poruwa->Address=$request->Address;
        $Poruwa->Contact_No =$request->Contact_No;
        $Poruwa->Link =$request->Link;
        $Poruwa->Description =$request->Description;
        $Poruwa->Poruwa_rituals =$request->Poruwa_rituals;
        $Poruwa->Poruwa_items =$request->Poruwa_items;
        $Poruwa->match_making=$request->match_making;
        $Poruwa->Astrological_support=$request->Astrological_support;
        $Poruwa->jayamangala_gatha =$request->jayamangala_gatha;
        $Poruwa->Wedding_dancers=$request->Wedding_dancers;
        $Poruwa->Cost=$request->Cost;
        $Poruwa->user_id = Auth::user()->id;
        
        if($request->hasFile('Main_pic'))
          {
             $Main_pic=$request->file('Main_pic');
           
             $filename=time().'.'.$Main_pic->getClientOriginalExtension();
             Image::make($Main_pic)->resize(960,640)->save(public_path('/uploads/Poruwa/'. $filename));

             
             $Poruwa->Main_pic=$filename;
             
         }

         if($request->hasFile('pic1'))
          {
             $pic1=$request->file('pic1');
           
             $filename=time().'.'.$pic1->getClientOriginalExtension();
             Image::make($pic1)->resize(960,640)->save(public_path('/uploads/Poruwa/'. $filename));

             
             $Poruwa->pic1=$filename;
             
         }

         if($request->hasFile('pic2'))
          {
             $pic2=$request->file('pic2');
           
             $filename=time().'.'.$pic2->getClientOriginalExtension();
             Image::make($pic2)->resize(960,640)->save(public_path('/uploads/Poruwa/'. $filename));

             
             $Poruwa->pic2=$filename;
             
         }

         if($request->hasFile('pic3'))
          {
             $pic3=$request->file('pic3');
           
             $filename=time().'.'.$pic3->getClientOriginalExtension();
             Image::make($pic3)->resize(960,640)->save(public_path('/uploads/Poruwa/'. $filename));

             
             $Poruwa->pic3=$filename;
             
         }

         if($request->hasFile('pic4'))
          {
             $pic4=$request->file('pic4');
           
             $filename=time().'.'.$pic4->getClientOriginalExtension();
             Image::make($pic4)->resize(960,640)->save(public_path('/uploads/Poruwa/'. $filename));

             
             $Poruwa->pic4=$filename;
             
         }
            $Poruwa->save();

            return view('home');

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
