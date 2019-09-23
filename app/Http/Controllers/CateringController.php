<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
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
        $request->validate(
            ['Service_Name' => 'required|string|max:255',
            'Address' => 'required|string|max:255',
            'Contact_No' =>'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'Link' =>'required|string|max:255',
            'Description' =>'required|string|max:500',
            'Welcome_drink' => 'required|string|max:20',
            'Catering_set' => 'required|string|max:20',
            'Catering_tent' => 'required|string|max:20',
            'Cake' => 'required|string|max:20',
            'Special_Food' => 'required|string|max:20',
            'Garden_umbrella' => 'required|string|max:20',
            'Coffee_Machine' => 'required|string|max:20',
            'Table_chair' => 'required|string|max:20',
            'sink' => 'required|string|max:20',
            'dessert' => 'required|string|max:20',
            'Main_pic'=> 'required|image|dimensions:min_width=300,min_height=100',
            'pic1' => 'required|image|dimensions:min_width=300,min_height=100',
            'pic2' => 'required|image|dimensions:min_width=300,min_height=100',
            'pic3' => 'required|image|dimensions:min_width=300,min_height=100',
            'pic4' => 'required|image|dimensions:min_width=300,min_height=100',
            'Wedding' => 'required|string|max:20',
            'Birthday' => 'required|string|max:20',
            'Party' => 'required|string|max:20',
            'Funeral'=> 'required|string|max:20',
            'Corporate_event'=> 'required|string|max:20',

        ],
        ['Service_Name.required'=> "Fill out this field",
        'Address.required'=> "Fill out this field",
        'Contact_No.required'=> "Fill out this field",
        'Link.required'=> "Fill out this field",
        'Description.required'=> "Fill out this field",
        'Welcome_drink.required'=> "Fill out this field",
        'Catering_set.required'=> "Fill out this field",
        'Catering_tent.required'=> "Fill out this field",
        'Cake.required'=> "Fill out this field",
        'Special_Food.required'=> "Fill out this field",
        'Garden_umbrella.required'=> "Fill out this field",
        'Coffee_Machine.required'=> "Fill out this field",
        'Table_chair.required'=> "Fill out this field",
        'sink.required'=> "Fill out this field",
        'dessert.required'=> "Fill out this field",
        'Main_pic.required'=> "Add a image here",
        'pic1.required'=> "Add a image here",
        'pic2.required'=> "Add a image here",
        'pic3.required' => "Add a image here",
        'pic4.required'=> "Add a image here",
        'Party.required'=> "Fill out this field",
        'Birthday.required'=> "Fill out this field",
        'Wedding.required' => "Fill out this field",
        'Funeral.required'=> "Fill out this field",
        'Corporate_event.required'=> "Fill out this field"
       

        ]
    );
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
             Image::make($Main_pic)->fit(960,640)->save(public_path('/uploads/catering/'. $filename));

             
             $catering->Main_pic=$filename;
             
         }

         if($request->hasFile('pic1'))
          {
             $pic1=$request->file('pic1');
           
             $filename=time().'.'.$pic1->getClientOriginalExtension();
             Image::make($pic1)->fit(960,640)->save(public_path('/uploads/catering/'. $filename));

             
             $catering->pic1=$filename;
             
         }

         if($request->hasFile('pic2'))
          {
             $pic2=$request->file('pic2');
           
             $filename=time().'.'.$pic2->getClientOriginalExtension();
             Image::make($pic2)->fit(960,640)->save(public_path('/uploads/catering/'. $filename));

             
             $catering->pic2=$filename;
             
         }

         if($request->hasFile('pic3'))
          {
             $pic3=$request->file('pic3');
           
             $filename=time().'.'.$pic3->getClientOriginalExtension();
             Image::make($pic3)->fit(960,640)->save(public_path('/uploads/catering/'. $filename));

             
             $catering->pic3=$filename;
             
         }

         if($request->hasFile('pic4'))
          {
             $pic4=$request->file('pic4');
           
             $filename=time().'.'.$pic4->getClientOriginalExtension();
             Image::make($pic4)->fit(960,640)->save(public_path('/uploads/catering/'. $filename));

             
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
                ->join('catering_events','users.id','=','catering_events.user_id')
                ->where('category','=','Catering')
                ->get();

                return view('cateringview',compact('data'));
    }

    public function wedding()
    {
        //
        $level = DB::table('caterings')
        ->join('users','users.id','=','caterings.user_id')
        ->join('catering_events','users.id','=','catering_events.user_id')
        ->where('catering_events.Wedding','=','Available')
        ->get();


        return view('catering', compact('level'));
    }

    public function birthday()
    {
        //
        $level = DB::table('caterings')
        ->join('users','users.id','=','caterings.user_id')
        ->join('catering_events','users.id','=','catering_events.user_id')
        ->where('catering_events.Birthday','=','Available')
        ->get();


        return view('catering', compact('level'));
    }

    public function party()
    {
        //
        $level = DB::table('caterings')
        ->join('users','users.id','=','caterings.user_id')
        ->join('catering_events','users.id','=','catering_events.user_id')
        ->where('catering_events.Party','=','Available')
        ->get();


        return view('catering', compact('level'));
    }

    public function coperate()
    {
        //
        $level = DB::table('caterings')
        ->join('users','users.id','=','caterings.user_id')
        ->join('catering_events','users.id','=','catering_events.user_id')
        ->where('catering_events.Corporate_event','=','Available')
        ->get();


        return view('catering', compact('level'));
    }

    public function profile()
    {
        $id1 = Auth::id();
        $data = DB::table('caterings')
            ->join('users','users.id','=','caterings.user_id')
            ->join('catering_events','users.id','=','catering_events.user_id')
            ->where('category','=','Catering')
            ->where('users.id','=',$id1)
            ->select('users.id as userid','email','name', 'caterings.id as cateringid','Service_Name', 'Address', 'Contact_No','Link','Description','Welcome_drink','Special_Food','Catering_set','Catering_tent','Cake','Garden_umbrella','Coffee_Machine','Table_chair','sink','dessert','Main_pic','pic1','pic2','pic3','pic4','catering_events.id as eventid','Wedding', 'Birthday', 'Party','Corporate_event','Funeral')
            ->get();

        return view('CateringUserProfile',compact('data'));
    }

    public function InfoUpdate(Request $request, $userid, $cateringid)
    {
        //
        $request->validate(
            ['Service_Name' => 'required|string|max:255',
            'Address' => 'required|string|max:255',
            'Contact_No' =>'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'Link' =>'required|string|max:255',
            'Description' =>'required|string|max:500',
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            
            
           
        ],
        ['Service_Name.required'=> "Fill out this field",
        'Address.required'=> "Fill out this field",
        'Contact_No.required'=> "Fill out this field",
        'Link.required'=> "Fill out this field",
        'Description.required'=> "Fill out this field",
        'name.required'=> "Fill out this field",
        'email.required'=> "Fill out this field",
        
        
         ]
    );
        
        
       

        $data=Catering::where('id',$cateringid)
            
        ->update([
                'Service_Name'=>$request->Service_Name,
                'Address'=>$request->Address,
                'Description'=>$request->Description,
                'Contact_No'=>$request->Contact_No,
                'Link'=>$request->Link,
                
        ]);
        

        

        $music1  = User::find($userid); 
        $music1  ->name=$request->name;
        $music1 ->email=$request->email;
        $music1  ->update();

        
        return redirect('/Profile');
        
    }
}
