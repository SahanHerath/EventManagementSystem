<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Musician;
use Auth;
use App\Musician_event;
use App\Music_package;
use App\Music_video;
use Image;
use DB;
use App\Award;

class musicianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $musics = DB::table('musicians')
                ->join('users','users.id','=','musicians.user_id')
                ->get();

        $video=DB::table('users')
                ->join('music_videos','users.id','=','music_videos.user_id')
                ->join('awards','users.id','=','awards.user_id')
                ->where('awards.platinum','=',1)
                ->first();


        return view('Music', compact('musics','video'));
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
            ['Dj_Name' => 'required|string|max:255',
            'Address' => 'required|string|max:255',
            'ContactNo' =>'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'Link' =>'required|string|max:255',
            'Description' =>'required|string|max:500',
            'Playing_Hrs' =>'required|numeric|min:0',
            'Payment' => 'required|numeric|min:0',
            'Extra_Cost' => 'required|numeric|min:0',
            'Fire' => 'required|string|max:20',
            'Smoke' => 'required|string|max:20',
            'Lights' => 'required|string|max:20',
            'Main_Logo'=> 'required|image|dimensions:min_width=300,min_height=100',
            'pic1' => 'required|image|dimensions:min_width=300,min_height=100',
            'pic2' => 'required|image|dimensions:min_width=300,min_height=100',
            'pic3' => 'required|image|dimensions:min_width=300,min_height=100',
            'pic4' => 'required|image|dimensions:min_width=300,min_height=100',
            'Wedding' => 'required|string|max:20',
            'Birthday' => 'required|string|max:20',
            'Beach_Party' => 'required|string|max:20',
            'Get_Together'=> 'required|string|max:20',
            'Parties'=> 'required|string|max:20',

        ],
        ['Dj_Name.required'=> "Fill out this field",
        'Address.required'=> "Fill out this field",
        'ContactNo.required'=> "Fill out this field",
        'Link.required'=> "Fill out this field",
        'Description.required'=> "Fill out this field",
        'Playing_Hrs.required'=> "Fill out this field",
        'Payment.required'=> "Fill out this field",
        'Extra_Cost.required'=> "Fill out this field",
        'Fire.required'=> "Fill out this field",
        'Smoke.required'=> "Fill out this field",
        'Lights.required'=> "Fill out this field",
        'Main_Logo.required'=> "Add a image here",
        'pic1.required'=> "Add a image here",
        'pic2.required'=> "Add a image here",
        'pic3.required' => "Add a image here",
        'pic4.required'=> "Add a image here",
        'Wedding.required'=> "Fill out this field",
        'Birthday.required'=> "Fill out this field",
        'Beach_Party.required' => "Fill out this field",
        'Get_Together.required'=> "Fill out this field",
        'Parties.required'=> "Fill out this field"
       

        ]
    );
        $music = new Musician;
        $music->Dj_Name=$request->Dj_Name;
        $music->Address=$request->Address;
        $music->ContactNo =$request->ContactNo;
        $music->Link =$request->Link;
        $music->Description =$request->Description;
        $music->Playing_Hrs =$request->Playing_Hrs;
        $music->Payment =$request->Payment;
        $music->Extra_Cost=$request->Extra_Cost;
        $music->Fire=$request->Fire;
        $music->Smoke=$request->Smoke;
        $music->Lights=$request->Lights;
        $music->user_id = Auth::user()->id;
        
        if($request->hasFile('Main_Logo'))
          {
             $Main_Logo=$request->file('Main_Logo');
           
             $filename=time().'.'.$Main_Logo->getClientOriginalExtension();
             Image::make($Main_Logo)->fit(960,640)->save(public_path('/uploads/music/'. $filename));

             
             $music->Main_Logo=$filename;
             
         }

         if($request->hasFile('pic1'))
          {
             $pic1=$request->file('pic1');
           
             $filename=time().'.'.$pic1->getClientOriginalExtension();
             Image::make($pic1)->fit(960,640)->save(public_path('/uploads/music/'. $filename));

             
             $music->pic1=$filename;
             
         }

         if($request->hasFile('pic2'))
          {
             $pic2=$request->file('pic2');
           
             $filename=time().'.'.$pic2->getClientOriginalExtension();
             Image::make($pic2)->fit(960,640)->save(public_path('/uploads/music/'. $filename));

             
             $music->pic2=$filename;
             
         }

         if($request->hasFile('pic3'))
          {
             $pic3=$request->file('pic3');
           
             $filename=time().'.'.$pic3->getClientOriginalExtension();
             Image::make($pic3)->fit(960,640)->save(public_path('/uploads/music/'. $filename));

             
             $music->pic3=$filename;
             
         }

         if($request->hasFile('pic4'))
          {
             $pic4=$request->file('pic4');
           
             $filename=time().'.'.$pic4->getClientOriginalExtension();
             Image::make($pic4)->fit(960,640)->save(public_path('/uploads/music/'. $filename));

             
             $music->pic4=$filename;
             
         }
             $music->save();


            $music_event = new Musician_event;
            $music_event->user_id = Auth::user()->id;
            $music_event->Wedding=$request->Wedding;
            $music_event->Birthday =$request->Birthday;
            $music_event->Beach_Party =$request->Beach_Party;
            $music_event->Get_Together =$request->Get_Together;
            $music_event->Parties =$request->Parties;
            
            $music_event->save();

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
                ->join('musicians','users.id','=','musicians.user_id')
                ->join('musician_events','users.id','=','musician_events.user_id')
                ->where('category','=','Music')
                ->select('name', 'email','users.id as userid','musicians.id as musicid','Dj_Name', 'Address', 'ContactNo','Link','Description','Playing_Hrs','Payment','Extra_Cost','Fire','Smoke','Lights','Main_Logo','pic1','pic2','pic3','pic4','musician_events.id as eventid','Wedding', 'Birthday', 'Beach_Party','Get_Together','Parties')
                ->get();

        $deto=DB::table('users')
                ->join('music_packages','users.id','=','music_packages.user_id')
                ->where('users.id','=',$id)
                ->select('music_packages.id','Package_Name', 'Hours', 'Services','Price','Pdf')
                ->get();

                
        $saha=DB::table('users')
            ->join('music_videos','users.id','=','music_videos.user_id')
            ->where('users.id','=',$id)
            ->select('music_videos.id','Video_Name', 'Video')
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

        $award=DB::table('users')
                ->join('awards','awards.user_id','=','users.id')
                ->where('users.id','=',$id)
                ->get();

        
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
                return view('MusicView',compact('award','data','deto','saha','rate','average','one','two','three','four','five','all','precentage1','precentage2','precentage3','precentage4','precentage5'));
    }

    public function wedding()
    {
        //
        $musics = DB::table('musicians')
                ->join('users','users.id','=','musicians.user_id')
                ->join('musician_events','users.id','=','musician_events.user_id')
                ->where('musician_events.Wedding','=','Available')
                ->get();


        return view('Music', compact('musics'));
    }

    public function birthday()
    {
        //
        $musics = DB::table('musicians')
                ->join('users','users.id','=','musicians.user_id')
                ->join('musician_events','users.id','=','musician_events.user_id')
                ->where('musician_events.Birthday','=','Available')
                ->get();


        return view('Music', compact('musics'));
    }

    public function party()
    {
        //
        $musics = DB::table('musicians')
                ->join('users','users.id','=','musicians.user_id')
                ->join('musician_events','users.id','=','musician_events.user_id')
                ->where('musician_events.Parties','=','Available')
                ->get();


        return view('Music', compact('musics'));
    }

    public function outside()
    {
        //
        $musics = DB::table('musicians')
                ->join('users','users.id','=','musicians.user_id')
                ->join('musician_events','users.id','=','musician_events.user_id')
                ->where('musician_events.Beach_Party','=','Available')
                ->get();


        return view('Music', compact('musics'));
    }

    public function profile()
    {
        $id1 = Auth::id();
        $data = DB::table('musicians')
                ->join('users','users.id','=','musicians.user_id')
                ->join('musician_events','users.id','=','musician_events.user_id')
                ->where('category','=','Music')
                ->where('users.id','=',$id1)
                ->select( 'users.id as userid','name','email','musicians.id as musicianid','Dj_Name', 'Address', 'ContactNo','Link','Description','Playing_Hrs','Payment','Extra_Cost','Fire','Smoke','Lights','Main_Logo','pic1','pic2','pic3','pic4','musician_events.id as eventid','Wedding', 'Birthday', 'Beach_Party','Get_Together','Parties')
                ->get();

        $deto=DB::table('users')
                ->join('music_packages','users.id','=','music_packages.user_id')
                ->where('users.id','=',$id1)
                ->select('music_packages.id','Package_Name', 'Hours', 'Services','Price','Pdf')
                ->get();

        $saha=DB::table('users')
                ->join('music_videos','users.id','=','music_videos.user_id')
                ->where('users.id','=',$id1)
                ->select('music_videos.id','Video_Name', 'Video')
                ->get();

                return view('MusicUserProfile',compact('data','deto','saha'));
    }

    public function InfoUpdate(Request $request, $userid, $musicid)
    {
        //
        $request->validate(
            ['Dj_Name' => 'required|string|max:255',
            'Address' => 'required|string|max:255',
            'ContactNo' =>'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'Link' =>'required|string|max:255',
            'Description' =>'required|string|max:500',
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'Playing_Hrs' =>'required|numeric|min:0',
            'Payment' => 'required|numeric|min:0',
            'Extra_Cost' => 'required|numeric|min:0',
            
           
        ],
        ['Dj_Name.required'=> "Fill out this field",
        'Address.required'=> "Fill out this field",
        'ContactNo.required'=> "Fill out this field",
        'Link.required'=> "Fill out this field",
        'Description.required'=> "Fill out this field",
        'name.required'=> "Fill out this field",
        'email.required'=> "Fill out this field",
        'Playing_Hrs.required'=> "Fill out this field",
        'Payment.required'=> "Fill out this field",
        'Extra_Cost.required'=> "Fill out this field",
        
         ]
    );
        
        
       

        $data=Musician::where('id',$musicid)
            
        ->update([
                'Dj_Name'=>$request->Dj_Name,
                'Address'=>$request->Address,
                'Description'=>$request->Description,
                'ContactNo'=>$request->ContactNo,
                'Link'=>$request->Link,
                'Playing_Hrs'=>$request->Playing_Hrs,
                'Payment'=>$request->Payment,
                'Extra_Cost'=>$request->Extra_Cost,

                
        ]);
        

        

        $music1  = User::find($userid); 
        $music1  ->name=$request->name;
        $music1 ->email=$request->email;
        $music1  ->update();

        
        return redirect('/Profile');
        
    }

    public function eventUpdate(Request $request, $id)
    {
        

        $data=Musician_event::where('id',$id)
            
        ->update([
                'Wedding'=>$request->Wedding,
                'Birthday'=>$request->Birthday,
                'Get_Together'=>$request->Get_Together,
                'Beach_Party'=>$request->Beach_Party,
                'Parties'=>$request->Parties,
               

                
        ]);

        return redirect('/Profile');
    }

    public function featureUpdate(Request $request, $id)
    {
        //
        

        $data=Musician::where('id',$id)
            
        ->update([
                'Fire'=>$request->Fire,
                'Smoke'=>$request->Smoke,
                'Lights'=>$request->Lights,
            ]);

        return redirect('/Profile');
    }

    public function removeAccount($id)
    {
        $id1 = Auth::user()->id;

      

            if($id==$id1)
            {
                $music1 = User::findOrFail($id); 
                $music1->delete();
                $music = Musician::where('user_id',$id)->delete();
                $event = Musician_event::where('user_id',$id)->delete();
                $event1 = Music_package::where('user_id',$id)->delete();
                $event2 = Music_video::where('user_id',$id)->delete();
                
                
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
                ->join('musicians','users.id','=','musicians.user_id')
                ->where('users.id','=',$id1)
                ->select('musicians.id')
                ->get();

                $request->validate(
                [
                    'Main_Logo'=> 'required|image|dimensions:min_width=300,min_height=100',
                ],
                [
                    'Main_Logo.required'=> "Add a image here",
                ]
            );
            
            
            foreach($data as $data1)
            {
                if($data1->id==$id)
                {
                    if($request->hasFile('Main_Logo'))
                    {
                        $Main_Logo=$request->file('Main_Logo');
                        $filename=time().'.'.$Main_Logo->getClientOriginalExtension();
                        Image::make($Main_Logo)->fit(480,480)->save(public_path('/uploads/music/'. $filename));

                        $picture=Musician::where('id',$id)
                        ->update([
                                'Main_Logo'=>$filename


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
                ->join('musicians','users.id','=','musicians.user_id')
                ->where('users.id','=',$id1)
                ->select('musicians.id')
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
                        Image::make($pic1)->fit(1920,1080)->save(public_path('/uploads/music/'. $filename));

                        $picture=Musician::where('id',$id)
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
                ->join('musicians','users.id','=','musicians.user_id')
                ->where('users.id','=',$id1)
                ->select('musicians.id')
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
                        Image::make($pic2)->fit(1920,1080)->save(public_path('/uploads/music/'. $filename));

                        $picture=Musician::where('id',$id)
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
                ->join('musicians','users.id','=','musicians.user_id')
                ->where('users.id','=',$id1)
                ->select('musicians.id')
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
                        Image::make($pic3)->fit(1920,1080)->save(public_path('/uploads/music/'. $filename));

                        $picture=Musician::where('id',$id)
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
                ->join('musicians','users.id','=','musicians.user_id')
                ->where('users.id','=',$id1)
                ->select('musicians.id')
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
                        Image::make($pic4)->fit(1920,1080)->save(public_path('/uploads/music/'. $filename));

                        $picture=Musician::where('id',$id)
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
        
        $music_package = new Music_package;
        $music_package->user_id = Auth::user()->id;
        $music_package->Package_Name=$request->Package_Name;
        $music_package->Hours =$request->Hours;
        $music_package->Services =$request->Services;
        $music_package->Price =$request->Price;

        if($request->hasFile('Pdf'))
          {
             $Pdf=$request->file('Pdf');
           
             $filename=time().'.'.$Pdf->getClientOriginalExtension();
             $Pdf->move(public_path('/files/music') , $filename);
             $music_package->Pdf=$filename;
             
         }
        
         $music_package->save();

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
        
        
        
        
        $data=Music_package::where('id',$request->id)
            
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
        

                $deco1 = Music_package::findOrFail($request->id);
                $deco1->delete();

                return redirect('/Profile')->with('warning_message','Package is deleted Successfully');
       

    }

    public function uploadVideo(request $request,$id)
    {
            $id1 = Auth::user()->id;
            
            $data=DB::table('users')
                ->join('musicians','users.id','=','musicians.user_id')
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
                    $Evideo = new Music_video;
                    $Evideo->user_id = Auth::user()->id;
                    $Evideo->Video_Name=$request->Video_Name;
                    
                    
                    
                    if($request->hasFile('Video'))
                    {
                        $Video=$request->file('Video');
           
                        $filename=time().'.'.$Video->getClientOriginalExtension();
                        $Video->move(public_path('/video/music') , $filename);
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
        

       
                $deco1 = Music_video::findOrFail($request->id);
                $deco1->delete();

                return redirect('/Profile')->with('warning_message','Video Deleted Successfully');
            

        
    }

    public function Search(request $request)
    {
        $music=Musician::all();
        $search=$request->get('search');
        
        foreach($music as $data)
        {
        
           
            $musics=DB::table('users')->join('musicians','musicians.user_id','=','users.id')
            
            ->where(function($query) use ($search){
                    return $query->where('Dj_Name','like','%'.$search.'%')
                                 ->orWhere('name','like','%'.$search.'%')
                                 ->orwhere('city','like','%'.$search.'%');
                                
            })
            ->select('users.id','name','Dj_Name','ContactNo','Address','email','Main_Logo')
            ->get();

            return view('Music', compact('musics'));
        }
    }


}
