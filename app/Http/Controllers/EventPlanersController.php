<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event_planner;
use App\Event_planners_event;
use Auth;
use Image;
use DB;


class EventPlanersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $level = DB::table('event_planners')
                ->join('users','users.id','=','event_planners.user_id')
                ->get();
      
       
       return view('EventPlanner', compact('level'));
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
        $request->validate(
            ['Organization_name' => 'required|string|max:255',
            'Address' => 'required|string|max:255',
            'Contact_No' =>'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'Link' =>'required|string|max:255',
            'Description' =>'required|string|max:500',
            
            
            'Main_pic'=> 'required|image|dimensions:min_width=300,min_height=100',
            'pic1' => 'required|image|dimensions:min_width=300,min_height=100',
            'pic2' => 'required|image|dimensions:min_width=300,min_height=100',
            'pic3' => 'required|image|dimensions:min_width=300,min_height=100',
            'pic4' => 'required|image|dimensions:min_width=300,min_height=100',
            'Wedding' => 'required|string|max:20',
            'Outside_event' => 'required|string|max:20',
            'Corporate_event' => 'required|string|max:20',
            'Meetings'=> 'required|string|max:20',
            'Parties'=> 'required|string|max:20',
            'Sport_event'=> 'required|string|max:20',

        ],
        ['Organization_name.required'=> "Fill out this field",
        'Address.required'=> "Fill out this field",
        'Contact_No.required'=> "Fill out this field",
        'Link.required'=> "Fill out this field",
        'Description.required'=> "Fill out this field",
        
        'Main_pic.required'=> "Add a image here",
        'pic1.required'=> "Add a image here",
        'pic2.required'=> "Add a image here",
        'pic3.required' => "Add a image here",
        'pic4.required'=> "Add a image here",
        'Wedding.required'=> "Fill out this field",
        'Outside_event	.required'=> "Fill out this field",
        'Corporate_event.required' => "Fill out this field",
        'Meetings.required'=> "Fill out this field",
        'Parties.required'=> "Fill out this field",
        'Sport_event.required'=> "Fill out this field"
       

        ]
    );
        $plan = new Event_planner;
        $plan->Organization_name=$request->Organization_name;
        $plan->Address=$request->Address;
        $plan->Contact_No =$request->Contact_No;
        $plan->Link =$request->Link;
        $plan->Description =$request->Description;
        
        $plan->user_id = Auth::user()->id;
        
        if($request->hasFile('Main_pic'))
          {
             $Main_pic=$request->file('Main_pic');
           
             $filename=time().'.'.$Main_pic->getClientOriginalExtension();
             Image::make($Main_pic)->fit(960,640)->save(public_path('/uploads/event/'. $filename));

             
             $plan->Main_pic=$filename;
             
         }

         if($request->hasFile('pic1'))
          {
             $pic1=$request->file('pic1');
           
             $filename=time().'.'.$pic1->getClientOriginalExtension();
             Image::make($pic1)->fit(960,640)->save(public_path('/uploads/event/'. $filename));

             
             $plan->pic1=$filename;
             
         }

         if($request->hasFile('pic2'))
          {
             $pic2=$request->file('pic2');
           
             $filename=time().'.'.$pic2->getClientOriginalExtension();
             Image::make($pic2)->fit(960,640)->save(public_path('/uploads/event/'. $filename));

             
             $plan->pic2=$filename;
             
         }

         if($request->hasFile('pic3'))
          {
             $pic3=$request->file('pic3');
           
             $filename=time().'.'.$pic3->getClientOriginalExtension();
             Image::make($pic3)->fit(960,640)->save(public_path('/uploads/event/'. $filename));

             
             $plan->pic3=$filename;
             
         }

         if($request->hasFile('pic4'))
          {
             $pic4=$request->file('pic4');
           
             $filename=time().'.'.$pic4->getClientOriginalExtension();
             Image::make($pic4)->fit(960,640)->save(public_path('/uploads/event/'. $filename));

             
             $plan->pic4=$filename;
             
         }
                $plan->save();


            $event_event = new Event_planners_event;
            $event_event->user_id = Auth::user()->id;
            $event_event->Wedding=$request->Wedding;
            $event_event->Parties =$request->Parties;
            $event_event->Meetings =$request->Meetings;
            
            $event_event->Corporate_event =$request->Corporate_event;
            $event_event->Outside_event =$request->Outside_event;
            $event_event->Sport_event =$request->Sport_event;
            
            
            $event_event->save();

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
                ->join('event_planners','users.id','=','event_planners.user_id')
                ->join('event_planners_events','users.id','=','event_planners_events.user_id')
                ->where('category','=','Event_Planners')
                ->get();

                return view('EventPlannerView',compact('data'));
    }

    public function wedding()
    {
        //
        $level = DB::table('event_planners')
                ->join('users','users.id','=','event_planners.user_id')
                ->join('event_planners_events','users.id','=','event_planners_events.user_id')
                ->where('event_planners_events.Wedding','=','Available')
                ->get();
      
       
       return view('EventPlanner', compact('level'));
    }

    public function party()
    {
        //
        $level = DB::table('event_planners')
                ->join('users','users.id','=','event_planners.user_id')
                ->join('event_planners_events','users.id','=','event_planners_events.user_id')
                ->where('event_planners_events.Parties','=','Available')
                ->get();
      
       
       return view('EventPlanner', compact('level'));
    }

    public function prof()
    {
        //
        $level = DB::table('event_planners')
                ->join('users','users.id','=','event_planners.user_id')
                ->join('event_planners_events','users.id','=','event_planners_events.user_id')
                ->where('event_planners_events.Meetings','=','Available')
                ->get();
      
       
       return view('EventPlanner', compact('level'));
    }

    public function coperate()
    {
        //
        $level = DB::table('event_planners')
                ->join('users','users.id','=','event_planners.user_id')
                ->join('event_planners_events','users.id','=','event_planners_events.user_id')
                ->where('event_planners_events.Corporate_event','=','Available')
                ->get();
      
       
       return view('EventPlanner', compact('level'));
    }

    public function outside()
    {
        //
        $level = DB::table('event_planners')
                ->join('users','users.id','=','event_planners.user_id')
                ->join('event_planners_events','users.id','=','event_planners_events.user_id')
                ->where('event_planners_events.Outside_event','=','Available')
                ->get();
      
       
       return view('EventPlanner', compact('level'));
    }

    public function sport()
    {
        //
        $level = DB::table('event_planners')
                ->join('users','users.id','=','event_planners.user_id')
                ->join('event_planners_events','users.id','=','event_planners_events.user_id')
                ->where('event_planners_events.Sport_event','=','Available')
                ->get();
      
       
       return view('EventPlanner', compact('level'));
    }

    public function profile()
    {
        $id1 = Auth::id();
        $data = DB::table('event_planners')
                ->join('users','users.id','=','event_planners.user_id')
                ->join('event_planners_events','users.id','=','event_planners_events.user_id')
                ->where('category','=','Event_Planners')
                ->where('users.id','=',$id1)
                ->select('users.id as userid','name','email','event_planners.id as plannersid','Organization_name', 'Address', 'Description','Contact_No','Link','Main_pic','pic1','pic2','pic3','pic4','event_planners_events.id as eventid','Wedding', 'Parties', 'Meetings','Corporate_event','Outside_event','Sport_event')
                ->get();

                return view('EventPlannerUserProfile',compact('data'));
    }
    
}
