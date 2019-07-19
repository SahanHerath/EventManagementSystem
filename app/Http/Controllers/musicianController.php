<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Musician;
use Auth;
use App\Musician_event;
use Image;

class musicianController extends Controller
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
        $music = new Musician;
        $music->Dj_Name=$request->Dj_Name;
        $music->Address=$request->Address;
        $music->ContactNo =$request->ContactNo;
        $music->Link =$request->Link;
        $music->Description =$request->Description;
        $music->Playing_Hrs =$request->Playing_Hrs;
        $music->Payment =$request->Payment;
        $music->Extra_Cost=$request->Extra_Cost;
        $music->Fire=$request->Fire;
        $music->Smoke=$request->Smoke;
        $music->Lights=$request->Lights;
        $music->user_id = Auth::user()->id;
        
        if($request->hasFile('Main_Logo'))
          {
             $Main_Logo=$request->file('Main_Logo');
           
             $filename=time().'.'.$Main_Logo->getClientOriginalExtension();
             Image::make($Main_Logo)->resize(960,640)->save(public_path('/uploads/music/'. $filename));

             
             $music->Main_Logo=$filename;
             
         }

         if($request->hasFile('pic1'))
          {
             $pic1=$request->file('pic1');
           
             $filename=time().'.'.$pic1->getClientOriginalExtension();
             Image::make($pic1)->resize(960,640)->save(public_path('/uploads/music/'. $filename));

             
             $music->pic1=$filename;
             
         }

         if($request->hasFile('pic2'))
          {
             $pic2=$request->file('pic2');
           
             $filename=time().'.'.$pic2->getClientOriginalExtension();
             Image::make($pic2)->resize(960,640)->save(public_path('/uploads/music/'. $filename));

             
             $music->pic2=$filename;
             
         }

         if($request->hasFile('pic3'))
          {
             $pic3=$request->file('pic3');
           
             $filename=time().'.'.$pic3->getClientOriginalExtension();
             Image::make($pic3)->resize(960,640)->save(public_path('/uploads/music/'. $filename));

             
             $music->pic3=$filename;
             
         }
             $music->save();


            $music_event = new Musician_event;
            $music_event->user_id = Auth::user()->id;
            $music_event->Wedding=$request->Wedding;
            $music_event->Birthday =$request->Birthday;
            $music_event->Beach_Party =$request->Beach_Party;
            $music_event->Get_Together =$request->Get_Together;
            $music_event->Parties =$request->Parties;
            
            $music_event->save();

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
