<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Catering;
use App\Catering_event;
use DB;
use Image;
use Auth;

class CateringController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $level = DB::table('caterings')
        ->join('users','users.id','=','caterings.user_id')
        ->get();


return view('catering', compact('level'));
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
        $catering = new Catering;
        $catering->Service_Name=$request->Service_Name;
        $catering->Address=$request->Address;
        $catering->Contact_No =$request->Contact_No;
        $catering->Link =$request->Link;
        $catering->Description =$request->Description;
        $catering->Welcome_drink =$request->Welcome_drink;
        $catering->Catering_set =$request->Catering_set;
        $catering->Catering_tent=$request->Catering_tent;
        $catering->Cake=$request->Cake;
        $catering->Special_Food =$request->Special_Food;
        $catering->Garden_umbrella=$request->Garden_umbrella;
        $catering->Coffee_Machine=$request->Coffee_Machine;
        $catering->Table_chair=$request->Table_chair;
        $catering->sink =$request->sink;
        $catering->dessert=$request->dessert;
        
        $catering->user_id = Auth::user()->id;
        
        if($request->hasFile('Main_pic'))
          {
             $Main_pic=$request->file('Main_pic');
           
             $filename=time().'.'.$Main_pic->getClientOriginalExtension();
             Image::make($Main_pic)->resize(960,640)->save(public_path('/uploads/catering/'. $filename));

             
             $catering->Main_pic=$filename;
             
         }

         if($request->hasFile('pic1'))
          {
             $pic1=$request->file('pic1');
           
             $filename=time().'.'.$pic1->getClientOriginalExtension();
             Image::make($pic1)->resize(960,640)->save(public_path('/uploads/catering/'. $filename));

             
             $catering->pic1=$filename;
             
         }

         if($request->hasFile('pic2'))
          {
             $pic2=$request->file('pic2');
           
             $filename=time().'.'.$pic2->getClientOriginalExtension();
             Image::make($pic2)->resize(960,640)->save(public_path('/uploads/catering/'. $filename));

             
             $catering->pic2=$filename;
             
         }

         if($request->hasFile('pic3'))
          {
             $pic3=$request->file('pic3');
           
             $filename=time().'.'.$pic3->getClientOriginalExtension();
             Image::make($pic3)->resize(960,640)->save(public_path('/uploads/catering/'. $filename));

             
             $catering->pic3=$filename;
             
         }

         if($request->hasFile('pic4'))
          {
             $pic4=$request->file('pic4');
           
             $filename=time().'.'.$pic4->getClientOriginalExtension();
             Image::make($pic4)->resize(960,640)->save(public_path('/uploads/catering/'. $filename));

             
             $catering->pic4=$filename;
             
         }
            $catering->save();

            $catering_event = new Catering_event;
            $catering_event->user_id = Auth::user()->id;
            $catering_event->Wedding=$request->Wedding;
            $catering_event->Birthday =$request->Birthday;
            $catering_event->Party =$request->Party;
            $catering_event->Corporate_event =$request->Corporate_event;
            $catering_event->Funeral =$request->Funeral;
            
            $catering_event->save();

            
           

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
                ->join('caterings','users.id','=','caterings.user_id')
                ->where('category','=','Catering')
                ->get();

                return view('cateringview',compact('data'));
    }
}
