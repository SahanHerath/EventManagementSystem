<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Image;
use App\Hotel;
use App\Hall_event;
use App\Hall_feature;
use App\Reception_hall;
use App\Hall_table_arrangement;
use DB;

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
        $hall = DB::table('hotels')
                ->join('users','users.id','=','hotels.user_id')
                ->get();


        return view('hotel', compact('hall'));
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

    public function storeReceptionHall(request $request, $id)
    {
        $hall = new Reception_hall;
        $hall->Hall_Name=$request->Hall_Name;
        $hall->Address=$request->Address;
        $hall->Cost =$request->Cost;
        $hall->Capacity =$request->Capacity;
        $hall->Description =$request->Description;
        $hall->Square_feet =$request->Square_feet;
        $hall->Overview =$request->Overview;
        
        $hall->hotel_id = $id;
        
        if($request->hasFile('Main_pic'))
          {
             $Main_pic=$request->file('Main_pic');
           
             $filename=time().'.'.$Main_pic->getClientOriginalExtension();
             Image::make($Main_pic)->resize(960,640)->save(public_path('/uploads/hall/'. $filename));

             
             $hall->Main_pic=$filename;
             
         }

         if($request->hasFile('pic1'))
          {
             $pic1=$request->file('pic1');
           
             $filename=time().'.'.$pic1->getClientOriginalExtension();
             Image::make($pic1)->resize(960,640)->save(public_path('/uploads/hall/'. $filename));

             
             $hall->pic1=$filename;
             
         }

         if($request->hasFile('pic2'))
          {
             $pic2=$request->file('pic2');
           
             $filename=time().'.'.$pic2->getClientOriginalExtension();
             Image::make($pic2)->resize(960,640)->save(public_path('/uploads/hall/'. $filename));

             
             $hall->pic2=$filename;
             
         }

         if($request->hasFile('pic3'))
          {
             $pic3=$request->file('pic3');
           
             $filename=time().'.'.$pic3->getClientOriginalExtension();
             Image::make($pic3)->resize(960,640)->save(public_path('/uploads/hall/'. $filename));

             
             $hall->pic3=$filename;
             
         }

         if($request->hasFile('pic4'))
          {
             $pic4=$request->file('pic4');
           
             $filename=time().'.'.$pic4->getClientOriginalExtension();
             Image::make($pic4)->resize(960,640)->save(public_path('/uploads/hall/'. $filename));

             
             $hall->pic4=$filename;
             
         }
            $hall->save();


            $hall_event = new Hall_event;
            $hall_event->hall_id = $hall->id;
            $hall_event->Wedding=$request->Wedding;
            $hall_event->Party =$request->Party;
            $hall_event->Meeting =$request->Meeting;
            
            $hall_event->Corporate_event =$request->Corporate_event;
            $hall_event->Professional_Event =$request->Professional_Event;
            $hall_event->save();



            $hall_item = new Hall_feature;
            $hall_item->hall_id = $hall->id;
            $hall_item->projection=$request->projection;
            $hall_item->internet =$request->internet;
            $hall_item->parking =$request->parking;
            $hall_item->security_camera=$request->security_camera;
            $hall_item->security_personal =$request->security_personal;
            $hall_item->reception_area =$request->reception_area;
            $hall_item->Bar =$request->Bar;
            $hall_item->garden =$request->garden;
            $hall_item->smoking_area =$request->smoking_area;
            $hall_item->welcome_drinks =$request->welcome_drinks;
            $hall_item->Buffet =$request->Buffet;
            $hall_item->Handicap_accessible =$request->Handicap_accessible;
            $hall_item->outside_balcony =$request->outside_balcony;
            $hall_item->inside_balcony =$request->inside_balcony;
            $hall_item->stage =$request->stage;
            $hall_item->save();

            $hall_arrange = new Hall_table_arrangement;
            $hall_arrange->hall_id = $hall->id;
            $hall_arrange->theatre=$request->theatre;
            $hall_arrange->U_shape =$request->U_shape;
            $hall_arrange->V_shape =$request->V_shape;
            $hall_arrange->classroom=$request->classroom;
            $hall_arrange->hallow_square =$request->hallow_square;
            $hall_arrange->Boardroom =$request->Boardroom;
            $hall_arrange->Oval =$request->Oval;
            $hall_arrange->Herringbone =$request->Herringbone;
            $hall_arrange->Top_table_springs =$request->Top_table_springs;
            $hall_arrange->banquet =$request->banquet;
            $hall_arrange->cabaret =$request->cabaret;
            $hall_arrange->informal =$request->informal;
            
            $hall_arrange->save();

            return view('home');
    }

    public function viewHotel($id)
    {
        $hotel=DB::table('hotels')
              ->join('users','users.id','=','hotels.user_id')
              ->join('reception_halls','hotels.id','=','reception_halls.hotel_id')
              ->get();

              return view('WeddingHotelProfile',compact('hotel'));
    }
}
