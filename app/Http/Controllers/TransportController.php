<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Transporter;
use App\Transport_Category;
use Auth;
use Image;

class TransportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $trans = DB::table('transporters')
                ->join('users','users.id','=','transporters.user_id')
                ->get();


        return view('Transport', compact('trans'));
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
        $transport = new Transporter;
        $transport->Transport_Service=$request->Transport_Service;
        $transport->Address=$request->Address;
        $transport->Contact_No =$request->Contact_No;
        $transport->Link =$request->Link;
        $transport->Description =$request->Description;
        $transport->driver =$request->driver;
        $transport->decoration =$request->decoration;
        $transport->rent_hours=$request->rent_hours;
        $transport->rent_km=$request->rent_km;
        $transport->user_id = Auth::user()->id;
        
        if($request->hasFile('Main_pic'))
          {
             $Main_pic=$request->file('Main_pic');
           
             $filename=time().'.'.$Main_pic->getClientOriginalExtension();
             Image::make($Main_pic)->resize(960,640)->save(public_path('/uploads/transport/'. $filename));

             
             $transport->Main_pic=$filename;
             
         }

         if($request->hasFile('pic1'))
          {
             $pic1=$request->file('pic1');
           
             $filename=time().'.'.$pic1->getClientOriginalExtension();
             Image::make($pic1)->resize(960,640)->save(public_path('/uploads/transport/'. $filename));

             
             $transport->pic1=$filename;
             
         }

         if($request->hasFile('pic2'))
          {
             $pic2=$request->file('pic2');
           
             $filename=time().'.'.$pic2->getClientOriginalExtension();
             Image::make($pic2)->resize(960,640)->save(public_path('/uploads/transport/'. $filename));

             
             $transport->pic2=$filename;
             
         }

         if($request->hasFile('pic3'))
          {
             $pic3=$request->file('pic3');
           
             $filename=time().'.'.$pic3->getClientOriginalExtension();
             Image::make($pic3)->resize(960,640)->save(public_path('/uploads/transport/'. $filename));

             
             $transport->pic3=$filename;
             
         }

         if($request->hasFile('pic4'))
          {
             $pic4=$request->file('pic4');
           
             $filename=time().'.'.$pic4->getClientOriginalExtension();
             Image::make($pic4)->resize(960,640)->save(public_path('/uploads/transport/'. $filename));

             
             $transport->pic4=$filename;
             
         }
             $transport->save();


            $trans_cat = new Transport_Category;
            $trans_cat->user_id = Auth::user()->id;
            $trans_cat->luxury=$request->luxury;
            $trans_cat->classic =$request->classic;
            $trans_cat->vintage =$request->vintage;
            $trans_cat->horse_cart =$request->horse_cart;
            $trans_cat->air =$request->air;
            $trans_cat->travelling_coach =$request->travelling_coach;
            
            $trans_cat->save();

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
