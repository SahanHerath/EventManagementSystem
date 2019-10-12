<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Event_planner;
use App\Event_planners_event;
use App\Planner_package;
use Auth;
use Image;
use DB;
use App\Award;


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

            $award=new Award;
            $award->user_id=Auth::user()->id;
            $award->save();

            return redirect('/home');
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
                ->select('users.id as userid','name','email','event_planners.id as plannerid','Organization_name', 'Address', 'Description','Contact_No','Link','Main_pic','pic1','pic2','pic3','pic4','event_planners_events.id as eventid','Wedding', 'Parties', 'Meetings','Corporate_event','Outside_event','Sport_event')
                ->get();

        $deto=DB::table('users')
                ->join('planner_packages','users.id','=','planner_packages.user_id')
                ->where('users.id','=',$id)
                ->select('planner_packages.id','Package_Name', 'Services','Price','Pdf')
                ->get();

        $rate=DB::table('users')
                ->join('ratings','ratings.user_id','=','users.id')
                ->where('users.id','=',$id)
                ->where('blocked','=',"0")
                ->select('ratings.id','rating','Comment','ratings.Email','image','ratings.created_at','user_name')
                ->get();
    
        $average=DB::table('ratings')
                   ->where('ratings.user_id','=',$id)
                   ->where('blocked','=',"0")
                   ->avg('rating');
    
        $one=DB::table('ratings')
                   ->where('ratings.user_id','=',$id)
                   ->where('blocked','=',"0")
                   ->where('rating','=','1')
                   ->count();
    
        $two=DB::table('ratings')
                   ->where('ratings.user_id','=',$id)
                   ->where('blocked','=',"0")
                   ->where('rating','=','2')
                   ->count();
    
        $three=DB::table('ratings')
                   ->where('ratings.user_id','=',$id)
                   ->where('blocked','=',"0")
                   ->where('rating','=','3')
                   ->count();
    
        $four=DB::table('ratings')
                   ->where('ratings.user_id','=',$id)
                   ->where('blocked','=',"0")
                   ->where('rating','=','4')
                   ->count();
    
        $five=DB::table('ratings')
                   ->where('ratings.user_id','=',$id)
                   ->where('blocked','=',"0")
                   ->where('rating','=','5')
                   ->count();
    
        $all=DB::table('ratings')
                   ->where('ratings.user_id','=',$id)
                   ->where('blocked','=',"0")
                   ->count();
    
            if($all!=0)
            {
                $precentage1=$one/$all*100;
                $precentage2=$two/$all*100;
                $precentage3=$three/$all*100;
                $precentage4=$four/$all*100;
                $precentage5=$five/$all*100;
            }
            else 
            {
                $precentage1=0;
                $precentage2=0;
                $precentage3=0;
                $precentage4=0;
                $precentage5=0;
            }
    

                return view('EventPlannerView',compact('data','deto','rate','average','one','two','three','four','five','all','precentage1','precentage2','precentage3','precentage4','precentage5'));
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

        $deto=DB::table('users')
                ->join('planner_packages','users.id','=','planner_packages.user_id')
                ->where('users.id','=',$id1)
                ->select('planner_packages.id','Package_Name', 'Services','Price','Pdf')
                ->get();

                return view('EventPlannerUserProfile',compact('data','deto'));
    }

    public function eventUpdate(Request $request, $id)
    {
        

        $data=Event_planners_event::where('id',$id)
            
        ->update([
                'Wedding'=>$request->Wedding,
                'Parties'=>$request->Parties,
                'Meetings'=>$request->Meetings,
                'Corporate_event'=>$request->Corporate_event,
                'Outside_event'=>$request->Outside_event,
                'Sport_event'=>$request->Sport_event,
               

                
        ]);

        return redirect('/Profile');
    }

    public function InfoUpdate(Request $request, $userid, $plannersid)
    {
        //
        $request->validate(
            ['Organization_name' => 'required|string|max:255',
            'Address' => 'required|string|max:255',
            'Contact_No' =>'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'Link' =>'required|string|max:255',
            'Description' =>'required|string|max:500',
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            
            
           
        ],
        ['Organization_name.required'=> "Fill out this field",
        'Address.required'=> "Fill out this field",
        'Contact_No.required'=> "Fill out this field",
        'Link.required'=> "Fill out this field",
        'Description.required'=> "Fill out this field",
        'name.required'=> "Fill out this field",
        'email.required'=> "Fill out this field",
      
        
         ]
    );
        
        
       

        $data=Event_planner::where('id',$plannersid)
            
        ->update([
                'Organization_name'=>$request->Organization_name,
                'Address'=>$request->Address,
                'Description'=>$request->Description,
                'Contact_No'=>$request->Contact_No,
                'Link'=>$request->Link,
                

                
        ]);
        

        

        $plan1  = User::find($userid); 
        $plan1  ->name=$request->name;
        $plan1 ->email=$request->email;
        $plan1  ->update();

        
        return redirect('/Profile');
        
    }

    public function removeAccount($id)
    {
        $id1 = Auth::user()->id;

      

            if($id==$id1)
            {
                $event1 = User::findOrFail($id); 
                $event1->delete();
                $plan1 = Event_planner::where('user_id',$id)->delete();
                $plan2 = Event_planners_event::where('user_id',$id)->delete();
                
                
                return redirect('/');
            }
            else 
            {
                return redirect('/home'); 
            }
        
    }

    public function changeMainPic(request $request,$id)
    {
            $id1 = Auth::user()->id;
            
            $data=DB::table('users')
                ->join('event_planners','users.id','=','event_planners.user_id')
                ->where('users.id','=',$id1)
                ->select('event_planners.id')
                ->get();

                $request->validate(
                [
                    'Main_pic'=> 'required|image|dimensions:min_width=300,min_height=100',
                ],
                [
                    'Main_pic.required'=> "Add a image here",
                ]
            );
            
            
            foreach($data as $data1)
            {
                if($data1->id==$id)
                {
                    if($request->hasFile('Main_pic'))
                    {
                        $Main_pic=$request->file('Main_pic');
                        $filename=time().'.'.$Main_pic->getClientOriginalExtension();
                        Image::make($Main_pic)->fit(480,480)->save(public_path('/uploads/event/'. $filename));

                        $picture=Event_planner::where('id',$id)
                        ->update([
                                'Main_pic'=>$filename


                        ]);
                    }

                    return redirect('/Profile')->with('flash_message','Change Main Picture Successfully');
                }

                else
                {
                    return redirect('/');
                }
            }
            
    }

    public function changePic1(request $request,$id)
    {
            $id1 = Auth::user()->id;
            
            $data=DB::table('users')
                ->join('event_planners','users.id','=','event_planners.user_id')
                ->where('users.id','=',$id1)
                ->select('event_planners.id')
                ->get();

                $request->validate(
                [
                    'pic1'=> 'required|image|dimensions:min_width=300,min_height=100',
                ],
                [
                    'pic1.required'=> "Add a image here",
                ]
            );
            
            
            foreach($data as $data1)
            {
                if($data1->id==$id)
                {
                    if($request->hasFile('pic1'))
                    {
                        $pic1=$request->file('pic1');
                        $filename=time().'.'.$pic1->getClientOriginalExtension();
                        Image::make($pic1)->fit(1920,1080)->save(public_path('/uploads/event/'. $filename));

                        $picture=Event_planner::where('id',$id)
                        ->update([
                                'pic1'=>$filename


                        ]);
                    }

                    return redirect('/Profile')->with('flash_message','Change Your Pictures Successfully');
                }

                else
                {
                    return redirect('/');
                }
            }
            
    }

    public function changePic2(request $request,$id)
    {
            $id1 = Auth::user()->id;
            
            $data=DB::table('users')
                ->join('event_planners','users.id','=','event_planners.user_id')
                ->where('users.id','=',$id1)
                ->select('event_planners.id')
                ->get();

                $request->validate(
                [
                    'pic2'=> 'required|image|dimensions:min_width=300,min_height=100',
                ],
                [
                    'pic2.required'=> "Add a image here",
                ]
            );
            
            
            foreach($data as $data1)
            {
                if($data1->id==$id)
                {
                    if($request->hasFile('pic2'))
                    {
                        $pic2=$request->file('pic2');
                        $filename=time().'.'.$pic2->getClientOriginalExtension();
                        Image::make($pic2)->fit(1920,1080)->save(public_path('/uploads/event/'. $filename));

                        $picture=Event_planner::where('id',$id)
                        ->update([
                                'pic2'=>$filename


                        ]);
                    }

                    return redirect('/Profile')->with('flash_message','Change Your Pictures Successfully');
                }

                else
                {
                    return redirect('/');
                }
            }
            
    }

    public function changePic3(request $request,$id)
    {
            $id1 = Auth::user()->id;
            
            $data=DB::table('users')
                ->join('event_planners','users.id','=','event_planners.user_id')
                ->where('users.id','=',$id1)
                ->select('event_planners.id')
                ->get();

                $request->validate(
                [
                    'pic3'=> 'required|image|dimensions:min_width=300,min_height=100',
                ],
                [
                    'pic3.required'=> "Add a image here",
                ]
            );
            
            
            foreach($data as $data1)
            {
                if($data1->id==$id)
                {
                    if($request->hasFile('pic3'))
                    {
                        $pic3=$request->file('pic3');
                        $filename=time().'.'.$pic3->getClientOriginalExtension();
                        Image::make($pic3)->fit(1920,1080)->save(public_path('/uploads/event/'. $filename));

                        $picture=Event_planner::where('id',$id)
                        ->update([
                                'pic3'=>$filename


                        ]);
                    }

                    return redirect('/Profile')->with('flash_message','Change Your Pictures Successfully');
                }

                else
                {
                    return redirect('/');
                }
            }
            
    }

    public function changePic4(request $request,$id)
    {
            $id1 = Auth::user()->id;
            
            $data=DB::table('users')
                ->join('event_planners','users.id','=','event_planners.user_id')
                ->where('users.id','=',$id1)
                ->select('event_planners.id')
                ->get();

                $request->validate(
                [
                    'pic4'=> 'required|image|dimensions:min_width=300,min_height=100',
                ],
                [
                    'pic4.required'=> "Add a image here",
                ]
            );
            
            
            foreach($data as $data1)
            {
                if($data1->id==$id)
                {
                    if($request->hasFile('pic4'))
                    {
                        $pic4=$request->file('pic4');
                        $filename=time().'.'.$pic4->getClientOriginalExtension();
                        Image::make($pic4)->fit(1920,1080)->save(public_path('/uploads/event/'. $filename));

                        $picture=Event_planner::where('id',$id)
                        ->update([
                                'pic4'=>$filename


                        ]);
                    }

                    return redirect('/Profile')->with('flash_message','Change Your Pictures Successfully');
                }

                else
                {
                    return redirect('/');
                }
            }
            
    }

    public function AddNewPackage(request $request,$id)
    {
        $request->validate(
            ['Package_Name' => 'required|string|max:255',
            'Services' =>'required|string|max:500',
            'Price' =>'required|numeric|min:0',
            'Pdf' =>'required|mimes:pdf',
            
            
           
        ],
        ['Package_Name.required'=> "Fill out this field",
        'Services.required'=> "Fill out this field",
        'Price.required'=> "Fill out this field",
        'Pdf.required'=> "Fill out this field",
        
        ]
    );
        
        $planner_package = new Planner_package;
        $planner_package->user_id = Auth::user()->id;
        $planner_package->Package_Name=$request->Package_Name;
        $planner_package->Services =$request->Services;
        $planner_package->Price =$request->Price;

        if($request->hasFile('Pdf'))
          {
             $Pdf=$request->file('Pdf');
           
             $filename=time().'.'.$Pdf->getClientOriginalExtension();
             $Pdf->move(public_path('/files/photography') , $filename);
             $planner_package->Pdf=$filename;
             
         }
        
         $planner_package->save();

         return redirect('/Profile')->with('flash_message','Add New Package Successfully');
    }

    public function EditPackage(request $request)
    {
        $request->validate(
            ['Package_Name1' => 'required|string|max:255',
            'Services1' =>'required|string|max:500',
            'Price1' =>'required|numeric|min:0',
           
            
            
           
        ],
        ['Package_Name1.required'=> "Fill out this field",
        'Services1.required'=> "Fill out this field",
        'Price1.required'=> "Fill out this field",
        
        
        ]
    );
        
        
        
        
        $data=Planner_package::where('id',$request->id)
            
        ->update([
                'Package_Name'=>$request->Package_Name1,
                'Services'=>$request->Services1,
                'Price'=>$request->Price1,
                

            ]);
        
            
        

        return redirect('/Profile')->with('flash_message','Package Updated Successfully');
    }

    public function deletePackage(request $request)
    {
        

       
                $deco1 = Planner_package::findOrFail($request->id);
                $deco1->delete();

                return redirect('/Profile')->with('warning_message','Package Removed Successfully');
          

    }

    public function Search(request $request)
    {
        $event=Event_planner::all();
        $search=$request->get('search');
        
        foreach($event as $data)
        {
        
           
            $level=DB::table('users')->join('event_planners','event_planners.user_id','=','users.id')
            
            ->where(function($query) use ($search){
                    return $query->where('Organization_name','like','%'.$search.'%')
                                 ->orWhere('name','like','%'.$search.'%')
                                 ->orwhere('city','like','%'.$search.'%');
                                
            })
            ->select('users.id','name','Organization_name','Contact_No','Address','email','Main_pic')
            ->get();

            return view('EventPlanner', compact('level'));
        }
    }


    
}
