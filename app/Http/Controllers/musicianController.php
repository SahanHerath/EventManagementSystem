<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Musician;
use Auth;
use App\Musician_event;
use Image;
use DB;

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


        return view('Music', compact('musics'));
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
                ->join('musicians','users.id','=','musicians.user_id')
                ->join('musician_events','users.id','=','musician_events.user_id')
                ->where('category','=','Music')
                ->get();

                return view('MusicView',compact('data'));
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

                return view('MusicUserProfile',compact('data'));
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

                    return redirect('/Profile')->with('flash_message','Change Your Pictures Successfully');;
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

                    return redirect('/Profile')->with('flash_message','Change Your Pictures Successfully');;
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

                    return redirect('/Profile')->with('flash_message','Change Your Pictures Successfully');;
                }

                else
                {
                    return redirect('/');
                }
            }
            
    }

}
