<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Salon;
use App\Salon_event;
use Auth;
use Image;
use DB;

class salonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $level = DB::table('salons')
                ->join('users','users.id','=','salons.user_id')
                ->get();
      
       
       return view('Salon', compact('level'));

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
            ['Salon_Name' => 'required|string|max:255',
            'Address' => 'required|string|max:255',
            'Contact_No' =>'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'Link' =>'required|string|max:255',
            'Description' =>'required|string|max:500',
            
            'Groom_Dressing' => 'required|string|max:20',
            'Bride_Dressing' => 'required|string|max:20',
            'Dress_Making' => 'required|string|max:20',
            'Jewelry' => 'required|string|max:20',
            'Makeup' => 'required|string|max:20',
            'Bridesman' => 'required|string|max:20',
            'Bridesmaid' => 'required|string|max:20',
            'HairStyle' => 'required|string|max:20',
            'Profile_Pic'=> 'required|image|dimensions:min_width=300,min_height=100',
            'pic1' => 'required|image|dimensions:min_width=300,min_height=100',
            'pic2' => 'required|image|dimensions:min_width=300,min_height=100',
            'pic3' => 'required|image|dimensions:min_width=300,min_height=100',
            'pic4' => 'required|image|dimensions:min_width=300,min_height=100',
            'wedding' => 'required|string|max:20',
            'parties' => 'required|string|max:20',
            'fashion_show' => 'required|string|max:20',

        ],
        ['Salon_Name.required'=> "Fill out this field",
        'Address.required'=> "Fill out this field",
        'Contact_No.required'=> "Fill out this field",
        'Link.required'=> "Fill out this field",
        'Description.required'=> "Fill out this field",

        'Groom_Dressing.required'=> "Fill out this field",
        'Bride_Dressingrequired'=> "Fill out this field",
        'Dress_Making.required'=> "Fill out this field",
        'Jewelry.required'=> "Fill out this field",
        'Makeup.required'=> "Fill out this field",
        'Bridesman.required'=>"Fill out this field",
        'Bridesmaid.required'=> "Fill out this field",
        'HairStyle.required'=> "Fill out this field",
        'Profile_Pic.required'=> "Add a image here",
        'pic1.required'=> "Add a image here",
        'pic2.required'=> "Add a image here",
        'pic3.required' => "Add a image here",
        'pic4.required'=> "Add a image here",
        'wedding.required'=> "Fill out this field",
        'parties.required'=> "Fill out this field",
        'fashion_show.required' => "Fill out this field",
        
       

        ]
    );
        $salon = new Salon;
        $salon->Salon_Name=$request->Salon_Name;
        $salon->Address=$request->Address;
        $salon->Contact_No =$request->Contact_No;
        $salon->Link =$request->Link;
        $salon->Description =$request->Description;
        $salon->Groom_Dressing =$request->Groom_Dressing;
        $salon->Bride_Dressing =$request->Bride_Dressing;
        $salon->Dress_Making =$request->Dress_Making;
        $salon->Jewelry =$request->Jewelry;
        $salon->Makeup=$request->Makeup;
        $salon->Bridesman=$request->Bridesman;
        $salon->Bridesmaid=$request->Bridesmaid;
        $salon->HairStyle=$request->HairStyle;
        
        $salon->user_id = Auth::user()->id;
        
        if($request->hasFile('Profile_Pic'))
          {
             $Profile_Pic=$request->file('Profile_Pic');
           
             $filename=time().'.'.$Profile_Pic->getClientOriginalExtension();
             Image::make($Profile_Pic)->resize(960,640)->save(public_path('/uploads/salon/'. $filename));

             
             $salon->Profile_Pic=$filename;
             
         }

         if($request->hasFile('pic1'))
          {
             $pic1=$request->file('pic1');
           
             $filename=time().'.'.$pic1->getClientOriginalExtension();
             Image::make($pic1)->resize(960,640)->save(public_path('/uploads/salon/'. $filename));

             
             $salon->pic1=$filename;
             
         }

         if($request->hasFile('pic2'))
          {
             $pic2=$request->file('pic2');
           
             $filename=time().'.'.$pic2->getClientOriginalExtension();
             Image::make($pic2)->resize(960,640)->save(public_path('/uploads/salon/'. $filename));

             
             $salon->pic2=$filename;
             
         }

         if($request->hasFile('pic3'))
          {
             $pic3=$request->file('pic3');
           
             $filename=time().'.'.$pic3->getClientOriginalExtension();
             Image::make($pic3)->resize(960,640)->save(public_path('/uploads/salon/'. $filename));

             
             $salon->pic3=$filename;
             
         }

         if($request->hasFile('pic4'))
          {
             $pic4=$request->file('pic4');
           
             $filename=time().'.'.$pic4->getClientOriginalExtension();
             Image::make($pic4)->resize(960,640)->save(public_path('/uploads/salon/'. $filename));

             
             $salon->pic4=$filename;
             
         }
             $salon->save();


            $salon_event = new Salon_event;
            $salon_event->user_id = Auth::user()->id;
            $salon_event->wedding=$request->wedding;
            $salon_event->parties =$request->parties;
            $salon_event->fashion_show =$request->fashion_show;
            
            
            
            $salon_event->save();

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
                ->join('salons','users.id','=','salons.user_id')
                ->join('salon_events','users.id','=','salon_events.user_id')
                ->where('category','=','Bridel_Designers')
                ->get();

                return view('SalonView',compact('data'));
    }

    public function wedding()
    {
        //
        $level = DB::table('salons')
                ->join('users','users.id','=','salons.user_id')
                ->join('salon_events','users.id','=','salon_events.user_id')
                ->where('salon_events.wedding','=','Available')
                ->get();
      
       
       return view('Salon', compact('level'));

    }

    public function party()
    {
        //
        $level = DB::table('salons')
                ->join('users','users.id','=','salons.user_id')
                ->join('salon_events','users.id','=','salon_events.user_id')
                ->where('salon_events.parties','=','Available')
                ->get();
      
       
       return view('Salon', compact('level'));

    }

    public function profile()
    {
        $id1 = Auth::id();
        $data = DB::table('salons')
                ->join('users','users.id','=','salons.user_id')
                ->join('salon_events','users.id','=','salon_events.user_id')
                ->where('category','=','Bridel_Designers')
                ->where('users.id','=',$id1)
                ->select('users.id as userid','name','email','salons.id as salonid','Salon_Name','Address', 'Contact_No', 'Link','Description','Groom_Dressing','Bride_Dressing','Dress_Making','Jewelry','Makeup','Bridesman','Bridesmaid','Profile_Pic','pic1','pic2','pic3','pic4','HairStyle','salon_events.id as eventid','wedding', 'parties', 'fashion_show')
                ->get();

                return view('SalonUserProfile',compact('data'));
    }

    public function InfoUpdate(Request $request, $userid, $salonid)
    {
        //
        $request->validate(
            ['Salon_Name' => 'required|string|max:255',
            'Address' => 'required|string|max:255',
            'Contact_No' =>'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'Link' =>'required|string|max:255',
            'Description' =>'required|string|max:500',
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            
            
           
        ],
        ['Salon_Name.required'=> "Fill out this field",
        'Address.required'=> "Fill out this field",
        'Contact_No.required'=> "Fill out this field",
        'Link.required'=> "Fill out this field",
        'Description.required'=> "Fill out this field",
        'name.required'=> "Fill out this field",
        'email.required'=> "Fill out this field",
        
        
         ]
    );
        
        
       

        $data=Salon::where('id',$salonid)
            
        ->update([
                'Salon_Name'=>$request->Salon_Name,
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

    public function eventUpdate(Request $request, $id)
    {
       

        $data=Salon_event::where('id',$id)
            
        ->update([
                'wedding'=>$request->wedding,
                'parties'=>$request->parties,
                'fashion_show'=>$request->fashion_show,
                
            ]);

        return redirect('/Profile');
    }

    public function featureUpdate(Request $request, $id)
    {
        //
        

        $data=Salon::where('id',$id)
            
        ->update([
                'Groom_Dressing'=>$request->Groom_Dressing,
                'Bride_Dressing'=>$request->Bride_Dressing,
                'Dress_Making'=>$request->Dress_Making,
                'Jewelry'=>$request->Jewelry,
                'Makeup'=>$request->Makeup,
                'Bridesman'=>$request->Bridesman,
                'Bridesmaid'=>$request->Bridesmaid,
                'HairStyle'=>$request->HairStyle,

            ]);

        return redirect('/Profile');
    }

    public function removeAccount($id)
    {
        $id1 = Auth::user()->id;

      

            if($id==$id1)
            {
                $salon1 = User::findOrFail($id); 
                $salon1->delete();
                $salon = Salon::where('user_id',$id)->delete();
                $salon2 = Salon_event::where('user_id',$id)->delete();
                
                
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
                ->join('salons','users.id','=','salons.user_id')
                ->where('users.id','=',$id1)
                ->select('salons.id')
                ->get();

                $request->validate(
                [
                    'Profile_Pic'=> 'required|image|dimensions:min_width=300,min_height=100',
                ],
                [
                    'Profile_Pic.required'=> "Add a image here",
                ]
            );
            
            
            foreach($data as $data1)
            {
                if($data1->id==$id)
                {
                    if($request->hasFile('Profile_Pic'))
                    {
                        $Profile_Pic=$request->file('Profile_Pic');
                        $filename=time().'.'.$Profile_Pic->getClientOriginalExtension();
                        Image::make($Profile_Pic)->fit(480,480)->save(public_path('/uploads/salon/'. $filename));

                        $picture=Salon::where('id',$id)
                        ->update([
                                'Profile_Pic'=>$filename


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
                ->join('salons','users.id','=','salons.user_id')
                ->where('users.id','=',$id1)
                ->select('salons.id')
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
                        Image::make($pic1)->fit(1920,1080)->save(public_path('/uploads/salon/'. $filename));

                        $picture=Salon::where('id',$id)
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
                ->join('salons','users.id','=','salons.user_id')
                ->where('users.id','=',$id1)
                ->select('salons.id')
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
                        Image::make($pic2)->fit(1920,1080)->save(public_path('/uploads/salon/'. $filename));

                        $picture=Salon::where('id',$id)
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
                ->join('salons','users.id','=','salons.user_id')
                ->where('users.id','=',$id1)
                ->select('salons.id')
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
                        Image::make($pic3)->fit(1920,1080)->save(public_path('/uploads/salon/'. $filename));

                        $picture=Salon::where('id',$id)
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
                ->join('salons','users.id','=','salons.user_id')
                ->where('users.id','=',$id1)
                ->select('salons.id')
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
                        Image::make($pic4)->fit(1920,1080)->save(public_path('/uploads/salon/'. $filename));

                        $picture=Salon::where('id',$id)
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


}
 