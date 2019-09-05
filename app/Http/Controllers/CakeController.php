<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cake_designer;
use Auth;
use Image;
use DB;


class CakeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $cake = DB::table('cake_designers')
                ->join('users','users.id','=','cake_designers.user_id')
                ->get();


        return view('Cake', compact('cake'));
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
        $cake = new Cake_designer;
        $cake->Organization_Name=$request->Organization_Name;
        $cake->Address=$request->Address;
        $cake->Contact_No =$request->Contact_No;
        $cake->Link =$request->Link;
        $cake->Description =$request->Description;
        $cake->Wedding_cake =$request->Wedding_cake;
        $cake->Birthday_cake =$request->Birthday_cake;
        $cake->Cake_Structure=$request->Cake_Structure;
        $cake->Pastry_cake=$request->Pastry_cake;
        $cake->Cup_Cake =$request->Cup_Cake;
        $cake->Other=$request->Other;
        
        $cake->user_id = Auth::user()->id;
        
        if($request->hasFile('Main_pic'))
          {
             $Main_pic=$request->file('Main_pic');
           
             $filename=time().'.'.$Main_pic->getClientOriginalExtension();
             Image::make($Main_pic)->resize(960,640)->save(public_path('/uploads/cake/'. $filename));

             
             $cake->Main_pic=$filename;
             
         }

         if($request->hasFile('pic1'))
          {
             $pic1=$request->file('pic1');
           
             $filename=time().'.'.$pic1->getClientOriginalExtension();
             Image::make($pic1)->resize(960,640)->save(public_path('/uploads/cake/'. $filename));

             
             $cake->pic1=$filename;
             
         }

         if($request->hasFile('pic2'))
          {
             $pic2=$request->file('pic2');
           
             $filename=time().'.'.$pic2->getClientOriginalExtension();
             Image::make($pic2)->resize(960,640)->save(public_path('/uploads/cake/'. $filename));

             
             $cake->pic2=$filename;
             
         }

         if($request->hasFile('pic3'))
          {
             $pic3=$request->file('pic3');
           
             $filename=time().'.'.$pic3->getClientOriginalExtension();
             Image::make($pic3)->resize(960,640)->save(public_path('/uploads/cake/'. $filename));

             
             $cake->pic3=$filename;
             
         }

         if($request->hasFile('pic4'))
          {
             $pic4=$request->file('pic4');
           
             $filename=time().'.'.$pic4->getClientOriginalExtension();
             Image::make($pic4)->resize(960,640)->save(public_path('/uploads/cake/'. $filename));

             
             $cake->pic4=$filename;
             
         }
                $cake->save();

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
                ->join('cake_designers','users.id','=','cake_designers.user_id')
                
                ->where('category','=','Cake_Designers')
                ->get();

                return view('Cakeview',compact('data'));
    }

}
