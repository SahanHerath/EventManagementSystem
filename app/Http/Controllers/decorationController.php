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
        $request->validate(
            ['Team_Name' => 'required|string|max:255',
            'Address' => 'required|string|max:255',
            'Contact_No' =>'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'Link' =>'required|string|max:255',
            'Description' =>'required|string|max:500',
            
            'Poruwa' => 'required|string|max:20',
            'Flower' => 'required|string|max:20',
            'Table_Hall' => 'required|string|max:20',
            'Setty_Backs' => 'required|string|max:20',
            'Lighting' => 'required|string|max:20',
            'Traditional' => 'required|string|max:20',
            'Wedding_Car' => 'required|string|max:20',
            'Main_Pic'=> 'required|image|dimensions:min_width=300,min_height=100',
            'pic1' => 'required|image|dimensions:min_width=300,min_height=100',
            'pic2' => 'required|image|dimensions:min_width=300,min_height=100',
            'pic3' => 'required|image|dimensions:min_width=300,min_height=100',
            'pic4' => 'required|image|dimensions:min_width=300,min_height=100',
            'Wedding' => 'required|string|max:20',
            'Birthday' => 'required|string|max:20',
            'Outside_events' => 'required|string|max:20',
            'Get_Together'=> 'required|string|max:20',
            'Parties'=> 'required|string|max:20',

        ],
        ['Team_Name.required'=> "Fill out this field",
        'Address.required'=> "Fill out this field",
        'Contact_No.required'=> "Fill out this field",
        'Link.required'=> "Fill out this field",
        'Description.required'=> "Fill out this field",
        'Poruwa.required'=> "Fill out this field",
        'Flower.required'=> "Fill out this field",
        'Table_Hall.required'=> "Fill out this field",
        'Setty_Backs.required'=> "Fill out this field",
        'Lighting.required'=> "Fill out this field",
        'Traditional.required'=> "Fill out this field",
        
        'Wedding_Car.required'=> "Fill out this field",
        'Main_Logo.required'=> "Add a image here",
        'pic1.required'=> "Add a image here",
        'pic2.required'=> "Add a image here",
        'pic3.required' => "Add a image here",
        'pic4.required'=> "Add a image here",
        'Wedding.required'=> "Fill out this field",
        'Birthday.required'=> "Fill out this field",
        'Outside_events.required' => "Fill out this field",
        'Get_Together.required'=> "Fill out this field",
        'Parties.required'=> "Fill out this field"
       

        ]
    );
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
             Image::make($Main_Pic)->fit(480,480)->save(public_path('/uploads/decoration/'. $filename));

             
             $decorate->Main_Pic=$filename;
             
         }

         if($request->hasFile('pic1'))
          {
             $pic1=$request->file('pic1');
           
             $filename=time().'.'.$pic1->getClientOriginalExtension();
             Image::make($pic1)->fit(1920,1080)->save(public_path('/uploads/decoration/'. $filename));

             
             $decorate->pic1=$filename;
             
         }

         if($request->hasFile('pic2'))
          {
             $pic2=$request->file('pic2');
           
             $filename=time().'.'.$pic2->getClientOriginalExtension();
             Image::make($pic2)->fit(1920,1080)->save(public_path('/uploads/decoration/'. $filename));

             
             $decorate->pic2=$filename;
             
         }

         if($request->hasFile('pic3'))
          {
             $pic3=$request->file('pic3');
           
             $filename=time().'.'.$pic3->getClientOriginalExtension();
             Image::make($pic3)->fit(1920,1080)->save(public_path('/uploads/decoration/'. $filename));

             
             $decorate->pic3=$filename;
             
         }

         if($request->hasFile('pic4'))
          {
             $pic4=$request->file('pic4');
           
             $filename=time().'.'.$pic4->getClientOriginalExtension();
             Image::make($pic4)->fit(1920,1080)->save(public_path('/uploads/decoration/'. $filename));

             
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

    public function profile()
    {
        $id1 = Auth::id();

        $decos = DB::table('decorators')
                ->join('users','users.id','=','decorators.user_id')
                ->join('decorator_events','users.id','=','decorator_events.user_id')
                ->where('users.id','=',$id1)
                ->select('users.id as userid','name','email','decorators.id as deco_id','Team_Name','Address','Description','Contact_No','Link','Poruwa','Flower','Table_Hall','Setty_Backs','Lighting','Traditional','Wedding_Car','Main_Pic','pic1','pic2','pic3','pic4','decorator_events.id as deco_eve_id','Wedding','Birthday','Get_Together','Parties','Outside_events')
                ->get();
        
        

        return view('DecoratorUserProfile', compact('decos'));
    }

    public function eventUpdate(Request $request, $id)
    {
        //
        $deco = Decorator_event::find($id); 
        $deco ->Wedding=$request->Wedding;
        $deco ->Birthday=$request->Birthday;
        $deco ->Get_Together =$request->Get_Together;
        $deco ->Parties =$request->Parties;
        $deco ->Outside_events =$request->Outside_events;
        $deco ->update();

        return redirect('/Profile');
    }

    public function featureUpdate(Request $request, $id)
    {
        //
        $deco = Decorator::find($id); 
        $deco ->Poruwa=$request->Poruwa;
        $deco ->Flower=$request->Flower;
        $deco ->Table_Hall =$request->Table_Hall;
        $deco ->Setty_Backs =$request->Setty_Backs;
        $deco ->Lighting =$request->Lighting;
        $deco ->Traditional =$request->Traditional;
        $deco ->Wedding_Car =$request->Wedding_Car;
        $deco ->update();

        return redirect('/Profile');
    }
    

    
}
