<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Costume_designer;
use App\Costume_designer_event;
use App\Costume_package;
use DB;
use Auth;
use Image;
use App\Award;

class CostumeDesignerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $level = DB::table('costume_designers')
                ->join('users','users.id','=','costume_designers.user_id')
                ->get();
      
       
       return view('CostumeDesigner', compact('level'));

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
            ['Name' => 'required|string|max:255',
            'Address' => 'required|string|max:255',
            'Contact_No' =>'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'Link' =>'required|string|max:255',
            'Description' =>'required|string|max:500',
            'wedding_dress_designs' => 'required|string|max:20',
            'clothing_orders' => 'required|string|max:20',
            'sport_kit_designs' => 'required|string|max:20',
            'saree_work' => 'required|string|max:20',
            'traditional_dress' => 'required|string|max:20',
            'gents_wear' => 'required|string|max:20',
            'ladies_wear' => 'required|string|max:20',
            'gents_foot_wear' => 'required|string|max:20',
            'ladies_foot_wear' => 'required|string|max:20',
            'sports_shoes' => 'required|string|max:20',
            'Main_pic'=> 'required|image|dimensions:min_width=300,min_height=100',
            'pic1' => 'required|image|dimensions:min_width=300,min_height=100',
            'pic2' => 'required|image|dimensions:min_width=300,min_height=100',
            'pic3' => 'required|image|dimensions:min_width=300,min_height=100',
            'pic4' => 'required|image|dimensions:min_width=300,min_height=100',
            'Wedding' => 'required|string|max:20',
            'Party' => 'required|string|max:20',
            'fashion_show' => 'required|string|max:20',
            'sports'=> 'required|string|max:20',
            'Coperate_event'=> 'required|string|max:20',

        ],
        ['Name.required'=> "Fill out this field",
        'Address.required'=> "Fill out this field",
        'Contact_No.required'=> "Fill out this field",
        'Link.required'=> "Fill out this field",
        'Description.required'=> "Fill out this field",
        'wedding_dress_designs.required'=> "Fill out this field",
        'clothing_orders.required'=> "Fill out this field",
        'sport_kit_designs.required'=> "Fill out this field",
        'saree_work.required'=> "Fill out this field",
        'traditional_dress.required'=> "Fill out this field",
        'gents_wear.required'=> "Fill out this field",
        'ladies_wear.required'=> "Fill out this field",
        'gents_foot_wear.required'=> "Fill out this field",
        'ladies_foot_wear.required'=> "Fill out this field",
        'sports_shoes.required'=> "Fill out this field",
        'Main_pic.required'=> "Add a image here",
        'pic1.required'=> "Add a image here",
        'pic2.required'=> "Add a image here",
        'pic3.required' => "Add a image here",
        'pic4.required'=> "Add a image here",
        'Party.required'=> "Fill out this field",
        'fashion_show.required'=> "Fill out this field",
        'Wedding.required' => "Fill out this field",
        'sports.required'=> "Fill out this field",
        'Coperate_event.required'=> "Fill out this field"
       

        ]
    );
        $costume = new Costume_designer;
        $costume->Name=$request->Name;
        $costume->Address=$request->Address;
        $costume->Contact_No =$request->Contact_No;
        $costume->Link =$request->Link;
        $costume->Description =$request->Description;
        $costume->wedding_dress_designs =$request->wedding_dress_designs;
        $costume->clothing_orders=$request->clothing_orders	;
        $costume->sport_kit_designs=$request->sport_kit_designs;
        $costume->saree_work=$request->saree_work;
        $costume->traditional_dress =$request->traditional_dress;
        $costume->gents_wear=$request->gents_wear;
        $costume->ladies_wear=$request->ladies_wear;
        $costume->gents_foot_wear=$request->gents_foot_wear;
        $costume->ladies_foot_wear=$request->ladies_foot_wear;
        $costume->sports_shoes=$request->sports_shoes;
        $costume->user_id = Auth::user()->id;
        
        if($request->hasFile('Main_pic'))
          {
             $Main_pic=$request->file('Main_pic');
           
             $filename=time().'.'.$Main_pic->getClientOriginalExtension();
             Image::make($Main_pic)->fit(960,640)->save(public_path('/uploads/costume/'. $filename));

             
             $costume->Main_pic=$filename;
             
         }

         if($request->hasFile('pic1'))
          {
             $pic1=$request->file('pic1');
           
             $filename=time().'.'.$pic1->getClientOriginalExtension();
             Image::make($pic1)->fit(960,640)->save(public_path('/uploads/costume/'. $filename));

             
             $costume->pic1=$filename;
             
         }

         if($request->hasFile('pic2'))
          {
             $pic2=$request->file('pic2');
           
             $filename=time().'.'.$pic2->getClientOriginalExtension();
             Image::make($pic2)->fit(960,640)->save(public_path('/uploads/costume/'. $filename));

             
             $costume->pic2=$filename;
             
         }

         if($request->hasFile('pic3'))
          {
             $pic3=$request->file('pic3');
           
             $filename=time().'.'.$pic3->getClientOriginalExtension();
             Image::make($pic3)->fit(960,640)->save(public_path('/uploads/costume/'. $filename));

             
             $costume->pic3=$filename;
             
         }

         if($request->hasFile('pic4'))
          {
             $pic4=$request->file('pic4');
           
             $filename=time().'.'.$pic4->getClientOriginalExtension();
             Image::make($pic4)->fit(960,640)->save(public_path('/uploads/costume/'. $filename));

             
             $costume->pic4=$filename;
             
         }
                $costume->save();


            $costume_event = new Costume_designer_event;
            $costume_event->user_id = Auth::user()->id;
            $costume_event->Wedding=$request->Wedding;
            $costume_event->Party =$request->Party;
            $costume_event->fashion_show =$request->fashion_show;
            $costume_event->sports =$request->sports;
            $costume_event->Coperate_event =$request->Coperate_event;
            
            $costume_event->save();

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
                ->join('costume_designers','users.id','=','costume_designers.user_id')
                ->join('costume_designer_events','users.id','=','costume_designer_events.user_id')
                ->where('category','=','Cloth_Designers')
                ->select('users.id as userid','users.name','email','costume_designers.id as costumeid','costume_designers.Name','Address','Contact_No','Link','Description','wedding_dress_designs','clothing_orders','sport_kit_designs','saree_work','traditional_dress','gents_wear','ladies_wear','gents_foot_wear','ladies_foot_wear','sports_shoes','Main_pic','pic1','pic2','pic3','pic4','costume_designer_events.id as eventid','Wedding','Party','fashion_show','sports','Coperate_event')
                ->get();

        $deto=DB::table('users')
                ->join('costume_packages','users.id','=','costume_packages.user_id')
                ->where('users.id','=',$id)
                ->select('costume_packages.id','Package_Name', 'Event_Type', 'Services','Price','Pdf')
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

        return view('CostumeDesignerView',compact('award','data','deto','average','rate','all','one','two','three','four','five','precentage1','precentage2','precentage3','precentage4','precentage5'));
    }

    public function wedding()
    {
        //
        $level = DB::table('costume_designers')
                ->join('users','users.id','=','costume_designers.user_id')
                ->join('costume_designer_events','users.id','=','costume_designer_events.user_id')
                ->where('Wedding','=','Available')
                ->where('wedding_dress_designs','=','Available')
                ->get();
      
       
       return view('CostumeDesigner', compact('level'));
    }

    public function party()
    {
        //
        $level = DB::table('costume_designers')
                ->join('users','users.id','=','costume_designers.user_id')
                ->join('costume_designer_events','users.id','=','costume_designer_events.user_id')
                ->where('Party','=','Available')
                
                ->get();
      
       
       return view('CostumeDesigner', compact('level'));
    }

    public function sportkit()
    {
        //
        $level = DB::table('costume_designers')
                ->join('users','users.id','=','costume_designers.user_id')
                ->join('costume_designer_events','users.id','=','costume_designer_events.user_id')
                ->where('sports','=','Available')
                ->where('sport_kit_designs','=','Available')
                ->get();
      
       
       return view('CostumeDesigner', compact('level'));
    }

    public function sportshoes()
    {
        //
        $level = DB::table('costume_designers')
                ->join('users','users.id','=','costume_designers.user_id')
                ->join('costume_designer_events','users.id','=','costume_designer_events.user_id')
                ->where('sports','=','Available')
                ->where('sports_shoes','=','Available')
                ->get();
      
       
       return view('CostumeDesigner', compact('level'));
    }

    public function coperate()
    {
        //
        $level = DB::table('costume_designers')
                ->join('users','users.id','=','costume_designers.user_id')
                ->join('costume_designer_events','users.id','=','costume_designer_events.user_id')
                ->where('Coperate_event','=','Available')
                ->get();
      
       
       return view('CostumeDesigner', compact('level'));
    }

    public function profile()
    {
        $id1 = Auth::id();
        $data = DB::table('costume_designers')
            ->join('users','users.id','=','costume_designers.user_id')
            ->join('costume_designer_events','users.id','=','costume_designer_events.user_id')
            ->where('category','=','Cloth_Designers')
            ->where('users.id','=',$id1)
            ->select('users.id as userid','email','users.name as Uname','costume_designers.id as designerid','costume_designers.Name as Cname','Address','Contact_No','Link','Description','wedding_dress_designs','clothing_orders','sport_kit_designs','saree_work','traditional_dress','gents_wear','ladies_wear','gents_foot_wear','ladies_foot_wear','sports_shoes','Main_pic','pic1','pic2','pic3','pic4','costume_designer_events.id as eventid','Wedding','Party','fashion_show','sports','Coperate_event')
            ->get();

        $deto=DB::table('users')
            ->join('costume_packages','users.id','=','costume_packages.user_id')
            ->where('users.id','=',$id1)
            ->select('costume_packages.id','Package_Name', 'Event_Type', 'Services','Price','Pdf')
            ->get();

        return view('CostumeDesignerUserProfile',compact('data','deto'));
    }

    public function InfoUpdate(Request $request, $userid, $costumeid)
    {
        //
        $request->validate(
            ['Name' => 'required|string|max:255',
            'Address' => 'required|string|max:255',
            'Contact_No' =>'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'Link' =>'required|string|max:255',
            'Description' =>'required|string|max:500',
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            
            
           
        ],
        ['Name.required'=> "Fill out this field",
        'Address.required'=> "Fill out this field",
        'Contact_No.required'=> "Fill out this field",
        'Link.required'=> "Fill out this field",
        'Description.required'=> "Fill out this field",
        'name.required'=> "Fill out this field",
        'email.required'=> "Fill out this field",
        
         ]
    );
        
        
    $data=Costume_designer::where('id',$costumeid)
            
    ->update([
            'Name'=>$request->Name,
            'Address'=>$request->Address,
            'Description'=>$request->Description,
            'Contact_No'=>$request->Contact_No,
            'Link'=>$request->Link,
            
    ]);

        $costume1 = User::find($userid); 
        $costume1 ->name=$request->name;
        $costume1 ->email=$request->email;
        $costume1 ->update();

        
      return redirect('/Profile');
        
    }

    public function eventUpdate(Request $request, $id)
    {
        

        $data=Costume_designer_event::where('id',$id)
            
        ->update([
                'Wedding'=>$request->Wedding,
                'Party'=>$request->Party,
                'fashion_show'=>$request->fashion_show,
                'sports'=>$request->sports,
                'Coperate_event'=>$request->Coperate_event,
                
            ]);

        return redirect('/Profile');
    }

    public function featureUpdate(Request $request, $id)
    {
        //
        

        $data=Costume_designer::where('id',$id)
            
        ->update([
                'wedding_dress_designs'=>$request->wedding_dress_designs,
                'clothing_orders'=>$request->clothing_orders,
                'sport_kit_designs'=>$request->sport_kit_designs,
                'saree_work'=>$request->saree_work,
                'traditional_dress'=>$request->traditional_dress,
                'gents_wear'=>$request->gents_wear,
                'ladies_wear'=>$request->ladies_wear,
                'gents_foot_wear'=>$request->gents_foot_wear,
                'ladies_foot_wear'=>$request->ladies_foot_wear,
                'sports_shoes'=>$request->sports_shoes,
            ]);

        return redirect('/Profile');
    }
    
    public function removeAccount($id)
    {
        $id1 = Auth::user()->id;

      

            if($id==$id1)
            {
                $costume1 = User::findOrFail($id); 
                $costume1 ->delete();
                $costume2  = Costume_designer::where('user_id',$id)->delete();
                $costume3  = Costume_designer_event::where('user_id',$id)->delete();
                $costume4  = Costume_package::where('user_id',$id)->delete();
                
                
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
                ->join('costume_designers','users.id','=','costume_designers.user_id')
                ->where('users.id','=',$id1)
                ->select('costume_designers.id')
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
                        Image::make($Main_pic)->fit(480,480)->save(public_path('/uploads/costume/'. $filename));

                        $picture=Costume_designer::where('id',$id)
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
                ->join('costume_designers','users.id','=','costume_designers.user_id')
                ->where('users.id','=',$id1)
                ->select('costume_designers.id')
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
                        Image::make($pic1)->fit(1920,1080)->save(public_path('/uploads/costume/'. $filename));

                        $picture=Costume_designer::where('id',$id)
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
                ->join('costume_designers','users.id','=','costume_designers.user_id')
                ->where('users.id','=',$id1)
                ->select('costume_designers.id')
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
                        Image::make($pic2)->fit(1920,1080)->save(public_path('/uploads/costume/'. $filename));

                        $picture=Costume_designer::where('id',$id)
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
                ->join('costume_designers','users.id','=','costume_designers.user_id')
                ->where('users.id','=',$id1)
                ->select('costume_designers.id')
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
                        Image::make($pic3)->fit(1920,1080)->save(public_path('/uploads/costume/'. $filename));

                        $picture=Costume_designer::where('id',$id)
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
                ->join('costume_designers','users.id','=','costume_designers.user_id')
                ->where('users.id','=',$id1)
                ->select('costume_designers.id')
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
                        Image::make($pic4)->fit(1920,1080)->save(public_path('/uploads/costume/'. $filename));

                        $picture=Costume_designer::where('id',$id)
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
            'Event_Type' =>  'required|string|max:255',
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
        
        $costume_package = new Costume_package;
        $costume_package->user_id = Auth::user()->id;
        $costume_package->Package_Name=$request->Package_Name;
        $costume_package->Event_Type =$request->Event_Type;
        $costume_package->Services =$request->Services;
        $costume_package->Price =$request->Price;

        if($request->hasFile('Pdf'))
          {
             $Pdf=$request->file('Pdf');
           
             $filename=time().'.'.$Pdf->getClientOriginalExtension();
             $Pdf->move(public_path('/files/costume') , $filename);
             $costume_package->Pdf=$filename;
             
         }
        
         $costume_package->save();

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
        
        
        
        
        $data=Costume_package::where('id',$request->id)
            
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
        

        
            
                $deco1 = Costume_package::findOrFail($request->id);
                $deco1->delete();

                return redirect('/Profile')->with('warning_message','Package Removed Successfully');
         

    }

    public function Search(request $request)
    {
        $costume=Costume_designer::all();
        $search=$request->get('search');
        
        foreach($costume as $data)
        {
        
           
            $level=DB::table('users')->join('costume_designers','costume_designers.user_id','=','users.id')
            
            ->where(function($query) use ($search){
                    return $query->where('costume_designers.Name','like','%'.$search.'%')
                                 ->orWhere('users.name','like','%'.$search.'%')
                                 ->orwhere('city','like','%'.$search.'%');
                                
            })
            ->select('users.id','costume_designers.Name','Contact_No','Address','email','Main_pic')
            ->get();

            return view('CostumeDesigner', compact('level'));
        }
    }
    
}


