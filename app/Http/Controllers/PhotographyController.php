<?php

namespace App\Http\Controllers;
use App\User;
use App\Photography;
use App\Photography_package;
use App\Photography_event;
use App\Photography_video;
use Image;
use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Exception;
use DB;
use App\Award;



class PhotographyController extends Controller
{
	
	public function index()
    {    $level = DB::table('photographies')
                ->join('users','users.id','=','photographies.user_id')
                ->get();


        $video=DB::table('users')
                ->join('photography_videos','users.id','=','photography_videos.user_id')
                ->join('awards','users.id','=','awards.user_id')
                ->where('awards.platinum','=',1)
                ->first();
      
       
       return view('Photography', compact('level','video'));
      
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   

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
            ['Studio_Name' => 'required|string|max:255',
            'Address' => 'required|string|max:255',
            'ContactNo' =>'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'Link' =>'required|string|max:255',
            'Description' =>'required|string|max:500',
            
            'Drone' => 'required|string|max:20',
            'Wedding_Photography' => 'required|string|max:20',
            'Preshoot_Vedio' => 'required|string|max:20',
            'Wedding_Vedio' => 'required|string|max:20',
            'Album_Making' => 'required|string|max:20',
            'Wedding_Card' => 'required|string|max:20',
            
            'main_pic'=> 'required|image|dimensions:min_width=300,min_height=100',
            'pic1' => 'required|image|dimensions:min_width=300,min_height=100',
            'pic2' => 'required|image|dimensions:min_width=300,min_height=100',
            'pic3' => 'required|image|dimensions:min_width=300,min_height=100',
            'pic4' => 'required|image|dimensions:min_width=300,min_height=100',
            'Wedding' => 'required|string|max:20',
            'Birthday' => 'required|string|max:20',
            'Competition' => 'required|string|max:20',
            'Professional_Events' => 'required|string|max:20',
            'Sports' => 'required|string|max:20',
            'Trips' => 'required|string|max:20',

        ],
        ['Studio_Name.required'=> "Fill out this field",
        'Address.required'=> "Fill out this field",
        'ContactNo.required'=> "Fill out this field",
        'Link.required'=> "Fill out this field",
        'Description.required'=> "Fill out this field",

        'Drone.required'=> "Fill out this field",
        'Wedding_Photography.required'=> "Fill out this field",
        'Preshoot_Vedio.required'=> "Fill out this field",
        'Wedding_Vedio.required'=> "Fill out this field",
        'Album_Making.required'=> "Fill out this field",
        'Wedding_Card.required'=>"Fill out this field",
        
        'main_pic.required'=> "Add a image here",
        'pic1.required'=> "Add a image here",
        'pic2.required'=> "Add a image here",
        'pic3.required' => "Add a image here",
        'pic4.required'=> "Add a image here",
        'Wedding.required'=> "Fill out this field",
        'Birthday.required'=> "Fill out this field",
        'Competition.required' => "Fill out this field",
        'Professional_Events.required'=> "Fill out this field",
        'Sports.required'=> "Fill out this field",
        'Trips.required' => "Fill out this field",
        
       

        ]
    );
        $photography = new Photography;
        $photography->Studio_Name=$request->Studio_Name;
        $photography->Address=$request->Address;
        $photography->ContactNo =$request->ContactNo;
        $photography->Link =$request->Link;
        $photography->Description =$request->Description;
        $photography->Drone =$request->Drone;
        $photography->Wedding_Photography =$request->Wedding_Photography;
        $photography->Preshoot_Vedio=$request->Preshoot_Vedio;
        $photography->Wedding_Vedio=$request->Wedding_Vedio;
        $photography->Album_Making=$request->Album_Making;
        $photography->Wedding_Card=$request->Wedding_Card;
        $photography->user_id = Auth::user()->id;
        
        if($request->hasFile('main_pic'))
          {
             $main_pic=$request->file('main_pic');
           
             $filename=time().'.'.$main_pic->getClientOriginalExtension();
             Image::make($main_pic)->resize(960,640)->save(public_path('/uploads/photography/'. $filename));

             
             $photography->main_pic=$filename;
             
         }

