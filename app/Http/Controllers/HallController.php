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
use App\Hall_package;
use App\Hall_table_arrangement;
use DB;
use App\Award;

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
                ->select('hotels.id','email','Hotel_Name','Address','Contact_No','Main_logo','users.id as userid')
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

         $award=new Award;
            $award->user_id=Auth::user()->id;
            $award->save();

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

            return redirect('/home');
    }

    public function viewHotel($id)
    {
        $hotel=DB::table('hotels')
              ->join('users','users.id','=','hotels.user_id')
              //->join('reception_halls','hotels.id','=','reception_halls.hotel_id')
              ->where('hotels.id','=',$id)
              ->select('users.id as userid','name','email','hotels.id as hotelid','Hotel_Name', 'Address', 'Contact_No','Link','Description','Main_logo','facebook','instagram','Cover_photo')
              ->get();

        $hall=DB::table('reception_halls')
             ->join('hotels','reception_halls.hotel_id','=','hotels.id')
             ->where('hotels.id','=',$id)
             ->select('reception_halls.id','reception_halls.Address','Hall_Name','Main_pic')
             ->get();

    foreach($hotel as $hotel1)
    {    
        
        $rate=DB::table('users')
             ->join('ratings','ratings.user_id','=','users.id')
             ->where('users.id','=',$hotel1->userid)
             ->where('blocked','=',"0")
             ->select('ratings.id','rating','Comment','ratings.Email','image','ratings.created_at','user_name')
             ->get();

    
 
        $average=DB::table('ratings')
                    ->where('ratings.user_id','=',$hotel1->userid)
                    ->where('blocked','=',"0")
                    ->avg('rating');
    
        $one=DB::table('ratings')
                    ->where('ratings.user_id','=',$hotel1->userid)
                    ->where('blocked','=',"0")
                    ->where('rating','=','1')
                    ->count();
    
        $two=DB::table('ratings')
                    ->where('ratings.user_id','=',$hotel1->userid)
                    ->where('blocked','=',"0")
                    ->where('rating','=','2')
                    ->count();
    
        $three=DB::table('ratings')
                    ->where('ratings.user_id','=',$hotel1->userid)
                    ->where('blocked','=',"0")
                    ->where('rating','=','3')
                    ->count();
    
        $four=DB::table('ratings')
                    ->where('ratings.user_id','=',$hotel1->userid)
                    ->where('blocked','=',"0")
                    ->where('rating','=','4')
                    ->count();
    
        $five=DB::table('ratings')
                    ->where('ratings.user_id','=',$hotel1->userid)
                    ->where('blocked','=',"0")
                    ->where('rating','=','5')
                    ->count();
    
        $all=DB::table('ratings')
                    ->where('ratings.user_id','=',$hotel1->userid)
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
        }
            return view('HotelView',compact('hotel','hall','rate','average','all','one','two','three','four','five','precentage1','precentage2','precentage3','precentage4','precentage5'));
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

        $deto=DB::table('reception_halls')
              ->join('hall_packages','reception_halls.id','=','hall_packages.hall_id')
              ->where('reception_halls.id','=',$id)
              ->get();

        

              return view('HallView',compact('hall','deto'));
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

        $deto=DB::table('reception_halls')
              ->join('hall_packages','reception_halls.id','=','hall_packages.hall_id')
              ->where('reception_halls.id','=',$id)
              ->select('hall_packages.id','Package_Name', 'Appetizers', 'Welcome_drinks','Foods','Soups','Desserts','Price','Pdf')
              ->get();

        

              return view('HallUserProfile',compact('hall','deto'));
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
                $package = Hall_package::where('hall_id',$id)->delete();
                
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
                    $hall6= Hall_package::where('hall_id',$hotel1->id)->delete();
    
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

                    return redirect()->back()->with('flash_message','Change Your Main Picture Successfully');
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
                ->join('hotels','users.id','=','hotels.user_id')
                ->join('reception_halls','reception_halls.hotel_id','=','hotels.id')
                ->where('users.id','=',$id1)
                ->select('reception_halls.id')
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
                        Image::make($pic1)->fit(1920,1080)->save(public_path('/uploads/hall/'. $filename));

                        $picture=Reception_hall::where('id',$id)
                        ->update([
                                'pic1'=>$filename


                        ]);
                    }

                    return redirect()->back()->with('flash_message','Change Your Pictures Successfully');
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
                ->join('hotels','users.id','=','hotels.user_id')
                ->join('reception_halls','reception_halls.hotel_id','=','hotels.id')
                ->where('users.id','=',$id1)
                ->select('reception_halls.id')
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
                        Image::make($pic2)->fit(1920,1080)->save(public_path('/uploads/hall/'. $filename));

                        $picture=Reception_hall::where('id',$id)
                        ->update([
                                'pic2'=>$filename


                        ]);
                    }

                    return redirect()->back()->with('flash_message','Change Your Pictures Successfully');
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
                ->join('hotels','users.id','=','hotels.user_id')
                ->join('reception_halls','reception_halls.hotel_id','=','hotels.id')
                ->where('users.id','=',$id1)
                ->select('reception_halls.id')
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
                        Image::make($pic3)->fit(1920,1080)->save(public_path('/uploads/hall/'. $filename));

                        $picture=Reception_hall::where('id',$id)
                        ->update([
                                'pic3'=>$filename


                        ]);
                    }

                    return redirect()->back()->with('flash_message','Change Your Pictures Successfully');
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
                ->join('hotels','users.id','=','hotels.user_id')
                ->join('reception_halls','reception_halls.hotel_id','=','hotels.id')
                ->where('users.id','=',$id1)
                ->select('reception_halls.id')
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
                        Image::make($pic4)->fit(1920,1080)->save(public_path('/uploads/hall/'. $filename));

                        $picture=Reception_hall::where('id',$id)
                        ->update([
                                'pic4'=>$filename


                        ]);
                    }

                    return redirect()->back()->with('flash_message','Change Your Pictures Successfully');
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
            'Appetizers' =>'required|string|max:500',
            'Welcome_drinks' =>'required|string|max:500',
            'Soups' =>'required|string|max:500',
            'Foods' =>'required|string|max:500',
            'Desserts' =>'required|string|max:500',
            'Price' =>'required|numeric|min:0',
            'Pdf' =>'required|mimes:pdf',
            
            
           
        ],
        ['Package_Name.required'=> "Fill out this field",
        'Appetizers.required'=> "Fill out this field",
        'Welcome_drinks.required'=> "Fill out this field",
        'Soups.required'=> "Fill out this field",
        'Foods.required'=> "Fill out this field",
        'Desserts.required'=> "Fill out this field",
        
        'Price.required'=> "Fill out this field",
        'Pdf.required'=> "Fill out this field",
        
        ]
    );
        
        $hall_package = new Hall_package;
        $hall_package->hall_id = $id;
        $hall_package->Package_Name=$request->Package_Name;
        $hall_package->Appetizers =$request->Appetizers;
        $hall_package->Welcome_drinks =$request->Welcome_drinks;
        $hall_package->Soups =$request->Soups;
        $hall_package->Foods =$request->Foods;
        $hall_package->Desserts =$request->Desserts;
        $hall_package->Price =$request->Price;

        if($request->hasFile('Pdf'))
          {
             $Pdf=$request->file('Pdf');
           
             $filename=time().'.'.$Pdf->getClientOriginalExtension();
             $Pdf->move(public_path('/files/hall') , $filename);
             $hall_package->Pdf=$filename;
             
         }
        
         $hall_package->save();

         return redirect()->back()->with('flash_message','Add New Package Successfully');
    }

    public function EditPackage(request $request)
    {
        $request->validate(
            ['Package_Name1' => 'required|string|max:255',
            'Appetizers1' =>'required|string|max:500',
            'Welcome_drinks1' =>'required|string|max:500',
            'Soups1' =>'required|string|max:500',
            'Foods1' =>'required|string|max:500',
            'Desserts1' =>'required|string|max:500',
            'Price1' =>'required|numeric|min:0',
            
            
            
           
        ],
        ['Package_Name1.required'=> "Fill out this field",
        'Appetizers1.required'=> "Fill out this field",
        'Welcome_drinks1.required'=> "Fill out this field",
        'Soups1.required'=> "Fill out this field",
        'Foods1.required'=> "Fill out this field",
        'Desserts1.required'=> "Fill out this field",
        
        'Price1.required'=> "Fill out this field",
        
        
        ]
    );
        
        
        
        
        $data=Hall_package::where('id',$request->id)
            
        ->update([
                'Package_Name'=>$request->Package_Name1,
                'Appetizers'=>$request->Appetizers1,
                'Welcome_drinks'=>$request->Welcome_drinks1,
                'Soups'=>$request->Soups1,
                'Foods'=>$request->Foods1,
                'Desserts'=>$request->Desserts1,
                'Price'=>$request->Price1,
               
                

            ]);
        
            
        

            return redirect()->back()->with('flash_message','Package Updated Successfully');
    }

    public function deletePackage(request $request)
    {
        

        
                $deco1 = Hall_package::findOrFail($request->id);
                $deco1->delete();

                return redirect()->back()->with('warning_message','Package Removed Successfully');
            
            
        

    }
   
}
