<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\User;
use App\Transporter;
use App\Transport_Category;
use App\Transport_package;
use Auth;
use Image;

class TransportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $trans = DB::table('transporters')
                ->join('users','users.id','=','transporters.user_id')
                ->get();


        return view('Transport', compact('trans'));
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
            ['Transport_Service' => 'required|string|max:255',
            'Address' => 'required|string|max:255',
            'Contact_No' =>'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'Link' =>'required|string|max:255',
            'Description' =>'required|string|max:500',
            
            'driver' => 'required|string|max:20',
            'decoration' => 'required|string|max:20',
            'rent_hours' => 'required|string|max:20',
            'rent_km' => 'required|string|max:20',
            
            'Main_pic'=> 'required|image|dimensions:min_width=300,min_height=100',
            'pic1' => 'required|image|dimensions:min_width=300,min_height=100',
            'pic2' => 'required|image|dimensions:min_width=300,min_height=100',
            'pic3' => 'required|image|dimensions:min_width=300,min_height=100',
            'pic4' => 'required|image|dimensions:min_width=300,min_height=100',
            'luxury' => 'required|string|max:20',
            'classic' => 'required|string|max:20',
            'vintage' => 'required|string|max:20',
            'horse_cart' => 'required|string|max:20',
            'air' => 'required|string|max:20',
            'travelling_coach' => 'required|string|max:20',

        ],
        ['Transport_Service.required'=> "Fill out this field",
        'Address.required'=> "Fill out this field",
        'Contact_No.required'=> "Fill out this field",
        'Link.required'=> "Fill out this field",
        'Description.required'=> "Fill out this field",

        'driver.required'=> "Fill out this field",
        'decoration.required'=> "Fill out this field",
        'rent_hours.required'=> "Fill out this field",
        'rent_km.required'=> "Fill out this field",
       
        'Main_pic.required'=> "Add a image here",
        'pic1.required'=> "Add a image here",
        'pic2.required'=> "Add a image here",
        'pic3.required' => "Add a image here",
        'pic4.required'=> "Add a image here",
        'luxury.required'=> "Fill out this field",
        'classic.required'=> "Fill out this field",
        'vintage.required' => "Fill out this field",
        'horse_cart.required'=> "Fill out this field",
        'air.required'=> "Fill out this field",
        'travelling_coach.required' => "Fill out this field",
        
       

        ]
    );
        $transport = new Transporter;
        $transport->Transport_Service=$request->Transport_Service;
        $transport->Address=$request->Address;
        $transport->Contact_No =$request->Contact_No;
        $transport->Link =$request->Link;
        $transport->Description =$request->Description;
        $transport->driver =$request->driver;
        $transport->decoration =$request->decoration;
        $transport->rent_hours=$request->rent_hours;
        $transport->rent_km=$request->rent_km;
        $transport->user_id = Auth::user()->id;
        
        if($request->hasFile('Main_pic'))
          {
             $Main_pic=$request->file('Main_pic');
           
             $filename=time().'.'.$Main_pic->getClientOriginalExtension();
             Image::make($Main_pic)->resize(960,640)->save(public_path('/uploads/transport/'. $filename));

             
             $transport->Main_pic=$filename;
             
         }

         if($request->hasFile('pic1'))
          {
             $pic1=$request->file('pic1');
           
             $filename=time().'.'.$pic1->getClientOriginalExtension();
             Image::make($pic1)->resize(960,640)->save(public_path('/uploads/transport/'. $filename));

             
             $transport->pic1=$filename;
             
         }

         if($request->hasFile('pic2'))
          {
             $pic2=$request->file('pic2');
           
             $filename=time().'.'.$pic2->getClientOriginalExtension();
             Image::make($pic2)->resize(960,640)->save(public_path('/uploads/transport/'. $filename));

             
             $transport->pic2=$filename;
             
         }

         if($request->hasFile('pic3'))
          {
             $pic3=$request->file('pic3');
           
             $filename=time().'.'.$pic3->getClientOriginalExtension();
             Image::make($pic3)->resize(960,640)->save(public_path('/uploads/transport/'. $filename));

             
             $transport->pic3=$filename;
             
         }

         if($request->hasFile('pic4'))
          {
             $pic4=$request->file('pic4');
           
             $filename=time().'.'.$pic4->getClientOriginalExtension();
             Image::make($pic4)->resize(960,640)->save(public_path('/uploads/transport/'. $filename));

             
             $transport->pic4=$filename;
             
         }
             $transport->save();


            $trans_cat = new Transport_Category;
            $trans_cat->user_id = Auth::user()->id;
            $trans_cat->luxury=$request->luxury;
            $trans_cat->classic =$request->classic;
            $trans_cat->vintage =$request->vintage;
            $trans_cat->horse_cart =$request->horse_cart;
            $trans_cat->air =$request->air;
            $trans_cat->travelling_coach =$request->travelling_coach;
            
            $trans_cat->save();

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
                ->join('transporters','users.id','=','transporters.user_id')
                ->join('transport_categories','users.id','=','transport_categories.user_id')
                ->select('users.id as userid','name','email','transporters.id as transid','Transport_Service','Address', 'Contact_No', 'Link','Description','driver','decoration','rent_hours','Main_pic','pic1','pic2','pic3','pic4','rent_km','transport_categories.id as categoryid','luxury', 'classic', 'vintage','horse_cart','air','travelling_coach')
                ->get();

        $dec= DB::table('users')
            ->where('users.id','=',$id)
            ->join('transport_packages','users.id','=','transport_packages.user_id')
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
                return view('TransportView',compact('data','dec','average','rate','one','two','three','four','five','all','precentage1','precentage2','precentage3','precentage4','precentage5'));
    }

    public function profile()
    {
        $id1 = Auth::id();
        $data = DB::table('transporters')
                ->join('users','users.id','=','transporters.user_id')
                ->join('transport_categories','users.id','=','transport_categories.user_id')
                ->where('users.id','=',$id1)
                ->select('users.id as userid','name','email','transporters.id as transportid','Transport_Service','Address', 'Contact_No', 'Link','Description','driver','decoration','rent_hours','Main_pic','pic1','pic2','pic3','pic4','rent_km','transport_categories.id as categoryid','luxury', 'classic', 'vintage','horse_cart','air','travelling_coach')
                ->get();

        $deto=DB::table('users')
                ->join('transport_packages','users.id','=','transport_packages.user_id')
                ->where('users.id','=',$id1)
                ->select('transport_packages.id','Package_Name', 'Transport_type', 'vehicle','picture','decoration','driver','Price')
                ->get();

                return view('TransportUserProfile',compact('data','deto'));
    }

    public function InfoUpdate(Request $request, $userid, $Transportid)
    {
        //
        $request->validate(
            ['Transport_Service' => 'required|string|max:255',
            'Address' => 'required|string|max:255',
            'Contact_No' =>'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'Link' =>'required|string|max:255',
            'Description' =>'required|string|max:500',
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'rent_hours' =>'required|numeric|min:0',
            'rent_km' => 'required|numeric|min:0',
            
            'driver' => 'required|string|max:20',
            'decoration' => 'required|string|max:20',
            
           
        ],
        ['Transport_Service.required'=> "Fill out this field",
        'Address.required'=> "Fill out this field",
        'Contact_No.required'=> "Fill out this field",
        'Link.required'=> "Fill out this field",
        'Description.required'=> "Fill out this field",
        'name.required'=> "Fill out this field",
        'email.required'=> "Fill out this field",
        'rent_hours.required'=> "Fill out this field",
        'rent_km.required'=> "Fill out this field",
        'driver.required'=> "Fill out this field",
        'decoration.required'=> "Fill out this field",
        
         ]
    );

    
        
        
       

        $data=Transporter::where('id',$Transportid)
            
        ->update([
                'Transport_Service'=>$request->Transport_Service,
                'Address'=>$request->Address,
                'Description'=>$request->Description,
                'Contact_No'=>$request->Contact_No,
                'Link'=>$request->Link,
                'rent_hours'=>$request->rent_hours,
                'rent_km'=>$request->rent_km,
                'driver'=>$request->driver,
                'decoration'=>$request->decoration,

                
        ]);
        

        

        $music1  = User::find($userid); 
        $music1  ->name=$request->name;
        $music1 ->email=$request->email;
        $music1  ->update();

        
        return redirect('/Profile')->with('flash_message','Update Your Details Successfully');
        
    }

    public function featureUpdate(Request $request, $id)
    {
        //
        

        $data=Transport_Category::where('id',$id)
            
        ->update([
                'luxury'=>$request->luxury,
                'classic'=>$request->classic,
                'vintage'=>$request->vintage,
                'horse_cart'=>$request->horse_cart,
                'air'=>$request->air,
                'travelling_coach'=>$request->travelling_coach,
            ]);

        return redirect('/Profile')->with('flash_message','Update Your features Successfully');
    }

    public function removeAccount($id)
    {
        $id1 = Auth::user()->id;

      

            if($id==$id1)
            {
                $trans1 = User::findOrFail($id); 
                $trans1->delete();
                $trans = Transporter::where('user_id',$id)->delete();
                $category = Transport_Category::where('user_id',$id)->delete();
                $category1 = Transport_package::where('user_id',$id)->delete();
                
                
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
                ->join('transporters','users.id','=','transporters.user_id')
                ->where('users.id','=',$id1)
                ->select('transporters.id')
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
                        Image::make($Main_pic)->fit(480,480)->save(public_path('/uploads/transport/'. $filename));

                        $picture=Transporter::where('id',$id)
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
                ->join('transporters','users.id','=','transporters.user_id')
                ->where('users.id','=',$id1)
                ->select('transporters.id')
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
                        Image::make($pic1)->fit(1920,1080)->save(public_path('/uploads/transport/'. $filename));

                        $picture=Transporter::where('id',$id)
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
                ->join('transporters','users.id','=','transporters.user_id')
                ->where('users.id','=',$id1)
                ->select('transporters.id')
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
                        Image::make($pic2)->fit(1920,1080)->save(public_path('/uploads/transport/'. $filename));

                        $picture=Transporter::where('id',$id)
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
                ->join('transporters','users.id','=','transporters.user_id')
                ->where('users.id','=',$id1)
                ->select('transporters.id')
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
                        Image::make($pic3)->fit(1920,1080)->save(public_path('/uploads/transport/'. $filename));

                        $picture=Transporter::where('id',$id)
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
                ->join('transporters','users.id','=','transporters.user_id')
                ->where('users.id','=',$id1)
                ->select('transporters.id')
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
                        Image::make($pic4)->fit(1920,1080)->save(public_path('/uploads/transport/'. $filename));

                        $picture=Transporter::where('id',$id)
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
            'Transport_type' => 'required|string|max:255',
            'vehicle' =>'required|string|max:255',
            'Price' =>'required|numeric|min:0',
            'picture' =>'required|image|dimensions:min_width=300,min_height=100',
            'decoration' =>'required|string|max:20',
            'driver' =>'required|string|max:20',
            
            
           
        ],
        ['Package_Name.required'=> "Fill out this field",
        'Transport_type.required'=> "Fill out this field",
        'vehicle.required'=> "Fill out this field",
        'Price.required'=> "Fill out this field",
        'picture.required'=> "Fill out this field",
        'decoration.required'=> "Fill out this field",
        'driver.required'=> "Fill out this field",
        
        ]
    );
        
        $transport_package = new Transport_package;
        $transport_package->user_id = Auth::user()->id;
        $transport_package->Package_Name=$request->Package_Name;
        $transport_package->Transport_type=$request->Transport_type;
        $transport_package->vehicle =$request->vehicle;
        $transport_package->decoration=$request->decoration;
        $transport_package->driver =$request->driver;
        $transport_package->Price =$request->Price;

        if($request->hasFile('picture'))
          {
             $picture=$request->file('picture');
           
             $filename=time().'.'.$picture->getClientOriginalExtension();
             Image::make($picture)->resize(960,640)->save(public_path('/uploads/transport/'. $filename));

             
             $transport_package->picture=$filename;
             
         }
        
         $transport_package->save();

         return redirect('/Profile')->with('flash_message','Add New Package Successfully');
    }

    public function EditPackage(request $request)
    {
        $request->validate(
            ['Package_Name1' => 'required|string|max:255',
            'Transport_type1' => 'required|string|max:255',
            'vehicle1' =>'required|string|max:255',
            'Price1' =>'required|numeric|min:0',
            
            'decoration1' =>'required|string|max:20',
            'driver1' =>'required|string|max:20',
            
            
           
        ],
        ['Package_Name1.required'=> "Fill out this field",
        'Transport_type1.required'=> "Fill out this field",
        'vehicle1.required'=> "Fill out this field",
        'Price1.required'=> "Fill out this field",
        
        'decoration1.required'=> "Fill out this field",
        'driver1.required'=> "Fill out this field",
        
        ]
    );
        
        
        
        
        $data=Transport_package::where('id',$request->id)
            
        ->update([
                'Package_Name'=>$request->Package_Name1,
                'Transport_type'=>$request->Transport_type1,
                'vehicle'=>$request->vehicle1,
                'Price'=>$request->Price1,
                'decoration'=>$request->decoration1,
                'vehicle'=>$request->vehicle1,
                'driver'=>$request->driver1,
                

            ]);

           
        
            
        

        return redirect('/Profile')->with('flash_message','Package Updated Successfully');
    }

    public function deletePackage(request $request)
    {
       

        
                $deco1 = Transport_package::findOrFail($request->id);
                $deco1->delete();

                return redirect('/Profile')->with('warning_message','Package Removed Successfully');
       

    }

    
}