         if($request->hasFile('pic1'))
          {
             $pic1=$request->file('pic1');
           
             $filename=time().'.'.$pic1->getClientOriginalExtension();
             Image::make($pic1)->resize(960,640)->save(public_path('/uploads/photography/'. $filename));

             
             $photography->pic1=$filename;
             
         }

         if($request->hasFile('pic2'))
          {
             $pic2=$request->file('pic2');
           
             $filename=time().'.'.$pic2->getClientOriginalExtension();
             Image::make($pic2)->resize(960,640)->save(public_path('/uploads/photography/'. $filename));

             
             $photography->pic2=$filename;
             
         }

         if($request->hasFile('pic3'))
          {
             $pic3=$request->file('pic3');
           
             $filename=time().'.'.$pic3->getClientOriginalExtension();
             Image::make($pic3)->resize(960,640)->save(public_path('/uploads/photography/'. $filename));

             
             $photography->pic3=$filename;
             
         }

         if($request->hasFile('pic4'))
          {
             $pic4=$request->file('pic4');
           
             $filename=time().'.'.$pic4->getClientOriginalExtension();
             Image::make($pic4)->resize(960,640)->save(public_path('/uploads/photography/'. $filename));

             
             $photography->pic4=$filename;
             
         }
            $photography->save();


            $photography_event = new Photography_event;
            $photography_event->user_id = Auth::user()->id;
            $photography_event->Wedding=$request->Wedding;
            $photography_event->Get_togather =$request->Get_togather;
            $photography_event->Birthday =$request->Birthday;
            $photography_event->Competition =$request->Competition;
            $photography_event->Professional_Events =$request->Professional_Events;
            $photography_event->Sports =$request->Sports;
            $photography_event->Trips=$request->Trips;
            $photography_event->save();

            $award=new Award;
            $award->user_id=Auth::user()->id;
            $award->save();

            return redirect('/Profile');


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
                ->join('photographies','users.id','=','photographies.user_id')
                ->join('photography_events','users.id','=','photography_events.user_id')
                ->select('email','name','users.id as userid','photographies.id as photoid','Studio_Name', 'Address', 'ContactNo','Link','Description','Drone','Wedding_Photography','Preshoot_Vedio','Wedding_Vedio','Album_Making','Wedding_Card','main_pic','pic1','pic2','pic3','pic4','photography_events.id as eventid', 'Wedding', 'Get_togather','Birthday','Competition','Professional_Events','Sports','Trips')
                ->get();

        $dec= DB::table('users')
            ->where('users.id','=',$id)
            ->join('photography_packages','users.id','=','photography_packages.user_id')
            ->get();

        $saha=DB::table('users')
            ->join('photography_videos','users.id','=','photography_videos.user_id')
            ->where('users.id','=',$id)
            ->select('photography_videos.id','Video_Name', 'Video')
            ->get();

        $rate=DB::table('users')
            ->join('ratings','ratings.user_id','=','users.id')
            ->where('users.id','=',$id)
            ->where('blocked','=',"0")
            ->select('ratings.id','rating','Comment','ratings.Email','image','ratings.created_at','user_name')
            ->get();

        $award=DB::table('users')
              ->join('awards','awards.user_id','=','users.id')
              ->where('users.id','=',$id)
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

