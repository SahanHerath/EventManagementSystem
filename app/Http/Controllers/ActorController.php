<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Actor;
use App\Actor_event;
use Auth;
use Image;
use DB;

class ActorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {    $level = DB::table('actors')
                ->join('users','users.id','=','actors.user_id')
                ->get();
      
       
       return view('Actor', compact('level'));
      
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
        $actor = new Actor;
        $actor->Actor_name=$request->Actor_name;
        $actor->Address=$request->Address;
        $actor->Contact_No =$request->Contact_No;
        $actor->Link =$request->Link;
        $actor->Description =$request->Description;
        $actor->Singer =$request->Singer;
        $actor->Magician =$request->Magician;
        $actor->Comedian=$request->Comedian;
        $actor->Actor=$request->Actor;
        $actor->Announcer =$request->Announcer;
        $actor->Entertainer=$request->Entertainer;
        $actor->Other=$request->Other;
        $actor->user_id = Auth::user()->id;
        
        if($request->hasFile('Main_pic'))
          {
             $Main_pic=$request->file('Main_pic');
           
             $filename=time().'.'.$Main_pic->getClientOriginalExtension();
             Image::make($Main_pic)->resize(960,640)->save(public_path('/uploads/actor/'. $filename));

             
             $actor->Main_pic=$filename;
             
         }

         if($request->hasFile('pic1'))
          {
             $pic1=$request->file('pic1');
           
             $filename=time().'.'.$pic1->getClientOriginalExtension();
             Image::make($pic1)->resize(960,640)->save(public_path('/uploads/actor/'. $filename));

             
             $actor->pic1=$filename;
             
         }

         if($request->hasFile('pic2'))
          {
             $pic2=$request->file('pic2');
           
             $filename=time().'.'.$pic2->getClientOriginalExtension();
             Image::make($pic2)->resize(960,640)->save(public_path('/uploads/actor/'. $filename));

             
             $actor->pic2=$filename;
             
         }

         if($request->hasFile('pic3'))
          {
             $pic3=$request->file('pic3');
           
             $filename=time().'.'.$pic3->getClientOriginalExtension();
             Image::make($pic3)->resize(960,640)->save(public_path('/uploads/actor/'. $filename));

             
             $actor->pic3=$filename;
             
         }

         if($request->hasFile('pic4'))
          {
             $pic4=$request->file('pic4');
           
             $filename=time().'.'.$pic4->getClientOriginalExtension();
             Image::make($pic4)->resize(960,640)->save(public_path('/uploads/actor/'. $filename));

             
             $actor->pic4=$filename;
             
         }
                $actor->save();


            $actor_event = new Actor_event;
            $actor_event->user_id = Auth::user()->id;
            $actor_event->Birthday=$request->Birthday;
            $actor_event->Party =$request->Party;
            $actor_event->Professional_event =$request->Professional_event;
            $actor_event->Musical_event =$request->Musical_event;
            $actor_event->Corporate_event =$request->Corporate_event;
            
            
            $actor_event->save();

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
                ->join('actors','users.id','=','actors.user_id')
                ->join('actor_events','users.id','=','actor_events.user_id')
                ->get();

                return view('ActorView',compact('data'));
    }

    public function birthdayMagician(Request $request)
    {    $level = DB::table('actors')
                ->join('users','users.id','=','actors.user_id')
                ->join('actor_events','users.id','=','actor_events.user_id')
                ->where('actor_events.Birthday','=','Available')
                ->where('Magician','=','Available')
                ->get();
      
       
       return view('Actor', compact('level'));
      
    }

    public function birthdayEntertainer(Request $request)
    {    $level = DB::table('actors')
                ->join('users','users.id','=','actors.user_id')
                ->join('actor_events','users.id','=','actor_events.user_id')
                ->where('actor_events.Birthday','=','Available')
                ->where('Entertainer','=','Available')
                ->get();
      
       
       return view('Actor', compact('level'));
      
    }

    public function partyEntertainer(Request $request)
    {    $level = DB::table('actors')
                ->join('users','users.id','=','actors.user_id')
                ->join('actor_events','users.id','=','actor_events.user_id')
                ->where('actor_events.Party','=','Available')
                ->where('Entertainer','=','Available')
                ->get();
      
       
       return view('Actor', compact('level'));
      
    }

    public function profAnnouncer(Request $request)
    {    $level = DB::table('actors')
                ->join('users','users.id','=','actors.user_id')
                ->join('actor_events','users.id','=','actor_events.user_id')
                ->where('actor_events.Professional_event','=','Available')
                ->where('Announcer','=','Available')
                ->get();
      
       
       return view('Actor', compact('level'));
      
    }

    public function copAnnouncer(Request $request)
    {    $level = DB::table('actors')
                ->join('users','users.id','=','actors.user_id')
                ->join('actor_events','users.id','=','actor_events.user_id')
                ->where('actor_events.Corporate_event','=','Available')
                ->where('Announcer','=','Available')
                ->get();
      
       
       return view('Actor', compact('level'));
      
    }

    public function copEntertainer(Request $request)
    {    $level = DB::table('actors')
                ->join('users','users.id','=','actors.user_id')
                ->join('actor_events','users.id','=','actor_events.user_id')
                ->where('actor_events.Corporate_event','=','Available')
                ->where('Entertainer','=','Available')
                ->get();
      
       
       return view('Actor', compact('level'));
      
    }

    public function singer(Request $request)
    {    $level = DB::table('actors')
                ->join('users','users.id','=','actors.user_id')
                ->join('actor_events','users.id','=','actor_events.user_id')
                ->where('actor_events.Musical_event','=','Available')
                ->where('Singer','=','Available')
                ->get();
      
       
       return view('Actor', compact('level'));
      
    }

    public function musicAnnouncer(Request $request)
    {    $level = DB::table('actors')
                ->join('users','users.id','=','actors.user_id')
                ->join('actor_events','users.id','=','actor_events.user_id')
                ->where('actor_events.Musical_event','=','Available')
                ->where('Announcer','=','Available')
                ->get();
      
       
       return view('Actor', compact('level'));
      
    }
    public function profile()
    {
        
    }
}
