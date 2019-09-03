<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Costume_designer;
use App\Costume_designer_event;
use DB;
use Auth;
use images;

class CostumeDesignerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $level = DB::table('costume_designers')
                ->join('users','users.id','=','costume_designers.user_id')
                ->get();
      
       
       return view('CostumeDesigner', compact('level'));

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
        $costume = new Costume_designer;
        $costume->Name=$request->Name;
        $costume->Address=$request->Address;
        $costume->Contact_No =$request->Contact_No;
        $costume->Link =$request->Link;
        $costume->Description =$request->Description;
        $costume->wedding_dress_designs =$request->wedding_dress_designs;
        $costume->clothing_orders=$request->clothing_orders	;
        $costume->sport_kit_designs=$request->sport_kit_designs;
        $costume->saree_work=$request->saree_work;
        $costume->traditional_dress =$request->traditional_dress;
        $costume->gents_wear=$request->gents_wear;
        $costume->ladies_wear=$request->ladies_wear;
        $costume->gents_foot_wear=$request->gents_foot_wear;
        $costume->ladies_foot_wear=$request->ladies_foot_wear;
        $costume->sports_shoes=$request->sports_shoes;
        $costume->user_id = Auth::user()->id;
        
        if($request->hasFile('Main_pic'))
          {
             $Main_pic=$request->file('Main_pic');
           
             $filename=time().'.'.$Main_pic->getClientOriginalExtension();
             Image::make($Main_pic)->resize(960,640)->save(public_path('/uploads/costume/'. $filename));

             
             $costume->Main_pic=$filename;
             
         }

         if($request->hasFile('pic1'))
          {
             $pic1=$request->file('pic1');
           
             $filename=time().'.'.$pic1->getClientOriginalExtension();
             Image::make($pic1)->resize(960,640)->save(public_path('/uploads/costume/'. $filename));

             
             $costume->pic1=$filename;
             
         }

         if($request->hasFile('pic2'))
          {
             $pic2=$request->file('pic2');
           
             $filename=time().'.'.$pic2->getClientOriginalExtension();
             Image::make($pic2)->resize(960,640)->save(public_path('/uploads/costume/'. $filename));

             
             $costume->pic2=$filename;
             
         }

         if($request->hasFile('pic3'))
          {
             $pic3=$request->file('pic3');
           
             $filename=time().'.'.$pic3->getClientOriginalExtension();
             Image::make($pic3)->resize(960,640)->save(public_path('/uploads/costume/'. $filename));

             
             $costume->pic3=$filename;
             
         }

         if($request->hasFile('pic4'))
          {
             $pic4=$request->file('pic4');
           
             $filename=time().'.'.$pic4->getClientOriginalExtension();
             Image::make($pic4)->resize(960,640)->save(public_path('/uploads/costume/'. $filename));

             
             $costume->pic4=$filename;
             
         }
                $costume->save();


            $costume_event = new Dancer_event;
            $costume_event->user_id = Auth::user()->id;
            $costume_event->Wedding=$request->Wedding;
            $costume_event->Party =$request->Party;
            $costume_event->fashion_show =$request->fashion_show;
            $costume_event->sports =$request->sports;
            $costume_event->Coperate_event =$request->Coperate_event;
            
            $costume_event->save();

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

    public function viewProfile($id)
    {
        $data = DB::table('users')
                ->where('users.id','=',$id)
                ->join('costume_designers','users.id','=','costume_designers.user_id')
                ->join('costume_designer_events','users.id','=','costume_designer_events.user_id')
                ->where('category','=','Cloth_Designers')
                ->get();

                return view('CostumeDesignerView',compact('data'));
    }

    

    
}