        return view('Photographyview',compact('data','dec','saha','average','rate','one','two','three','four','five','all','precentage1','precentage2','precentage3','precentage4','precentage5','award'));
    }

    public function wedding()
    {    $level = DB::table('photographies')
                ->join('users','users.id','=','photographies.user_id')
                ->join('photography_events','users.id','=','photography_events.user_id')
                ->where('photography_events.Wedding','=','Available')
                ->get();
      
       
       return view('Photography', compact('level'));
      
    }

    public function birthday()
    {    $level = DB::table('photographies')
                ->join('users','users.id','=','photographies.user_id')
                ->join('photography_events','users.id','=','photography_events.user_id')
                ->where('photography_events.Birthday','=','Available')
                ->get();
      
       
       return view('Photography', compact('level'));
      
    }

    public function party()
    {    $level = DB::table('photographies')
                ->join('users','users.id','=','photographies.user_id')
                ->join('photography_events','users.id','=','photography_events.user_id')
                ->where('photography_events.Get_togather','=','Available')
                ->get();
      
       
       return view('Photography', compact('level'));
      
    }

    public function prof()
    {    $level = DB::table('photographies')
                ->join('users','users.id','=','photographies.user_id')
                ->join('photography_events','users.id','=','photography_events.user_id')
                ->where('photography_events.Professional_Events','=','Available')
                ->get();
      
       
       return view('Photography', compact('level'));
      
    }

    public function sports()
    {    $level = DB::table('photographies')
                ->join('users','users.id','=','photographies.user_id')
                ->join('photography_events','users.id','=','photography_events.user_id')
                ->where('photography_events.Sports','=','Available')
                ->get();
      
       
       return view('Photography', compact('level'));
      
    }

    public function outside()
    {    $level = DB::table('photographies')
                ->join('users','users.id','=','photographies.user_id')
                ->join('photography_events','users.id','=','photography_events.user_id')
                ->where('photography_events.Trips','=','Available')
                ->get();
      
       
       return view('Photography', compact('level'));
      
    }

    public function profile()
    {   
        $id1 = Auth::id();
        $data = DB::table('photographies')
                ->join('users','users.id','=','photographies.user_id')
                ->join('photography_events','users.id','=','photography_events.user_id')
                ->where('users.id','=',$id1)
                ->select('users.id as userid','name','email','photographies.id as photographyid','Studio_Name', 'Address', 'ContactNo','Link','Description','Drone','Wedding_Photography','Preshoot_Vedio','Wedding_Vedio','Album_Making','Wedding_Card','main_pic','pic1','pic2','pic3','pic4','photography_events.id as eventid','Wedding', 'Get_togather','Birthday','Competition','Professional_Events','Sports','Trips')
                ->get();

        $deto=DB::table('users')
                ->join('photography_packages','users.id','=','photography_packages.user_id')
                ->where('users.id','=',$id1)
                ->select('photography_packages.id','Package_Name', 'Event_Type', 'Services','Price','Pdf')
                ->get();

        $saha=DB::table('users')
                ->join('photography_videos','users.id','=','photography_videos.user_id')
                ->where('users.id','=',$id1)
                ->select('photography_videos.id','Video_Name', 'Video')
                ->get();

                return view('PhotographyUserProfile',compact('data','deto','saha'));
    }

    public function InfoUpdate(Request $request, $userid, $photographyid)
    {
        //
        $request->validate(
            ['Studio_Name' => 'required|string|max:255',
            'Address' => 'required|string|max:255',
            'ContactNo' =>'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'Link' =>'required|string|max:255',
            'Description' =>'required|string|max:500',
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            
           
        ],
        ['Studio_Name.required'=> "Fill out this field",
        'Address.required'=> "Fill out this field",
        'ContactNo.required'=> "Fill out this field",
        'Link.required'=> "Fill out this field",
        'Description.required'=> "Fill out this field",
        'name.required'=> "Fill out this field",
        'email.required'=> "Fill out this field",
        
         ]
    );
        
        
        $photo = Photography::find($photographyid); 
        $photo ->Studio_Name=$request->Studio_Name;
        $photo ->Address=$request->Address;
        $photo ->Description =$request->Description;
        $photo ->ContactNo =$request->ContactNo;
        $photo ->Link =$request->Link;
        $photo ->update();

        $photo1 = User::find($userid); 
        $photo1 ->name=$request->name;
        $photo1 ->email=$request->email;
        $photo1 ->update();

        
        return redirect('/Profile')->with('flash_message','Update photography details Successfully');
        
    }

    public function eventUpdate(Request $request, $id)
    {
        //
        $photo = Photography_event::find($id); 
        $photo ->Wedding=$request->Wedding;
        $photo ->Birthday=$request->Birthday;
        $photo ->Get_togather =$request->Get_togather;
        $photo ->Competition =$request->Competition;
        $photo ->Professional_Events =$request->Professional_Events;
        $photo ->Sports =$request->Sports;
        $photo ->Trips =$request->Trips;
        $photo ->update();

        return redirect('/Profile')->with('flash_message','Update photography event Successfully');
    }

    public function featureUpdate(Request $request, $id)
    {
        //
        $photo = Photography::find($id); 
        $photo ->Wedding_Photography=$request->Wedding_Photography;
        $photo ->Preshoot_Vedio=$request->Preshoot_Vedio;
        $photo ->Wedding_Vedio =$request->Wedding_Vedio;
        $photo ->Album_Making =$request->Album_Making;
        $photo ->Wedding_Card =$request->Wedding_Card;
        $photo ->Drone =$request->Drone;
        $photo ->update();

        return redirect('/Profile')->with('flash_message','Update photography feature Successfully');
    }

    public function removeAccount($id)
    {
        $id1 = Auth::user()->id;

      

            if($id==$id1)
            {
                $photo1 = User::findOrFail($id); 
                $photo1->delete();
                $photo = Photography::where('user_id',$id)->delete();
                $photo2= Photography_event::where('user_id',$id)->delete();
                $photo3= Photography_package::where('user_id',$id)->delete();
                $photo4= Photography_video::where('user_id',$id)->delete();
                
                
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
                ->join('photographies','users.id','=','photographies.user_id')
                ->where('users.id','=',$id1)
                ->select('photographies.id')
                ->get();

                $request->validate(
                [
                    'main_pic'=> 'required|image|dimensions:min_width=300,min_height=100',
                ],
                [
                    'main_pic.required'=> "Add a image here",
                ]
            );
            
            
            foreach($data as $data1)
            {
                if($data1->id==$id)
                {
                    if($request->hasFile('main_pic'))
                    {
                        $main_pic=$request->file('main_pic');
                        $filename=time().'.'.$main_pic->getClientOriginalExtension();
                        Image::make($main_pic)->fit(480,480)->save(public_path('/uploads/photography/'. $filename));

                        $picture=Photography::where('id',$id)
                        ->update([
                                'main_pic'=>$filename


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
                ->join('photographies','users.id','=','photographies.user_id')
                ->where('users.id','=',$id1)
                ->select('photographies.id')
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
                        Image::make($pic1)->fit(1920,1080)->save(public_path('/uploads/photography/'. $filename));

                        $picture=Photography::where('id',$id)
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
                ->join('photographies','users.id','=','photographies.user_id')
                ->where('users.id','=',$id1)
                ->select('photographies.id')
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
                        Image::make($pic2)->fit(1920,1080)->save(public_path('/uploads/photography/'. $filename));

                        $picture=Photography::where('id',$id)
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
                ->join('photographies','users.id','=','photographies.user_id')
                ->where('users.id','=',$id1)
                ->select('photographies.id')
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
                        Image::make($pic3)->fit(1920,1080)->save(public_path('/uploads/photography/'. $filename));

                        $picture=Photography::where('id',$id)
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
                ->join('photographies','users.id','=','photographies.user_id')
                ->where('users.id','=',$id1)
                ->select('photographies.id')
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
                        Image::make($pic4)->fit(1920,1080)->save(public_path('/uploads/photography/'. $filename));

                        $picture=Photography::where('id',$id)
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
            'Event_Type' => 'required|string|max:255',
            'Services' =>'required|string|max:500',
            'Price' =>'required|numeric|min:0',
            'Pdf' =>'required|mimes:pdf',
            
            
           
        ],
        ['Package_Name.required'=> "Fill out this field",
        'Event_Type.required'=> "Fill out this field",
        'Services.required'=> "Fill out this field",
        'Price.required'=> "Fill out this field",
        'Pdf.required'=> "Fill out this field",
        
        ]
    );
        
        $decorate_package = new Photography_package;
        $decorate_package->user_id = Auth::user()->id;
        $decorate_package->Package_Name=$request->Package_Name;
        $decorate_package->Event_Type =$request->Event_Type;
        $decorate_package->Services =$request->Services;
        $decorate_package->Price =$request->Price;

        if($request->hasFile('Pdf'))
          {
             $Pdf=$request->file('Pdf');
           
             $filename=time().'.'.$Pdf->getClientOriginalExtension();
             $Pdf->move(public_path('/files/photography') , $filename);
             $decorate_package->Pdf=$filename;
             
         }
        
         $decorate_package->save();

         return redirect('/Profile')->with('flash_message','Add New Package Successfully');
    }

    public function EditPackage(request $request)
    {
        $request->validate(
            ['Package_Name1' => 'required|string|max:255',
            'Event_Type1' => 'required|string|max:255',
            'Services1' =>'required|string|max:500',
            'Price1' =>'required|numeric|min:0',
           
            
            
           
        ],
        ['Package_Name1.required'=> "Fill out this field",
        'Event_Type1.required'=> "Fill out this field",
        'Services1.required'=> "Fill out this field",
        'Price1.required'=> "Fill out this field",
        
        
        ]
    );
        
        
        
        
        $data=Photography_package::where('id',$request->id)
            
        ->update([
                'Package_Name'=>$request->Package_Name1,
                'Event_Type'=>$request->Event_Type1,
                'Services'=>$request->Services1,
                'Price'=>$request->Price1,
                

            ]);
        
            
        

        return redirect('/Profile')->with('flash_message','Package Updated Successfully');
    }

    public function deletePackage(request $request)
    {
        

        
            
                $deco1 = Photography_package::findOrFail($request->id);
                $deco1->delete();

                return redirect('/Profile')->with('warning_message','Package Removed Successfully');
         

    }

    public function uploadVideo(request $request,$id)
    {
            $id1 = Auth::user()->id;
            
            $data=DB::table('users')
                ->join('photographies','users.id','=','photographies.user_id')
                ->where('users.id','=',$id1)
                ->select('users.id')
                ->get();

                $request->validate(
                [
                    'Video_Name' => 'required|string|max:255',
                    'Video' =>'required|mimetypes:video/x-flv,video/mp4,video/3gpp,video/quicktime,video/x-msvideo,video/x-ms-wmv',
                ],
                [
                    'Video_Name.required'=> "please fill this field",
                    'Video.required'=> "Add a video here",
                ]
            );
            
            
            foreach($data as $data1)
            {
                if($data1->id==$id)
                {
                    $Evideo = new Photography_video;
                    $Evideo->user_id = Auth::user()->id;
                    $Evideo->Video_Name=$request->Video_Name;
                    
                    
                    
                    if($request->hasFile('Video'))
                    {
                        $Video=$request->file('Video');
           
                        $filename=time().'.'.$Video->getClientOriginalExtension();
                        $Video->move(public_path('/video/photography') , $filename);
                        $Evideo->Video=$filename;
                        $Evideo->save();
                    }

                    return redirect('/Profile')->with('flash_message','Video Uploaded Successfully');
                }

                else
                {
                    return redirect('/');
                }
            }
            
    }

    public function deleteVideo(request $request)
    {
        

         $deco1 = Photography_video::findOrFail($request->id);
                $deco1->delete();

                return redirect('/Profile')->with('warning_message','Video Deleted Successfully');
          

        
    }

    public function Search(request $request)
    {
        $photo=Photography::all();
        $search=$request->get('search');
        
        foreach($photo as $data)
        {
        
           
            $level=DB::table('users')->join('photographies','photographies.user_id','=','users.id')
            
            ->where(function($query) use ($search){
                    return $query->where('Studio_Name','like','%'.$search.'%')
                                 ->orWhere('name','like','%'.$search.'%')
                                 ->orwhere('city','like','%'.$search.'%');
                                
            })
            ->select('users.id','name','Studio_Name','ContactNo','Address','email','main_pic')
            ->get();

            $video=DB::table('users')
                ->join('photography_videos','users.id','=','photography_videos.user_id')
                ->join('awards','users.id','=','awards.user_id')
                ->where('awards.platinum','=',1)
                ->first();

            return view('Photography', compact('level','video'));
        }
    }

}
