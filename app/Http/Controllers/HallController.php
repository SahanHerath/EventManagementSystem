<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Image;
use App\User;
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
                ->select('hotels.id','email','Hotel_Name','Address','Contact_No','Main_logo')
                ->get();


        return view('Hotel', compact('hall'));
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
            ['Hotel_Name' => 'required|string|max:255',
            'Address' => 'required|string|max:255',
            'Contact_No' =>'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'Link' =>'required|string|max:255',
            'Description' =>'required|string|max:500',
            
            'facebook' => 'required|string|max:255',
            'instagram' => 'required|string|max:255',
            
            'Main_logo'=> 'required|image|dimensions:min_width=300,min_height=100',
            'Cover_photo' => 'required|image|dimensions:min_width=300,min_height=100',
         
            

        ],
        ['Hotel_Name.required'=> "Fill out this field",
        'Address.required'=> "Fill out this field",
        'Contact_No.required'=> "Fill out this field",
        'Link.required'=> "Fill out this field",
        'Description.required'=> "Fill out this field",
        'facebook.required'=> "Fill out this field",
        'instagram.required'=> "Fill out this field",
        
        'Main_logo.required'=> "Add a image here",
        'Cover_photo.required'=> "Add a image here",
        
       
       

        ]
    );
        $hotel = new Hotel;
        $hotel->Hotel_Name=$request->Hotel_Name;
        $hotel->Address=$request->Address;
        $hotel->Contact_No =$request->Contact_No;
        $hotel->Link =$request->Link;
        $hotel->Description =$request->Description;
        $hotel->facebook =$request->facebook;
        $hotel->instagram =$request->instagram;
        
        $hotel->user_id = Auth::user()->id;
        
        if($request->hasFile('Main_logo'))
          {
             $Main_logo=$request->file('Main_logo');
           
             $filename=time().'.'.$Main_logo->getClientOriginalExtension();
             Image::make($Main_logo)->resize(200,200)->save(public_path('/uploads/hall/'. $filename));

             
             $hotel->Main_logo=$filename;
             
         }

         if($request->hasFile('Cover_photo'))
          {
             $Cover_photo=$request->file('Cover_photo');
           
             $filename=time().'.'.$Cover_photo->getClientOriginalExtension();
             Image::make($Cover_photo)->resize(1920,1080)->save(public_path('/uploads/hall/'. $filename));

             
             $hotel->Cover_photo=$filename;
             
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
              //->join('reception_halls','hotels.id','=','reception_halls.hotel_id')
              ->where('hotels.id','=',$id)
              ->get();

        $hall=DB::table('reception_halls')
             ->join('hotels','reception_halls.hotel_id','=','hotels.id')
             ->where('hotels.id','=',$id)
             ->get();

              return view('HotelView',compact('hotel','hall'));
    }

    public function viewHall($id)
    {
        $hall=DB::table('reception_halls')
              ->join('hall_features','reception_halls.id','=','hall_features.hall_id')
              ->join('hall_events','reception_halls.id','=','hall_events.hall_id')
              ->join('hall_table_arrangements','reception_halls.id','=','hall_table_arrangements.hall_id')
              //->join('reception_halls','hotels.id','=','reception_halls.hotel_id')
              ->where('reception_halls.id','=',$id)
              ->get();

        

              return view('HallView',compact('hall'));
    }

    public function wedding()
    {
        //
        $hall = DB::table('hotels')
                ->join('users','users.id','=','hotels.user_id')
                ->join('reception_halls','reception_halls.hotel_id','=','hotels.id')
                ->join('hall_events','hall_events.hall_id','=','reception_halls.id')
                ->where('hall_events.Wedding','=','Available')
                ->select('hotels.id','email','Hotel_Name','hotels.Address','Contact_No','Main_logo')
                ->distinct()
                ->get();


        return view('Hotel', compact('hall'));
    }

    public function party()
    {
        //
        $hall = DB::table('hotels')
                ->join('users','users.id','=','hotels.user_id')
                ->join('reception_halls','reception_halls.hotel_id','=','hotels.id')
                ->join('hall_events','hall_events.hall_id','=','reception_halls.id')
                ->where('hall_events.Party','=','Available')
                ->select('hotels.id','email','Hotel_Name','hotels.Address','Contact_No','Main_logo')
                ->distinct()
                ->get();


        return view('Hotel', compact('hall'));
    }

    public function coperate()
    {
        //
        $hall = DB::table('hotels')
                ->join('users','users.id','=','hotels.user_id')
                ->join('reception_halls','reception_halls.hotel_id','=','hotels.id')
                ->join('hall_events','hall_events.hall_id','=','reception_halls.id')
                ->where('hall_events.Corporate_event','=','Available')
                ->select('hotels.id','email','Hotel_Name','hotels.Address','Contact_No','Main_logo')
                ->distinct()
                ->get();


        return view('Hotel', compact('hall'));
    }

    public function prof()
    {
        //
        $hall = DB::table('hotels')
                ->join('users','users.id','=','hotels.user_id')
                ->join('reception_halls','reception_halls.hotel_id','=','hotels.id')
                ->join('hall_events','hall_events.hall_id','=','reception_halls.id')
                ->where('hall_events.Professional_Event','=','Available')
                ->select('hotels.id','email','Hotel_Name','hotels.Address','Contact_No','Main_logo')
                ->distinct()
                ->get();


        return view('Hotel', compact('hall'));
    }

    public function profile()
    {
        $id1 = Auth::id();
        $hotel=DB::table('hotels')
              ->join('users','users.id','=','hotels.user_id')
              //->join('reception_halls','hotels.id','=','reception_halls.hotel_id')
              ->where('users.id','=',$id1)
              ->select('users.id as userid','name','email','hotels.id as hotelid','Hotel_Name','Address','Contact_No','Link','Description','facebook','instagram','Main_logo','Cover_photo')
              ->get();

        foreach($hotel as $hotel1)
        {
              $hall=DB::table('reception_halls')
             ->join('hotels','reception_halls.hotel_id','=','hotels.id')
             ->where('hotels.id','=',$hotel1->hotelid)
             ->select('reception_halls.id as recepid','Hall_Name','reception_halls.Address as add','Main_pic')
             ->get();
        }

              return view('HotelUserProfile',compact('hotel','hall'));
    }

    public function hallProfile($id)
    {
        $hall=DB::table('reception_halls')
              ->join('hall_features','reception_halls.id','=','hall_features.hall_id')
              ->join('hall_events','reception_halls.id','=','hall_events.hall_id')
              ->join('hall_table_arrangements','reception_halls.id','=','hall_table_arrangements.hall_id')
              //->join('reception_halls','hotels.id','=','reception_halls.hotel_id')
              ->where('reception_halls.id','=',$id)
              ->select( 'reception_halls.id as recepid','Hall_Name', 'Address', 'Cost','Capacity','Square_feet','Description','Overview','Main_pic','pic1','pic2','pic3','pic4','hotel_id','hall_events.id as eventid','Wedding', 'Meeting', 'Party','Corporate_event','Professional_Event','hall_features.id as featureid','projection', 'internet', 'parking','security_camera','security_personal','reception_area','Bar','garden','smoking_area','welcome_drinks','Buffet','Handicap_accessible','outside_balcony','inside_balcony','stage','hall_table_arrangements.id as arrangeid','theatre', 'U_shape', 'V_shape','classroom','hallow_square','Boardroom','Oval','Herringbone','Top_table_springs','banquet','cabaret','informal')
              ->get();

        

              return view('HallUserProfile',compact('hall'));
    }

    public function HotelUpdate(Request $request, $userid, $Hotelid)
    {
        //
        $request->validate(
            ['Hotel_Name' => 'required|string|max:255',
            'Address' => 'required|string|max:255',
            'Contact_No' =>'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'Link' =>'required|string|max:255',
            'Description' =>'required|string|max:500',
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'facebook' =>'required|string|max:255',
            'instagram' =>'required|string|max:255',
            
           
        ],
        ['Hotel_Name.required'=> "Fill out this field",
        'Address.required'=> "Fill out this field",
        'Contact_No.required'=> "Fill out this field",
        'Link.required'=> "Fill out this field",
        'Description.required'=> "Fill out this field",
        'name.required'=> "Fill out this field",
        'email.required'=> "Fill out this field",
        'facebook.required'=> "Fill out this field",
        'instagram.required'=> "Fill out this field",
        
         ]
    );
        
        
       

        $data=Hotel::where('id',$Hotelid)
            
        ->update([
                'Hotel_Name'=>$request->Hotel_Name,
                'Address'=>$request->Address,
                'Description'=>$request->Description,
                'Contact_No'=>$request->Contact_No,
                'Link'=>$request->Link,
                'facebook'=>$request->facebook,
                'instagram'=>$request->instagram,
                
                
        ]);
        

        

        $music1  = User::find($userid); 
        $music1  ->name=$request->name;
        $music1 ->email=$request->email;
        $music1  ->update();

        
        return redirect('/Profile');
        
    }

    public function AddnewHall(request $request)
    {
        $id=$request->hotelid;
        
        return view('AddHall',compact('id'));
    }

    public function newHall(request $request)
    {
        $hall = new Reception_hall;
        $hall->Hall_Name=$request->Hall_Name;
        $hall->Address=$request->Address;
        $hall->Cost =$request->Cost;
        $hall->Capacity =$request->Capacity;
        $hall->Description =$request->Description;
        $hall->Square_feet =$request->Square_feet;
        $hall->Overview =$request->Overview;
        
        $hall->hotel_id = $request->hotelid;
        
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

            return redirect('/Profile');
    }

    public function editHall(request $request,$hallid)
    {
        $request->validate(
            ['Hall_Name' => 'required|string|max:255',
            'Address' => 'required|string|max:255',
            'Description' =>'required|string|max:500',
            'Cost' =>'required|numeric|min:0',
            'Capacity' => 'required|numeric|min:0',
            'Square_feet' => 'required|numeric|min:0',
            'Overview' => 'required|string|max:20',
        
        ],
        ['Hall_Name.required'=> "Fill out this field",
        'Address.required'=> "Fill out this field",
        'Description.required'=> "Fill out this field",
        'Cost.required'=> "Fill out this field",
        'Capacity.required'=> "Fill out this field",
        'Square_feet.required'=> "Fill out this field",
        'Overview.required'=> "Fill out this field",
        
        
         ]
    );
        
        
       

        $data=Reception_hall::where('id',$hallid)
            
        ->update([
                'Hall_Name'=>$request->Hall_Name,
                'Address'=>$request->Address,
                'Description'=>$request->Description,
                'Cost'=>$request->Cost,
                'Capacity'=>$request->Capacity,
                'Square_feet'=>$request->Square_feet,
                'Overview'=>$request->Overview,
                

                
        ]);

        return redirect()->back();


    }

    public function featureUpdate(Request $request, $id)
    {
        //
        

        $data=Hall_feature::where('id',$id)
            
        ->update([
                'projection'=>$request->projection,
                'internet'=>$request->internet,
                'parking'=>$request->parking,
                'security_camera'=>$request->security_camera,
                'security_personal'=>$request->security_personal,
                'reception_area'=>$request->reception_area,
                'Bar'=>$request->Bar,
                'garden'=>$request->garden,
                'smoking_area'=>$request->smoking_area,
                'welcome_drinks'=>$request->welcome_drinks,
                'Buffet'=>$request->Buffet,
                'Handicap_accessible'=>$request->Handicap_accessible,
                'outside_balcony'=>$request->outside_balcony,
                'inside_balcony'=>$request->inside_balcony,
                'stage'=>$request->stage,
                
            ]);

            return redirect()->back();
    }

    public function arrangeUpdate(Request $request, $id)
    {
        //
        

        $data=Hall_table_arrangement::where('id',$id)
            
        ->update([
                'theatre'=>$request->theatre,
                'U_shape'=>$request->U_shape,
                'V_shape'=>$request->V_shape,
                'classroom'=>$request->classroom,
                'hallow_square'=>$request->hallow_square,
                'Boardroom'=>$request->Boardroom,
                'Oval'=>$request->Oval,
                'Herringbone'=>$request->Herringbone,
                'Top_table_springs'=>$request->Top_table_springs,
                'banquet'=>$request->banquet,
                'cabaret'=>$request->cabaret,
                'informal'=>$request->informal,
                
                
            ]);

            return redirect()->back();
    }

    public function removehall($id)
    {
        
        $id1 = Auth::user()->id;

        

        $hotel=DB::table('hotels')
              ->join('users','users.id','=','hotels.user_id')
              ->join('reception_halls','hotels.id','=','reception_halls.hotel_id')
              ->where('users.id','=',$id1)
              ->select('reception_halls.id')
              ->get();

        foreach($hotel as $hotel1)
        {     
            if($hotel1->id==$id)
            {
                $reception = Reception_hall::findOrFail($id); 
                $reception->delete();
                $feature = Hall_feature::where('hall_id',$id)->delete();
                $arrange = Hall_table_arrangement::where('hall_id',$id)->delete();
                $event = Hall_event::where('hall_id',$id)->delete();
                
                return redirect('/Profile');
            }
            else 
            {
                return redirect('/home'); 
            }
        }
    }

    public function eventUpdate(Request $request, $eventid)
    {
        

        $data=Hall_event::where('id',$eventid)
            
        ->update([
                'Wedding'=>$request->Wedding,
                'Meeting'=>$request->Meeting,
                'Party'=>$request->Party,
                'Corporate_event'=>$request->Corporate_event,
                'Professional_Event'=>$request->Professional_Event,
               

                
        ]);

        return redirect()->back();
    }

    public function removeAccount($id)
    {
        $id1 = Auth::user()->id;

        

            if($id==$id1)
            {
                
                $hotel=DB::table('hotels')
                    ->join('users','users.id','=','hotels.user_id')
                    ->join('reception_halls','hotels.id','=','reception_halls.hotel_id')
                    ->where('users.id','=',$id1)
                    ->select('reception_halls.id')
                    ->get();

                  foreach($hotel as $hotel1)
                  {  

                    $hall1 = User::findOrFail($id); 
                    $hall1->delete();
                    $hall2 = Hotel::where('user_id',$id)->delete();
                    $hall3= Reception_hall::where('id',$hotel1->id)->delete();
                    $hall4= Hall_event::where('hall_id',$hotel1->id)->delete();
                    $hall5= Hall_feature::where('hall_id',$hotel1->id)->delete();
                    $hall6= Hall_table_arrangement::where('hall_id',$hotel1->id)->delete();
    
                  }
                
                return redirect('/');
            }
            else 
            {
                return redirect('/home'); 
            }
        
    }

    public function changeHotelMainPic(request $request,$id)
    {
            $id1 = Auth::user()->id;
            
            $data=DB::table('users')
                ->join('hotels','users.id','=','hotels.user_id')
                ->where('users.id','=',$id1)
                ->select('hotels.id')
                ->get();

                $request->validate(
                [
                    'Main_logo'=> 'required|image|dimensions:min_width=300,min_height=100',
                ],
                [
                    'Main_logo.required'=> "Add a image here",
                ]
            );
            
            
            foreach($data as $data1)
            {
                if($data1->id==$id)
                {
                    if($request->hasFile('Main_logo'))
                    {
                        $Main_logo=$request->file('Main_logo');
                        $filename=time().'.'.$Main_logo->getClientOriginalExtension();
                        Image::make($Main_logo)->resize(200,200)->save(public_path('/uploads/hall/'. $filename));

                        $picture=Hotel::where('id',$id)
                        ->update([
                                'Main_logo'=>$filename


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

    public function changeHotelCoverPic(request $request,$id)
    {
            $id1 = Auth::user()->id;
            
            $data=DB::table('users')
                ->join('hotels','users.id','=','hotels.user_id')
                ->where('users.id','=',$id1)
                ->select('hotels.id')
                ->get();

                $request->validate(
                [
                    'Cover_photo'=> 'required|image|dimensions:min_width=300,min_height=100',
                ],
                [
                    'Cover_photo.required'=> "Add a image here",
                ]
            );
            
            
            foreach($data as $data1)
            {
                if($data1->id==$id)
                {
                    if($request->hasFile('Cover_photo'))
                    {
                        $Cover_photo=$request->file('Cover_photo');
                        $filename=time().'.'.$Cover_photo->getClientOriginalExtension();
                        Image::make($Cover_photo)->fit(1920,1080)->save(public_path('/uploads/hall/'. $filename));

                        $picture=Hotel::where('id',$id)
                        ->update([
                                'Cover_photo'=>$filename


                        ]);
                    }

                    return redirect('/Profile')->with('flash_message','Change Cover Picture Successfully');
                }

                else
                {
                    return redirect('/');
                }
            }
            
    }

    public function changeHallMainPic(request $request,$id)
    {
            $id1 = Auth::user()->id;
            
            $data=DB::table('users')
                ->join('hotels','users.id','=','hotels.user_id')
                ->join('reception_halls','reception_halls.hotel_id','=','hotels.id')
                ->where('users.id','=',$id1)
                ->select('reception_halls.id')
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
                        Image::make($Main_pic)->fit(1920,1080)->save(public_path('/uploads/hall/'. $filename));

                        $picture=Reception_hall::where('id',$id)
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
   
}
