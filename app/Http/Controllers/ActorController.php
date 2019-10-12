<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Actor;
use App\Actor_event;
use App\Actor_package;
use Auth;
use Image;
use DB;
use App\Award;

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
        $request->validate(
            ['Actor_name' => 'required|string|max:255',
            'Address' => 'required|string|max:255',
            'Contact_No' =>'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'Link' =>'required|string|max:255',
            'Description' =>'required|string|max:500',
           
            'Main_pic'=> 'required|image|dimensions:min_width=300,min_height=100',
            'pic1' => 'required|image|dimensions:min_width=300,min_height=100',
            'pic2' => 'required|image|dimensions:min_width=300,min_height=100',
            'pic3' => 'required|image|dimensions:min_width=300,min_height=100',
            'pic4' => 'required|image|dimensions:min_width=300,min_height=100',
            'Party' => 'required|string|max:20',
            'Birthday' => 'required|string|max:20',
            'Professional_event' => 'required|string|max:20',
            'Musical_event'=> 'required|string|max:20',
            'Corporate_event'=> 'required|string|max:20',

        ],
        ['Actor_name.required'=> "Fill out this field",
        'Address.required'=> "Fill out this field",
        'Contact_No.required'=> "Fill out this field",
        'Link.required'=> "Fill out this field",
        'Description.required'=> "Fill out this field",
        
        'Main_pic.required'=> "Add a image here",
        'pic1.required'=> "Add a image here",
        'pic2.required'=> "Add a image here",
        'pic3.required' => "Add a image here",
        'pic4.required'=> "Add a image here",
        'Party.required'=> "Fill out this field",
        'Birthday.required'=> "Fill out this field",
        'Professional_event.required' => "Fill out this field",
        'Musical_event.required'=> "Fill out this field",
        'Corporate_event.required'=> "Fill out this field"
       

        ]
    );
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
             Image::make($Main_pic)->fit(960,640)->save(public_path('/uploads/actor/'. $filename));

             
             $actor->Main_pic=$filename;
             
         }

         if($request->hasFile('pic1'))
          {
             $pic1=$request->file('pic1');
           
             $filename=time().'.'.$pic1->getClientOriginalExtension();
             Image::make($pic1)->fit(960,640)->save(public_path('/uploads/actor/'. $filename));

             
             $actor->pic1=$filename;
             
         }

         if($request->hasFile('pic2'))
          {
             $pic2=$request->file('pic2');
           
             $filename=time().'.'.$pic2->getClientOriginalExtension();
             Image::make($pic2)->fit(960,640)->save(public_path('/uploads/actor/'. $filename));

             
             $actor->pic2=$filename;
             
         }

         if($request->hasFile('pic3'))
          {
             $pic3=$request->file('pic3');
           
             $filename=time().'.'.$pic3->getClientOriginalExtension();
             Image::make($pic3)->fit(960,640)->save(public_path('/uploads/actor/'. $filename));

             
             $actor->pic3=$filename;
             
         }

         if($request->hasFile('pic4'))
          {
             $pic4=$request->file('pic4');
           
             $filename=time().'.'.$pic4->getClientOriginalExtension();
             Image::make($pic4)->fit(960,640)->save(public_path('/uploads/actor/'. $filename));

             
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
                ->join('actors','users.id','=','actors.user_id')
                ->join('actor_events','users.id','=','actor_events.user_id')
                ->select('users.id as userid','name','email','actors.id as actorid','Actor_name', 'Address', 'Contact_No','Link','Description','Singer','Magician','Comedian','Actor','Announcer','Entertainer','Other','Main_pic','pic1','pic2','pic3','pic4','actor_events.id as eventid','Birthday', 'Professional_event','Musical_event','Corporate_event','Party')
                ->get();

        $deto= DB::table('users')
                ->join('actor_packages','users.id','=','actor_packages.user_id')
                ->where('users.id','=',$id)
                ->select('actor_packages.id','Package_Name', 'Hours', 'Services','Price','Pdf')
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

                return view('ActorView',compact('data','deto','all','rate','average','one','two','three','four','five','precentage1','precentage2','precentage3','precentage4','precentage5'));
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
        $id1 = Auth::id();
        $data = DB::table('actors')
                ->join('users','users.id','=','actors.user_id')
                ->join('actor_events','users.id','=','actor_events.user_id')
                ->where('users.id','=',$id1)
                ->select('users.id as userid','name','email','actors.id as actorid','Actor_name', 'Address', 'Contact_No','Link','Description','Singer','Magician','Comedian','Actor','Announcer','Entertainer','Other','Main_pic','pic1','pic2','pic3','pic4','actor_events.id as eventid','Birthday', 'Professional_event','Musical_event','Corporate_event','Party')
                ->get();

        $deto=DB::table('users')
                ->join('actor_packages','users.id','=','actor_packages.user_id')
                ->where('users.id','=',$id1)
                ->select('actor_packages.id','Package_Name', 'Hours', 'Services','Price','Pdf')
                ->get();

                return view('ActorUserProfile',compact('data','deto'));
    }

    public function InfoUpdate(Request $request, $userid, $actorid)
    {
        //
        $request->validate(
            ['Actor_name' => 'required|string|max:255',
            'Address' => 'required|string|max:255',
            'Contact_No' =>'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'Link' =>'required|string|max:255',
            'Description' =>'required|string|max:500',
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            
            
           
        ],
        ['Actor_name.required'=> "Fill out this field",
        'Address.required'=> "Fill out this field",
        'Contact_No.required'=> "Fill out this field",
        'Link.required'=> "Fill out this field",
        'Description.required'=> "Fill out this field",
        'name.required'=> "Fill out this field",
        'email.required'=> "Fill out this field",
        
        
         ]
    );
        
        
       

        $data=Actor::where('id',$actorid)
            
        ->update([
                'Actor_name'=>$request->Actor_name,
                'Address'=>$request->Address,
                'Description'=>$request->Description,
                'Contact_No'=>$request->Contact_No,
                'Link'=>$request->Link,
                
        ]);
        

        

        $act1  = User::find($userid); 
        $act1  ->name=$request->name;
        $act1 ->email=$request->email;
        $act1  ->update();

        
        return redirect('/Profile');
        
    }

    public function eventUpdate(Request $request, $id)
    {
        

        $data=Actor_event::where('id',$id)
            
        ->update([
                'Birthday'=>$request->Birthday,
                'Party'=>$request->Party,
                'Professional_event'=>$request->Professional_event,
                'Musical_event'=>$request->Musical_event,
                'Corporate_event'=>$request->Corporate_event,
               

                
        ]);

        return redirect('/Profile');
    }

    public function featureUpdate(Request $request, $id)
    {
        //
        

        $data=Actor::where('id',$id)
            
        ->update([
                'Singer'=>$request->Singer,
                'Magician'=>$request->Magician,
                'Comedian'=>$request->Comedian,
                'Actor'=>$request->Actor,
                'Announcer'=>$request->Announcer,
                'Entertainer'=>$request->Entertainer,
                'Other'=>$request->Other,
                
            ]);

        return redirect('/Profile');
    }

    public function removeAccount($id)
    {
        $id1 = Auth::user()->id;

      

            if($id==$id1)
            {
                $cake1 = User::findOrFail($id); 
                $cake1 ->delete();
                $cake2  = Actor::where('user_id',$id)->delete();
                $cake3  = Actor_event::where('user_id',$id)->delete();
                $cake4  = Actor_package::where('user_id',$id)->delete();
                
                
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
                ->join('actors','users.id','=','actors.user_id')
                ->where('users.id','=',$id1)
                ->select('actors.id')
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
                        Image::make($Main_pic)->fit(480,480)->save(public_path('/uploads/actor/'. $filename));

                        $picture=Actor::where('id',$id)
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
                ->join('actors','users.id','=','actors.user_id')
                ->where('users.id','=',$id1)
                ->select('actors.id')
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
                        Image::make($pic1)->fit(1920,1080)->save(public_path('/uploads/actor/'. $filename));

                        $picture=Actor::where('id',$id)
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
                ->join('actors','users.id','=','actors.user_id')
                ->where('users.id','=',$id1)
                ->select('actors.id')
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
                        Image::make($pic2)->fit(1920,1080)->save(public_path('/uploads/actor/'. $filename));

                        $picture=Actor::where('id',$id)
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
                ->join('actors','users.id','=','actors.user_id')
                ->where('users.id','=',$id1)
                ->select('actors.id')
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
                        Image::make($pic3)->fit(1920,1080)->save(public_path('/uploads/actor/'. $filename));

                        $picture=Actor::where('id',$id)
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
                ->join('actors','users.id','=','actors.user_id')
                ->where('users.id','=',$id1)
                ->select('actors.id')
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
                        Image::make($pic4)->fit(1920,1080)->save(public_path('/uploads/actor/'. $filename));

                        $picture=Actor::where('id',$id)
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
            'Hours' => 'required|numeric|min:0',
            'Services' =>'required|string|max:500',
            'Price' =>'required|numeric|min:0',
            'Pdf' =>'required|mimes:pdf',
            
            
           
        ],
        ['Package_Name.required'=> "Fill out this field",
        'Hours.required'=> "Fill out this field",
        'Services.required'=> "Fill out this field",
        'Price.required'=> "Fill out this field",
        'Pdf.required'=> "Fill out this field",
        
        ]
    );
        
        $actor_package = new Actor_package;
        $actor_package->user_id = Auth::user()->id;
        $actor_package->Package_Name=$request->Package_Name;
        $actor_package->Hours =$request->Hours;
        $actor_package->Services =$request->Services;
        $actor_package->Price =$request->Price;

        if($request->hasFile('Pdf'))
          {
             $Pdf=$request->file('Pdf');
           
             $filename=time().'.'.$Pdf->getClientOriginalExtension();
             $Pdf->move(public_path('/files/actor') , $filename);
             $actor_package->Pdf=$filename;
             
         }
        
         $actor_package->save();

         return redirect('/Profile')->with('flash_message','Add New Package Successfully');
    }

    public function EditPackage(request $request)
    {
        $request->validate(
            ['Package_Name1' => 'required|string|max:255',
            'Hours1' => 'required|numeric|min:0',
            'Services1' =>'required|string|max:500',
            'Price1' =>'required|numeric|min:0',
           
            
            
           
        ],
        ['Package_Name1.required'=> "Fill out this field",
        'Hours1.required'=> "Fill out this field",
        'Services1.required'=> "Fill out this field",
        'Price1.required'=> "Fill out this field",
        
        
        ]
    );
        
        
        
        
        $data=Actor_package::where('id',$request->id)
            
        ->update([
                'Package_Name'=>$request->Package_Name1,
                'Hours'=>$request->Hours1,
                'Services'=>$request->Services1,
                'Price'=>$request->Price1,
                

            ]);
        
            
        

        return redirect('/Profile')->with('flash_message','Package Updated Successfully');
    }

    public function deletePackage(request $request)
    {
        

        
                $deco1 = Actor_package::findOrFail($request->id);
                $deco1->delete();

                return redirect('/Profile')->with('warning_message','Package Removed Successfully');
            
            
        

    }



}
