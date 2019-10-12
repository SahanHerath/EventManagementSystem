<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Dancer;
use App\Dancer_event;
use App\Dance_package;
use App\Dance_video;
use DB;
use Auth;
use Image;
use App\Award;

class DancingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $level = DB::table('dancers')
                ->join('users','users.id','=','dancers.user_id')
                ->get();
      
       
       return view('Dance', compact('level'));

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
            'choreography' =>'required|string|max:20',
            'Gender' =>'required|string|max:20',
            
            
            'Traditional' => 'required|string|max:20',
            'Western' => 'required|string|max:20',
            'Indian' => 'required|string|max:20',
            'Kandyan' => 'required|string|max:20',
            'Casual' => 'required|string|max:20',
            'Other' => 'required|string|max:20',
            'Main_pic'=> 'required|image|dimensions:min_width=300,min_height=100',
            'pic1' => 'required|image|dimensions:min_width=300,min_height=100',
            'pic2' => 'required|image|dimensions:min_width=300,min_height=100',
            'pic3' => 'required|image|dimensions:min_width=300,min_height=100',
            'pic4' => 'required|image|dimensions:min_width=300,min_height=100',
            'Wedding' => 'required|string|max:20',
            'Party' => 'required|string|max:20',
            'Corporate_event' => 'required|string|max:20',
            'Musical_event' => 'required|string|max:20',
            

        ],
        ['Team_Name.required'=> "Fill out this field",
        'Address.required'=> "Fill out this field",
        'Contact_No.required'=> "Fill out this field",
        'Link.required'=> "Fill out this field",
        'Description.required'=> "Fill out this field",
        'choreography.required'=> "Fill out this field",
        'Gender.required'=> "Fill out this field",
        'Traditional.required'=> "Fill out this field",
        'Western.required'=> "Fill out this field",
        'Indian.required'=> "Fill out this field",
        'Kandyan.required'=> "Fill out this field",
        'Casual.required'=> "Fill out this field",
        'Other.required'=> "Fill out this field",
        
        'Main_Logo.required'=> "Add a image here",
        'pic1.required'=> "Add a image here",
        'pic2.required'=> "Add a image here",
        'pic3.required' => "Add a image here",
        'pic4.required'=> "Add a image here",
        'Wedding.required'=> "Fill out this field",
        'Party.required'=> "Fill out this field",
        'Corporate_event.required' => "Fill out this field",
        'Musical_event.required'=> "Fill out this field",
        
       

        ]
    );
        $dancing = new Dancer;
        $dancing->Team_Name=$request->Team_Name;
        $dancing->Address=$request->Address;
        $dancing->Contact_No =$request->Contact_No;
        $dancing->Link =$request->Link;
        $dancing->Description =$request->Description;
        $dancing->choreography =$request->choreography;
        $dancing->Gender =$request->Gender;
        $dancing->Traditional=$request->Traditional;
        $dancing->Western=$request->Western;
        $dancing->Indian =$request->Indian;
        $dancing->Kandyan=$request->Kandyan;
        $dancing->Casual=$request->Casual;
        $dancing->Other=$request->Other;
        $dancing->user_id = Auth::user()->id;
        
        if($request->hasFile('Main_pic'))
          {
             $Main_pic=$request->file('Main_pic');
           
             $filename=time().'.'.$Main_pic->getClientOriginalExtension();
             Image::make($Main_pic)->fit(960,640)->save(public_path('/uploads/dancing/'. $filename));

             
             $dancing->Main_pic=$filename;
             
         }

         if($request->hasFile('pic1'))
          {
             $pic1=$request->file('pic1');
           
             $filename=time().'.'.$pic1->getClientOriginalExtension();
             Image::make($pic1)->fit(960,640)->save(public_path('/uploads/dancing/'. $filename));

             
             $dancing->pic1=$filename;
             
         }

         if($request->hasFile('pic2'))
          {
             $pic2=$request->file('pic2');
           
             $filename=time().'.'.$pic2->getClientOriginalExtension();
             Image::make($pic2)->fit(960,640)->save(public_path('/uploads/dancing/'. $filename));

             
             $dancing->pic2=$filename;
             
         }

         if($request->hasFile('pic3'))
          {
             $pic3=$request->file('pic3');
           
             $filename=time().'.'.$pic3->getClientOriginalExtension();
             Image::make($pic3)->fit(960,640)->save(public_path('/uploads/dancing/'. $filename));

             
             $dancing->pic3=$filename;
             
         }

         if($request->hasFile('pic4'))
          {
             $pic4=$request->file('pic4');
           
             $filename=time().'.'.$pic4->getClientOriginalExtension();
             Image::make($pic4)->fit(960,640)->save(public_path('/uploads/dancing/'. $filename));

             
             $dancing->pic4=$filename;
             
         }
                $dancing->save();


            $dance_event = new Dancer_event;
            $dance_event->user_id = Auth::user()->id;
            $dance_event->Wedding=$request->Wedding;
            $dance_event->Party =$request->Party;
            
            $dance_event->Musical_event =$request->Musical_event;
            $dance_event->Corporate_event =$request->Corporate_event;
            
            
            $dance_event->save();

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
                ->join('dancers','users.id','=','dancers.user_id')
                ->join('dancer_events','users.id','=','dancer_events.user_id')
                ->where('category','=','Dancing')
                ->select('users.id as userid','name','email','dancers.id as danceid','Team_Name', 'Address', 'Contact_No','Link','Description','Gender','choreography','Traditional','Western','Indian','Kandyan','Casual','Other','Main_pic','pic1','pic2','pic3','pic4','dancer_events.id as eventid','Wedding','Musical_event','Corporate_event','Party')
                ->get();

        $deto=DB::table('users')
                ->join('dance_packages','users.id','=','dance_packages.user_id')
                ->where('users.id','=',$id)
                ->select('dance_packages.id','Package_Name', 'Dancing_Type', 'Services','Price','Pdf')
                ->get();

                
        $saha=DB::table('users')
            ->join('dance_videos','users.id','=','dance_videos.user_id')
            ->where('users.id','=',$id)
            ->select('dance_videos.id','Video_Name', 'Video')
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

        return view('DanceView',compact('data','deto','saha','rate','average','one','two','three','four','five','precentage1','precentage2','precentage3','precentage4','precentage5','all'));
    }

    public function wedding()
    {
        //
        $level = DB::table('dancers')
                ->join('users','users.id','=','dancers.user_id')
                ->join('dancer_events','users.id','=','dancer_events.user_id')
                ->where('dancer_events.Wedding','=','Available')
                ->get();
      
       
       return view('Dance', compact('level'));
    }

    public function birthday()
    {
        //
        $level = DB::table('dancers')
                ->join('users','users.id','=','dancers.user_id')
                ->join('dancer_events','users.id','=','dancer_events.user_id')
                ->where('dancer_events.Party','=','Available')
                ->get();
      
       
       return view('Dance', compact('level'));
    }

    public function party()
    {
        //
        $level = DB::table('dancers')
                ->join('users','users.id','=','dancers.user_id')
                ->join('dancer_events','users.id','=','dancer_events.user_id')
                ->where('dancer_events.Party','=','Available')
                ->get();
      
       
       return view('Dance', compact('level'));
    }

    public function profile()
    {
        $id1 = Auth::id();
        $data = DB::table('users')
                ->join('dancers','users.id','=','dancers.user_id')
                ->join('dancer_events','users.id','=','dancer_events.user_id')
                ->where('category','=','Dancing')
                ->where('users.id','=',$id1)
                ->select('users.id as userid','name','email','dancers.id as dancerid','Team_Name', 'Address', 'Contact_No','Link','Description','Gender','choreography','Traditional','Western','Indian','Kandyan','Casual','Other','Main_pic','pic1','pic2','pic3','pic4','dancer_events.id as eventid', 'Wedding','Musical_event','Corporate_event','Party')
                ->get();

        $deto=DB::table('users')
                ->join('dance_packages','users.id','=','dance_packages.user_id')
                ->where('users.id','=',$id1)
                ->select('dance_packages.id','Package_Name', 'Dancing_Type', 'Services','Price','Pdf')
                ->get();

                
        $saha=DB::table('users')
            ->join('dance_videos','users.id','=','dance_videos.user_id')
            ->where('users.id','=',$id1)
            ->select('dance_videos.id','Video_Name', 'Video')
            ->get();

                return view('DancerUserProfile',compact('data','deto','saha'));
    }

    public function eventUpdate(Request $request, $id)
    {
        //
        $dance = Dancer_event::find($id); 
        $dance ->Wedding=$request->Wedding;
        $dance ->Party=$request->Party;
        $dance ->Musical_event =$request->Musical_event;
        $dance ->Corporate_event =$request->Corporate_event;
        $dance ->update();

        return redirect('/Profile');
    }

    public function featureUpdate(Request $request, $id)
    {
        //
        $dance = Dancer::find($id); 
        $dance ->Traditional=$request->Traditional;
        $dance ->Western=$request->Western;
        $dance ->Indian =$request->Indian;
        $dance ->Kandyan =$request->Kandyan;
        $dance ->Casual =$request->Casual;
        $dance ->Other =$request->Other;
        $dance ->update();

        return redirect('/Profile');
    }

    public function InfoUpdate(Request $request, $userid, $dancerid)
    {
        //
        $request->validate(
            ['Team_Name' => 'required|string|max:255',
            'Address' => 'required|string|max:255',
            'Contact_No' =>'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'Link' =>'required|string|max:255',
            'Description' =>'required|string|max:500',
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'choreography' => 'required|string|max:20',
            'Gender' => 'required|string|max:20',
            
           
        ],
        ['Team_Name.required'=> "Fill out this field",
        'Address.required'=> "Fill out this field",
        'Contact_No.required'=> "Fill out this field",
        'Link.required'=> "Fill out this field",
        'Description.required'=> "Fill out this field",
        'choreography.required'=> "Fill out this field",
        'Gender.required'=> "Fill out this field",
        'name.required'=> "Fill out this field",
        'email.required'=> "Fill out this field",
        
         ]
    );
        
        
        $dancer = Dancer::find($dancerid); 
        $dancer ->Team_Name=$request->Team_Name;
        $dancer ->Address=$request->Address;
        $dancer ->Description =$request->Description;
        $dancer ->Contact_No =$request->Contact_No;
        $dancer ->Link =$request->Link;
        $dancer ->choreography =$request->choreography;
        $dancer ->Gender =$request->Gender;
        $dancer ->update();

        $dancer = User::find($userid); 
        $dancer ->name=$request->name;
        $dancer ->email=$request->email;
        $dancer ->update();

        
        return redirect('/Profile');
        
    }

    public function removeAccount($id)
    {
        $id1 = Auth::user()->id;

      

            if($id==$id1)
            {
                $dance1 = User::findOrFail($id); 
                $dance1 ->delete();
                $dance2  = Dancer::where('user_id',$id)->delete();
                $dance3  = Dancer_event::where('user_id',$id)->delete();
                $dance4  = Dance_package::where('user_id',$id)->delete();
                $dance5  = Dance_video::where('user_id',$id)->delete();
                
                
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
                ->join('dancers','users.id','=','dancers.user_id')
                ->where('users.id','=',$id1)
                ->select('dancers.id')
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
                        Image::make($Main_pic)->fit(480,480)->save(public_path('/uploads/dancing/'. $filename));

                        $picture=Dancer::where('id',$id)
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
                ->join('dancers','users.id','=','dancers.user_id')
                ->where('users.id','=',$id1)
                ->select('dancers.id')
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
                        Image::make($pic1)->fit(1920,1080)->save(public_path('/uploads/dancing/'. $filename));

                        $picture=Dancer::where('id',$id)
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
                ->join('dancers','users.id','=','dancers.user_id')
                ->where('users.id','=',$id1)
                ->select('dancers.id')
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
                        Image::make($pic2)->fit(1920,1080)->save(public_path('/uploads/dancing/'. $filename));

                        $picture=Dancer::where('id',$id)
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
                ->join('dancers','users.id','=','dancers.user_id')
                ->where('users.id','=',$id1)
                ->select('dancers.id')
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
                        Image::make($pic3)->fit(1920,1080)->save(public_path('/uploads/dancing/'. $filename));

                        $picture=Dancer::where('id',$id)
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
                ->join('dancers','users.id','=','dancers.user_id')
                ->where('users.id','=',$id1)
                ->select('dancers.id')
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
                        Image::make($pic4)->fit(1920,1080)->save(public_path('/uploads/dancing/'. $filename));

                        $picture=Dancer::where('id',$id)
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
            'Dancing_Type' => 'required|string|max:255',
            'Services' =>'required|string|max:500',
            'Price' =>'required|numeric|min:0',
            'Pdf' =>'required|mimes:pdf',
            
            
            
           
        ],
        ['Package_Name.required'=> "Fill out this field",
        'Dancing_Type.required'=> "Fill out this field",
        'Services.required'=> "Fill out this field",
        'Price.required'=> "Fill out this field",
        'Pdf.required'=> "Fill out this field",
        
        
        ]
    );
        
        $dance_package = new Dance_package;
        $dance_package->user_id = Auth::user()->id;
        $dance_package->Package_Name=$request->Package_Name;
        $dance_package->Dancing_Type =$request->Dancing_Type;
        $dance_package->Services =$request->Services;
        $dance_package->Price =$request->Price;

        if($request->hasFile('Pdf'))
          {
             $Pdf=$request->file('Pdf');
           
             $filename=time().'.'.$Pdf->getClientOriginalExtension();
             $Pdf->move(public_path('/files/dancing') , $filename);
             $dance_package->Pdf=$filename;
             
         }
        $dance_package->save();

         return redirect('/Profile')->with('flash_message','Add New Package Successfully');
    }

    public function EditPackage(request $request)
    {
        $request->validate(
            ['Package_Name1' => 'required|string|max:255',
            'Dancing_Type1' => 'required|string|max:255',
            'Services1' =>'required|string|max:500',
            'Price1' =>'required|numeric|min:0',
           
            
            
           
        ],
        ['Package_Name1.required'=> "Fill out this field",
        'Dancing_Type1.required'=> "Fill out this field",
        'Services1.required'=> "Fill out this field",
        'Price1.required'=> "Fill out this field",
        
        
        ]
    );
        
        
        
        
        $data=Dance_package::where('id',$request->id)
            
        ->update([
                'Package_Name'=>$request->Package_Name1,
                'Dancing_Type'=>$request->Dancing_Type1,
                'Services'=>$request->Services1,
                'Price'=>$request->Price1,
                

            ]);
        
            
        

        return redirect('/Profile')->with('flash_message','Package Updated Successfully');
    }

    public function deletePackage(request $request)
    {
        

       
                $deco1 = Dance_package::findOrFail($request->id);
                $deco1->delete();

                return redirect('/Profile')->with('warning_message','Package Removed Successfully');
            
      

    }

    public function uploadVideo(request $request,$id)
    {
            $id1 = Auth::user()->id;
            
        

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
            
            
            
                    $Evideo = new Dance_video;
                    $Evideo->user_id = Auth::user()->id;
                    $Evideo->Video_Name=$request->Video_Name;
                    
                    
                    
                    if($request->hasFile('Video'))
                    {
                        $Video=$request->file('Video');
           
                        $filename=time().'.'.$Video->getClientOriginalExtension();
                        $Video->move(public_path('/video/dancing') , $filename);
                        $Evideo->Video=$filename;
                        $Evideo->save();
                    }

                    return redirect('/Profile')->with('flash_message','Video Uploaded Successfully');
                

                
            
    }

    public function deleteVideo(request $request)
    {
        

        
                $deco1 = Dance_video::findOrFail($request->id);
                $deco1->delete();

                return redirect('/Profile')->with('warning_message','Video Deleted Successfully');
         
    }

    public function Search(request $request)
    {
        $dance=Dancer::all();
        $search=$request->get('search');
        
        foreach($dance as $data)
        {
        
           
            $level=DB::table('users')->join('dancers','dancers.user_id','=','users.id')
            
            ->where(function($query) use ($search){
                    return $query->where('Team_Name','like','%'.$search.'%')
                                 ->orWhere('name','like','%'.$search.'%')
                                 ->orwhere('city','like','%'.$search.'%');
                                
            })
            ->select('users.id','Team_Name','Contact_No','Address','email','Main_pic')
            ->get();

            return view('Dance', compact('level'));
        }
    }


}
