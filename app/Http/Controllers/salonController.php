<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Salon;
use App\Salon_event;
use Auth;
use Image;
use DB;

class salonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $level = DB::table('salons')
                ->join('users','users.id','=','salons.user_id')
                ->get();
      
       
       return view('Salon', compact('level'));

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
        $salon = new Salon;
        $salon->Salon_Name=$request->Salon_Name;
        $salon->Address=$request->Address;
        $salon->Contact_No =$request->Contact_No;
        $salon->Link =$request->Link;
        $salon->Description =$request->Description;
        $salon->Groom_Dressing =$request->Groom_Dressing;
        $salon->Bride_Dressing =$request->Bride_Dressing;
        $salon->Dress_Making =$request->Dress_Making;
        $salon->Jewelry =$request->Jewelry;
        $salon->Makeup=$request->Makeup;
        $salon->Bridesman=$request->Bridesman;
        $salon->Bridesmaid=$request->Bridesmaid;
        $salon->HairStyle=$request->HairStyle;
        
        $salon->user_id = Auth::user()->id;
        
        if($request->hasFile('Profile_Pic'))
          {
             $Profile_Pic=$request->file('Profile_Pic');
           
             $filename=time().'.'.$Profile_Pic->getClientOriginalExtension();
             Image::make($Profile_Pic)->resize(960,640)->save(public_path('/uploads/salon/'. $filename));

             
             $salon->Profile_Pic=$filename;
             
         }

         if($request->hasFile('pic1'))
          {
             $pic1=$request->file('pic1');
           
             $filename=time().'.'.$pic1->getClientOriginalExtension();
             Image::make($pic1)->resize(960,640)->save(public_path('/uploads/salon/'. $filename));

             
             $salon->pic1=$filename;
             
         }

         if($request->hasFile('pic2'))
          {
             $pic2=$request->file('pic2');
           
             $filename=time().'.'.$pic2->getClientOriginalExtension();
             Image::make($pic2)->resize(960,640)->save(public_path('/uploads/salon/'. $filename));

             
             $salon->pic2=$filename;
             
         }

         if($request->hasFile('pic3'))
          {
             $pic3=$request->file('pic3');
           
             $filename=time().'.'.$pic3->getClientOriginalExtension();
             Image::make($pic3)->resize(960,640)->save(public_path('/uploads/salon/'. $filename));

             
             $salon->pic3=$filename;
             
         }

         if($request->hasFile('pic4'))
          {
             $pic4=$request->file('pic4');
           
             $filename=time().'.'.$pic4->getClientOriginalExtension();
             Image::make($pic4)->resize(960,640)->save(public_path('/uploads/salon/'. $filename));

             
             $salon->pic4=$filename;
             
         }
             $salon->save();


            $salon_event = new Salon_event;
            $salon_event->user_id = Auth::user()->id;
            $salon_event->wedding=$request->wedding;
            $salon_event->parties =$request->parties;
            $salon_event->fashion_show =$request->fashion_show;
            
            
            
            $salon_event->save();

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
                ->join('salons','users.id','=','salons.user_id')
                ->join('salon_events','users.id','=','salon_events.user_id')
                ->where('category','=','Bridel_Designers')
                ->get();

                return view('SalonView',compact('data'));
    }

    public function wedding()
    {
        //
        $level = DB::table('salons')
                ->join('users','users.id','=','salons.user_id')
                ->join('salon_events','users.id','=','salon_events.user_id')
                ->where('salon_events.wedding','=','Available')
                ->get();
      
       
       return view('Salon', compact('level'));

    }

    public function party()
    {
        //
        $level = DB::table('salons')
                ->join('users','users.id','=','salons.user_id')
                ->join('salon_events','users.id','=','salon_events.user_id')
                ->where('salon_events.parties','=','Available')
                ->get();
      
       
       return view('Salon', compact('level'));

    }
}
 