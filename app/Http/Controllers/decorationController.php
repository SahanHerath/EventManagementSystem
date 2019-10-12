<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Decorator;
use App\Decorator_event;
use App\Decoration_package;
use Auth;
use Image;
use DB;
use PDF;
use App\Award;

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
                ->join('decorators','users.id','=','decorators.user_id')
                ->join('decorator_events','users.id','=','decorator_events.user_id')
                ->select('users.id as userid','name','email','decorators.id as decoid','Team_Name', 'Address', 'Description','Contact_No','Link','Poruwa','Flower','Table_Hall','Setty_Backs','Lighting','Traditional','Wedding_Car','Main_Pic','pic1','pic2','pic3','pic4','decorator_events.id as eventid','Wedding', 'Birthday', 'Get_Together','Parties','Outside_events')
                ->get();

        $deto=DB::table('users')
                ->join('decoration_packages','users.id','=','decoration_packages.user_id')
                ->where('users.id','=',$id)
                ->select('decoration_packages.id','Package_Name', 'Decoration_Type', 'Services','Price','Pdf')
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

                return view('DecoratorView',compact('data','deto','rate','average','one','two','three','four','five','all','precentage1','precentage2','precentage3','precentage4','precentage5'));
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

        $deto=DB::table('users')
            ->join('decoration_packages','users.id','=','decoration_packages.user_id')
            ->where('users.id','=',$id1)
            ->select('decoration_packages.id','Package_Name', 'Decoration_Type', 'Services','Price','Pdf')
            ->get();

        
        
        

        return view('DecoratorUserProfile', compact('decos','deto'));
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

        return redirect('/Profile')->with('flash_message','Events Updated Successfully');
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

        return redirect('/Profile')->with('flash_message','Features Updated Successfully');
    }
    
    public function InfoUpdate(Request $request, $userid, $decoid)
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
            
           
        ],
        ['Team_Name.required'=> "Fill out this field",
        'Address.required'=> "Fill out this field",
        'Contact_No.required'=> "Fill out this field",
        'Link.required'=> "Fill out this field",
        'Description.required'=> "Fill out this field",
        'name.required'=> "Fill out this field",
        'email.required'=> "Fill out this field",
        
         ]
    );
        
        
        $deco = Decorator::find($decoid); 
        $deco ->Team_Name=$request->Team_Name;
        $deco ->Address=$request->Address;
        $deco ->Description =$request->Description;
        $deco ->Contact_No =$request->Contact_No;
        $deco ->Link =$request->Link;
        $deco ->update();

        $deco1 = User::find($userid); 
        $deco1 ->name=$request->name;
        $deco1 ->email=$request->email;
        $deco1 ->update();

        
        return redirect('/Profile')->with('flash_message','Profile Details Updated Successfully');
        
    }

    public function removeAccount($id)
    {
        $id1 = Auth::user()->id;

      

            if($id==$id1)
            {
                $deco1 = User::findOrFail($id); 
                $deco1->delete();
                $deco2 = Decorator::where('user_id',$id)->delete();
                $deco3 = Decorator_event::where('user_id',$id)->delete();
                $deco4 = Decoration_package::where('user_id',$id)->delete();
                
                
                return redirect('/');
            }
            else 
            {
                return redirect('/home'); 
            }
        
    }

    public function AddNewPackage(request $request,$id)
    {
        $request->validate(
            ['Package_Name' => 'required|string|max:255',
            'Decoration_Type' => 'required|string|max:255',
            'Services' =>'required|string|max:500',
            'Price' =>'required|numeric|min:0',
            'Pdf' =>'required|mimes:pdf',
            
            
           
        ],
        ['Package_Name.required'=> "Fill out this field",
        'Decoration_Type.required'=> "Fill out this field",
        'Services.required'=> "Fill out this field",
        'Price.required'=> "Fill out this field",
        'Pdf.required'=> "Fill out this field",
        
        ]
    );
        
        $decorate_package = new Decoration_package;
        $decorate_package->user_id = Auth::user()->id;
        $decorate_package->Package_Name=$request->Package_Name;
        $decorate_package->Decoration_Type =$request->Decoration_Type;
        $decorate_package->Services =$request->Services;
        $decorate_package->Price =$request->Price;

        if($request->hasFile('Pdf'))
          {
             $Pdf=$request->file('Pdf');
           
             $filename=time().'.'.$Pdf->getClientOriginalExtension();
             $Pdf->move(public_path('/files/decoration') , $filename);
             $decorate_package->Pdf=$filename;
             
         }
        
         $decorate_package->save();

         return redirect('/Profile')->with('flash_message','Add New Package Successfully');
    }

    public function EditPackage(request $request)
    {
        $request->validate(
            ['Package_Name1' => 'required|string|max:255',
            'Decoration_Type1' => 'required|string|max:255',
            'Services1' =>'required|string|max:500',
            'Price1' =>'required|numeric|min:0',
           
            
            
           
        ],
        ['Package_Name1.required'=> "Fill out this field",
        'Decoration_Type1.required'=> "Fill out this field",
        'Services1.required'=> "Fill out this field",
        'Price1.required'=> "Fill out this field",
        
        
        ]
    );
        
        
        
        
        $data=Decoration_package::where('id',$request->id)
            
        ->update([
                'Package_Name'=>$request->Package_Name1,
                'Decoration_Type'=>$request->Decoration_Type1,
                'Services'=>$request->Services1,
                'Price'=>$request->Price1,
                

            ]);
        
            
        

        return redirect('/Profile')->with('flash_message','Package Updated Successfully');
    }

    public function deletePackage(request $request)
    {
        

                $deco1 = Decoration_package::findOrFail($request->id);
                $deco1->delete();

                return redirect('/Profile')->with('warning_message','Package Removed Successfully');
    }

    public function changeMainPic(request $request,$id)
    {
            $id1 = Auth::user()->id;
            
            $data=DB::table('users')
                ->join('decorators','users.id','=','decorators.user_id')
                ->where('users.id','=',$id1)
                ->select('decorators.id')
                ->get();

                $request->validate(
                [
                    'Main_Pic'=> 'required|image|dimensions:min_width=300,min_height=100',
                ],
                [
                    'Main_Pic.required'=> "Add a image here",
                ]
            );
            
            
            foreach($data as $data1)
            {
                if($data1->id==$id)
                {
                    if($request->hasFile('Main_Pic'))
                    {
                        $Main_Pic=$request->file('Main_Pic');
                        $filename=time().'.'.$Main_Pic->getClientOriginalExtension();
                        Image::make($Main_Pic)->fit(480,480)->save(public_path('/uploads/decoration/'. $filename));

                        $picture=Decorator::where('id',$id)
                        ->update([
                                'Main_Pic'=>$filename


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
                ->join('decorators','users.id','=','decorators.user_id')
                ->where('users.id','=',$id1)
                ->select('decorators.id')
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
                        Image::make($pic1)->fit(1920,1080)->save(public_path('/uploads/decoration/'. $filename));

                        $picture=Decorator::where('id',$id)
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
                ->join('decorators','users.id','=','decorators.user_id')
                ->where('users.id','=',$id1)
                ->select('decorators.id')
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
                        Image::make($pic2)->fit(1920,1080)->save(public_path('/uploads/decoration/'. $filename));

                        $picture=Decorator::where('id',$id)
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
                ->join('decorators','users.id','=','decorators.user_id')
                ->where('users.id','=',$id1)
                ->select('decorators.id')
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
                        Image::make($pic3)->fit(1920,1080)->save(public_path('/uploads/decoration/'. $filename));

                        $picture=Decorator::where('id',$id)
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
                ->join('decorators','users.id','=','decorators.user_id')
                ->where('users.id','=',$id1)
                ->select('decorators.id')
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
                        Image::make($pic4)->fit(1920,1080)->save(public_path('/uploads/decoration/'. $filename));

                        $picture=Decorator::where('id',$id)
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
