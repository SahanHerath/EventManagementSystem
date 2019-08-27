<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Decorator;
use App\Decorator_event;
use Auth;
use Image;
use DB;

class decorationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $decos = DB::table('decorators')
                ->join('users','users.id','=','decorators.user_id')
                ->get();


        return view('Decorator', compact('decos'));
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
        $decorate = new Decorator;
        $decorate->Team_Name=$request->Team_Name;
        $decorate->Address=$request->Address;
        $decorate->Contact_No =$request->Contact_No;
        $decorate->Link =$request->Link;
        $decorate->Description =$request->Description;
        $decorate->Poruwa =$request->Poruwa;
        $decorate->Flower =$request->Flower;
        $decorate->Table_Hall=$request->Table_Hall;
        $decorate->Setty_Backs=$request->Setty_Backs;
        $decorate->Lighting=$request->Lighting;
        $decorate->Traditional=$request->Traditional;
        $decorate->Wedding_Car=$request->Wedding_Car;
        $decorate->user_id = Auth::user()->id;
        
        if($request->hasFile('Main_Pic'))
          {
             $Main_Pic=$request->file('Main_Pic');
           
             $filename=time().'.'.$Main_Pic->getClientOriginalExtension();
             Image::make($Main_Pic)->resize(480,480)->save(public_path('/uploads/decoration/'. $filename));

             
             $decorate->Main_Pic=$filename;
             
         }

         if($request->hasFile('pic1'))
          {
             $pic1=$request->file('pic1');
           
             $filename=time().'.'.$pic1->getClientOriginalExtension();
             Image::make($pic1)->resize(1920,1080)->save(public_path('/uploads/decoration/'. $filename));

             
             $decorate->pic1=$filename;
             
         }

         if($request->hasFile('pic2'))
          {
             $pic2=$request->file('pic2');
           
             $filename=time().'.'.$pic2->getClientOriginalExtension();
             Image::make($pic2)->resize(1920,1080)->save(public_path('/uploads/decoration/'. $filename));

             
             $decorate->pic2=$filename;
             
         }

         if($request->hasFile('pic3'))
          {
             $pic3=$request->file('pic3');
           
             $filename=time().'.'.$pic3->getClientOriginalExtension();
             Image::make($pic3)->resize(1920,1080)->save(public_path('/uploads/decoration/'. $filename));

             
             $decorate->pic3=$filename;
             
         }

         if($request->hasFile('pic4'))
          {
             $pic4=$request->file('pic4');
           
             $filename=time().'.'.$pic4->getClientOriginalExtension();
             Image::make($pic4)->resize(1920,1080)->save(public_path('/uploads/decoration/'. $filename));

             
             $decorate->pic4=$filename;
             
         }
             $decorate->save();


            $decorate_event = new Decorator_event;
            $decorate_event->user_id = Auth::user()->id;
            $decorate_event->Wedding=$request->Wedding;
            $decorate_event->Birthday =$request->Birthday;
            $decorate_event->Get_Together =$request->Get_Together;
            $decorate_event->Outside_events =$request->Outside_events;
            $decorate_event->Parties =$request->Parties;
            
            $decorate_event->save();

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
                ->join('decorators','users.id','=','decorators.user_id')
                ->join('decorator_events','users.id','=','decorator_events.user_id')
                ->get();

                return view('DecoratorView',compact('data'));
    }

    public function wedding()
    {
        //
        $decos = DB::table('decorators')
                ->join('users','users.id','=','decorators.user_id')
                ->join('decorator_events','users.id','=','decorator_events.user_id')
                ->where('decorator_events.Wedding','=','Available')
                ->get();


        return view('Decorator', compact('decos'));
    }

    public function birthday()
    {
        //
        $decos = DB::table('decorators')
                ->join('users','users.id','=','decorators.user_id')
                ->join('decorator_events','users.id','=','decorator_events.user_id')
                ->where('decorator_events.Birthday','=','Available')
                ->get();


        return view('Decorator', compact('decos'));
    }

    public function party()
    {
        //
        $decos = DB::table('decorators')
                ->join('users','users.id','=','decorators.user_id')
                ->join('decorator_events','users.id','=','decorator_events.user_id')
                ->where('decorator_events.Parties','=','Available')
                ->get();


        return view('Decorator', compact('decos'));
    }

    public function outside()
    {
        //
        $decos = DB::table('decorators')
                ->join('users','users.id','=','decorators.user_id')
                ->join('decorator_events','users.id','=','decorator_events.user_id')
                ->where('decorator_events.Outside_events','=','Available')
                ->get();


        return view('Decorator', compact('decos'));
    }

    

    
}
