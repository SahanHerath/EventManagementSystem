<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dancer;
use App\Dancer_event;
use DB;
use Auth;
use Image;

class DancingController extends Controller
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
        $dancing = new Dancer;
        $dancing->Team_Name=$request->Team_Name;
        $dancing->Address=$request->Address;
        $dancing->Contact_No =$request->Contact_No;
        $dancing->Link =$request->Link;
        $dancing->Description =$request->Description;
        $dancing->choreography =$request->choreography;
        $dancing->Gender =$request->Gender;
        $dancing->Traditional=$request->Traditional;
        $dancing->Western=$request->Western;
        $dancing->Indian =$request->Indian;
        $dancing->Kandyan=$request->Kandyan;
        $dancing->Casual=$request->Casual;
        $dancing->Other=$request->Other;
        $dancing->user_id = Auth::user()->id;
        
        if($request->hasFile('Main_pic'))
          {
             $Main_pic=$request->file('Main_pic');
           
             $filename=time().'.'.$Main_pic->getClientOriginalExtension();
             Image::make($Main_pic)->resize(960,640)->save(public_path('/uploads/dancing/'. $filename));

             
             $dancing->Main_pic=$filename;
             
         }

         if($request->hasFile('pic1'))
          {
             $pic1=$request->file('pic1');
           
             $filename=time().'.'.$pic1->getClientOriginalExtension();
             Image::make($pic1)->resize(960,640)->save(public_path('/uploads/dancing/'. $filename));

             
             $dancing->pic1=$filename;
             
         }

         if($request->hasFile('pic2'))
          {
             $pic2=$request->file('pic2');
           
             $filename=time().'.'.$pic2->getClientOriginalExtension();
             Image::make($pic2)->resize(960,640)->save(public_path('/uploads/dancing/'. $filename));

             
             $dancing->pic2=$filename;
             
         }

         if($request->hasFile('pic3'))
          {
             $pic3=$request->file('pic3');
           
             $filename=time().'.'.$pic3->getClientOriginalExtension();
             Image::make($pic3)->resize(960,640)->save(public_path('/uploads/dancing/'. $filename));

             
             $dancing->pic3=$filename;
             
         }

         if($request->hasFile('pic4'))
          {
             $pic4=$request->file('pic4');
           
             $filename=time().'.'.$pic4->getClientOriginalExtension();
             Image::make($pic4)->resize(960,640)->save(public_path('/uploads/dancing/'. $filename));

             
             $dancing->pic4=$filename;
             
         }
                $dancing->save();


            $dance_event = new Dancer_event;
            $dance_event->user_id = Auth::user()->id;
            $dance_event->Wedding=$request->Wedding;
            $dance_event->Party =$request->Party;
            
            $dance_event->Musical_event =$request->Musical_event;
            $dance_event->Corporate_event =$request->Corporate_event;
            
            
            $dance_event->save();

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
