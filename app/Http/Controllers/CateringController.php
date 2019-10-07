<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Catering;
use App\Catering_event;
use App\Catering_package;
use DB;
use Image;
use Auth;

class CateringController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $level = DB::table('caterings')
        ->join('users','users.id','=','caterings.user_id')
        ->get();


return view('catering', compact('level'));
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
            ['Service_Name' => 'required|string|max:255',
            'Address' => 'required|string|max:255',
            'Contact_No' =>'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'Link' =>'required|string|max:255',
            'Description' =>'required|string|max:500',
            'Welcome_drink' => 'required|string|max:20',
            'Catering_set' => 'required|string|max:20',
            'Catering_tent' => 'required|string|max:20',
            'Cake' => 'required|string|max:20',
            'Special_Food' => 'required|string|max:20',
            'Garden_umbrella' => 'required|string|max:20',
            'Coffee_Machine' => 'required|string|max:20',
            'Table_chair' => 'required|string|max:20',
            'sink' => 'required|string|max:20',
            'dessert' => 'required|string|max:20',
            'Main_pic'=> 'required|image|dimensions:min_width=300,min_height=100',
            'pic1' => 'required|image|dimensions:min_width=300,min_height=100',
            'pic2' => 'required|image|dimensions:min_width=300,min_height=100',
            'pic3' => 'required|image|dimensions:min_width=300,min_height=100',
            'pic4' => 'required|image|dimensions:min_width=300,min_height=100',
            'Wedding' => 'required|string|max:20',
            'Birthday' => 'required|string|max:20',
            'Party' => 'required|string|max:20',
            'Funeral'=> 'required|string|max:20',
            'Corporate_event'=> 'required|string|max:20',

        ],
        ['Service_Name.required'=> "Fill out this field",
        'Address.required'=> "Fill out this field",
        'Contact_No.required'=> "Fill out this field",
        'Link.required'=> "Fill out this field",
        'Description.required'=> "Fill out this field",
        'Welcome_drink.required'=> "Fill out this field",
        'Catering_set.required'=> "Fill out this field",
        'Catering_tent.required'=> "Fill out this field",
        'Cake.required'=> "Fill out this field",
        'Special_Food.required'=> "Fill out this field",
        'Garden_umbrella.required'=> "Fill out this field",
        'Coffee_Machine.required'=> "Fill out this field",
        'Table_chair.required'=> "Fill out this field",
        'sink.required'=> "Fill out this field",
        'dessert.required'=> "Fill out this field",
        'Main_pic.required'=> "Add a image here",
        'pic1.required'=> "Add a image here",
        'pic2.required'=> "Add a image here",
        'pic3.required' => "Add a image here",
        'pic4.required'=> "Add a image here",
        'Party.required'=> "Fill out this field",
        'Birthday.required'=> "Fill out this field",
        'Wedding.required' => "Fill out this field",
        'Funeral.required'=> "Fill out this field",
        'Corporate_event.required'=> "Fill out this field"
       

        ]
    );
        $catering = new Catering;
        $catering->Service_Name=$request->Service_Name;
        $catering->Address=$request->Address;
        $catering->Contact_No =$request->Contact_No;
        $catering->Link =$request->Link;
        $catering->Description =$request->Description;
        $catering->Welcome_drink =$request->Welcome_drink;
        $catering->Catering_set =$request->Catering_set;
        $catering->Catering_tent=$request->Catering_tent;
        $catering->Cake=$request->Cake;
        $catering->Special_Food =$request->Special_Food;
        $catering->Garden_umbrella=$request->Garden_umbrella;
        $catering->Coffee_Machine=$request->Coffee_Machine;
        $catering->Table_chair=$request->Table_chair;
        $catering->sink =$request->sink;
        $catering->dessert=$request->dessert;
        
        $catering->user_id = Auth::user()->id;
        
        if($request->hasFile('Main_pic'))
          {
             $Main_pic=$request->file('Main_pic');
           
             $filename=time().'.'.$Main_pic->getClientOriginalExtension();
             Image::make($Main_pic)->fit(960,640)->save(public_path('/uploads/catering/'. $filename));

             
             $catering->Main_pic=$filename;
             
         }

         if($request->hasFile('pic1'))
          {
             $pic1=$request->file('pic1');
           
             $filename=time().'.'.$pic1->getClientOriginalExtension();
             Image::make($pic1)->fit(960,640)->save(public_path('/uploads/catering/'. $filename));

             
             $catering->pic1=$filename;
             
         }

         if($request->hasFile('pic2'))
          {
             $pic2=$request->file('pic2');
           
             $filename=time().'.'.$pic2->getClientOriginalExtension();
             Image::make($pic2)->fit(960,640)->save(public_path('/uploads/catering/'. $filename));

             
             $catering->pic2=$filename;
             
         }

         if($request->hasFile('pic3'))
          {
             $pic3=$request->file('pic3');
           
             $filename=time().'.'.$pic3->getClientOriginalExtension();
             Image::make($pic3)->fit(960,640)->save(public_path('/uploads/catering/'. $filename));

             
             $catering->pic3=$filename;
             
         }

         if($request->hasFile('pic4'))
          {
             $pic4=$request->file('pic4');
           
             $filename=time().'.'.$pic4->getClientOriginalExtension();
             Image::make($pic4)->fit(960,640)->save(public_path('/uploads/catering/'. $filename));

             
             $catering->pic4=$filename;
             
         }
            $catering->save();

            $catering_event = new Catering_event;
            $catering_event->user_id = Auth::user()->id;
            $catering_event->Wedding=$request->Wedding;
            $catering_event->Birthday =$request->Birthday;
            $catering_event->Party =$request->Party;
            $catering_event->Corporate_event =$request->Corporate_event;
            $catering_event->Funeral =$request->Funeral;
            
            $catering_event->save();

            
           

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
                ->join('caterings','users.id','=','caterings.user_id')
                ->join('catering_events','users.id','=','catering_events.user_id')
                ->where('category','=','Catering')
                ->select('users.id as userid','name','email','caterings.id as cateringid', 'Service_Name', 'Address', 'Contact_No','Link','Description','Welcome_drink','Special_Food','Catering_set','Catering_tent','Cake','Garden_umbrella','Coffee_Machine','Table_chair','sink','dessert','Main_pic','pic1','pic2','pic3','pic4','catering_events.id as eventid','Wedding', 'Birthday', 'Party','Corporate_event','Funeral')
                ->get();

        $deto=DB::table('users')
                ->join('catering_packages','users.id','=','catering_packages.user_id')
                ->where('users.id','=',$id)
                ->select('catering_packages.id','Package_Name', 'Appetizers', 'Welcome_drinks','Soups','Foods','Desserts','Price','Pdf')
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

        return view('cateringview',compact('data','deto','rate','average','one','two','three','four','five','all','precentage1','precentage2','precentage3','precentage4','precentage5'));
    }

    public function wedding()
    {
        //
        $level = DB::table('caterings')
        ->join('users','users.id','=','caterings.user_id')
        ->join('catering_events','users.id','=','catering_events.user_id')
        ->where('catering_events.Wedding','=','Available')
        ->get();


        return view('catering', compact('level'));
    }

    public function birthday()
    {
        //
        $level = DB::table('caterings')
        ->join('users','users.id','=','caterings.user_id')
        ->join('catering_events','users.id','=','catering_events.user_id')
        ->where('catering_events.Birthday','=','Available')
        ->get();


        return view('catering', compact('level'));
    }

    public function party()
    {
        //
        $level = DB::table('caterings')
        ->join('users','users.id','=','caterings.user_id')
        ->join('catering_events','users.id','=','catering_events.user_id')
        ->where('catering_events.Party','=','Available')
        ->get();


        return view('catering', compact('level'));
    }

    public function coperate()
    {
        //
        $level = DB::table('caterings')
        ->join('users','users.id','=','caterings.user_id')
        ->join('catering_events','users.id','=','catering_events.user_id')
        ->where('catering_events.Corporate_event','=','Available')
        ->get();


        return view('catering', compact('level'));
    }

    public function profile()
    {
        $id1 = Auth::id();
        $data = DB::table('caterings')
            ->join('users','users.id','=','caterings.user_id')
            ->join('catering_events','users.id','=','catering_events.user_id')
            ->where('category','=','Catering')
            ->where('users.id','=',$id1)
            ->select('users.id as userid','email','name', 'caterings.id as cateringid','Service_Name', 'Address', 'Contact_No','Link','Description','Welcome_drink','Special_Food','Catering_set','Catering_tent','Cake','Garden_umbrella','Coffee_Machine','Table_chair','sink','dessert','Main_pic','pic1','pic2','pic3','pic4','catering_events.id as eventid','Wedding', 'Birthday', 'Party','Corporate_event','Funeral')
            ->get();

        $deto=DB::table('users')
            ->join('catering_packages','users.id','=','catering_packages.user_id')
            ->where('users.id','=',$id1)
            ->select('catering_packages.id','Package_Name', 'Appetizers', 'Welcome_drinks','Soups','Foods','Desserts','Price','Pdf')
            ->get();

        return view('CateringUserProfile',compact('data','deto'));
    }

    public function InfoUpdate(Request $request, $userid, $cateringid)
    {
        //
        $request->validate(
            ['Service_Name' => 'required|string|max:255',
            'Address' => 'required|string|max:255',
            'Contact_No' =>'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'Link' =>'required|string|max:255',
            'Description' =>'required|string|max:500',
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            
            
           
        ],
        ['Service_Name.required'=> "Fill out this field",
        'Address.required'=> "Fill out this field",
        'Contact_No.required'=> "Fill out this field",
        'Link.required'=> "Fill out this field",
        'Description.required'=> "Fill out this field",
        'name.required'=> "Fill out this field",
        'email.required'=> "Fill out this field",
        
        
         ]
    );
        
        
       

        $data=Catering::where('id',$cateringid)
            
        ->update([
                'Service_Name'=>$request->Service_Name,
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
        

        $data=Catering_event::where('id',$id)
            
        ->update([
                'Wedding'=>$request->Wedding,
                'Birthday'=>$request->Birthday,
                'Party'=>$request->Party,
                'Corporate_event'=>$request->Corporate_event,
                'Funeral'=>$request->Funeral,
               

                
        ]);

        return redirect('/Profile');
    }

    public function featureUpdate(Request $request, $id)
    {
        //
        

        $data=Catering::where('id',$id)
            
        ->update([
                'Welcome_drink'=>$request->Welcome_drink,
                'Catering_set'=>$request->Catering_set,
                'Catering_tent'=>$request->Catering_tent,
                'Cake'=>$request->Cake,
                'Special_Food'=>$request->Special_Food,
                'Garden_umbrella'=>$request->Garden_umbrella,
                'Coffee_Machine'=>$request->Coffee_Machine,
                'Table_chair'=>$request->Table_chair,
                'sink'=>$request->sink,
                'dessert'=>$request->dessert,
            ]);

        return redirect('/Profile');
    }

    public function removeAccount($id)
    {
        $id1 = Auth::user()->id;

      

            if($id==$id1)
            {
                $catering1 = User::findOrFail($id); 
                $catering1 ->delete();
                $catering2  = Catering::where('user_id',$id)->delete();
                $catering3  = Catering_event::where('user_id',$id)->delete();
                $catering4  = Catering_package::where('user_id',$id)->delete();
                
                
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
                ->join('caterings','users.id','=','caterings.user_id')
                ->where('users.id','=',$id1)
                ->select('caterings.id')
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
                        Image::make($Main_pic)->fit(480,480)->save(public_path('/uploads/catering/'. $filename));

                        $picture=Catering::where('id',$id)
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
                ->join('caterings','users.id','=','caterings.user_id')
                ->where('users.id','=',$id1)
                ->select('caterings.id')
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
                        Image::make($pic1)->fit(1920,1080)->save(public_path('/uploads/catering/'. $filename));

                        $picture=Catering::where('id',$id)
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
                ->join('caterings','users.id','=','caterings.user_id')
                ->where('users.id','=',$id1)
                ->select('caterings.id')
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
                        Image::make($pic2)->fit(1920,1080)->save(public_path('/uploads/catering/'. $filename));

                        $picture=Catering::where('id',$id)
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
                ->join('caterings','users.id','=','caterings.user_id')
                ->where('users.id','=',$id1)
                ->select('caterings.id')
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
                        Image::make($pic3)->fit(1920,1080)->save(public_path('/uploads/catering/'. $filename));

                        $picture=Catering::where('id',$id)
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
                ->join('caterings','users.id','=','caterings.user_id')
                ->where('users.id','=',$id1)
                ->select('caterings.id')
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
                        Image::make($pic4)->fit(1920,1080)->save(public_path('/uploads/catering/'. $filename));

                        $picture=Catering::where('id',$id)
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
        
        $catering_package = new Catering_package;
        $catering_package->user_id = Auth::user()->id;
        $catering_package->Package_Name=$request->Package_Name;
        $catering_package->Appetizers =$request->Appetizers;
        $catering_package->Welcome_drinks =$request->Welcome_drinks;
        $catering_package->Soups =$request->Soups;
        $catering_package->Foods =$request->Foods;
        $catering_package->Desserts =$request->Desserts;
        $catering_package->Price =$request->Price;

        if($request->hasFile('Pdf'))
          {
             $Pdf=$request->file('Pdf');
           
             $filename=time().'.'.$Pdf->getClientOriginalExtension();
             $Pdf->move(public_path('/files/catering') , $filename);
             $catering_package->Pdf=$filename;
             
         }
        
         $catering_package->save();

         return redirect('/Profile')->with('flash_message','Add New Package Successfully');
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
        
        
        
        
        $data=Catering_package::where('id',$request->id)
            
        ->update([
                'Package_Name'=>$request->Package_Name1,
                'Appetizers'=>$request->Appetizers1,
                'Welcome_drinks'=>$request->Welcome_drinks1,
                'Soups'=>$request->Soups1,
                'Foods'=>$request->Foods1,
                'Desserts'=>$request->Desserts1,
                'Price'=>$request->Price1,
               
                

            ]);
        
            
        

        return redirect('/Profile')->with('flash_message','Package Updated Successfully');
    }

    public function deletePackage(request $request)
    {
        

        
                $deco1 = Catering_package::findOrFail($request->id);
                $deco1->delete();

                return redirect('/Profile')->with('warning_message','Package Removed Successfully');
            
            
        

    }

}
