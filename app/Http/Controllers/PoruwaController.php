<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Poruwa_ceramony;
use App\Poruwa_package;
use DB;
use Auth;
use Image;

class PoruwaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $level = DB::table('poruwa_ceramonies')
                ->join('users','users.id','=','poruwa_ceramonies.user_id')
                ->get();
      
       
       return view('PoruwaCeramony', compact('level'));
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
            
            'Poruwa_rituals' => 'required|string|max:20',
            'Poruwa_items' => 'required|string|max:20',
            'match_making' => 'required|string|max:20',
            'Astrological_support' => 'required|string|max:20',
            'jayamangala_gatha' => 'required|string|max:20',
            
            'Wedding_dancers' => 'required|string|max:20',

            'Cost' => 'required|numeric|min:0',
            'Main_pic'=> 'required|image|dimensions:min_width=300,min_height=100',
            'pic1' => 'required|image|dimensions:min_width=300,min_height=100',
            'pic2' => 'required|image|dimensions:min_width=300,min_height=100',
            'pic3' => 'required|image|dimensions:min_width=300,min_height=100',
            'pic4' => 'required|image|dimensions:min_width=300,min_height=100',
            

        ],
        ['Name.required'=> "Fill out this field",
        'Address.required'=> "Fill out this field",
        'Contact_No.required'=> "Fill out this field",
        'Link.required'=> "Fill out this field",
        'Description.required'=> "Fill out this field",

        'Poruwa_rituals.required'=> "Fill out this field",
        'Poruwa_items.required'=> "Fill out this field",
        'match_making.required'=> "Fill out this field",
        'Astrological_support.required'=> "Fill out this field",
        'jayamangala_gatha.required'=> "Fill out this field",
        'Wedding_dancers.required'=> "Fill out this field",

        'Cost.required'=> "Fill out this field",
        'Main_pic.required'=> "Add a image here",
        'pic1.required'=> "Add a image here",
        'pic2.required'=> "Add a image here",
        'pic3.required' => "Add a image here",
        'pic4.required'=> "Add a image here",
        
       

        ]
    );
        $Poruwa = new Poruwa_ceramony;
        $Poruwa->Name=$request->Name;
        $Poruwa->Address=$request->Address;
        $Poruwa->Contact_No =$request->Contact_No;
        $Poruwa->Link =$request->Link;
        $Poruwa->Description =$request->Description;
        $Poruwa->Poruwa_rituals =$request->Poruwa_rituals;
        $Poruwa->Poruwa_items =$request->Poruwa_items;
        $Poruwa->match_making=$request->match_making;
        $Poruwa->Astrological_support=$request->Astrological_support;
        $Poruwa->jayamangala_gatha =$request->jayamangala_gatha;
        $Poruwa->Wedding_dancers=$request->Wedding_dancers;
        $Poruwa->Cost=$request->Cost;
        $Poruwa->user_id = Auth::user()->id;
        
        if($request->hasFile('Main_pic'))
          {
             $Main_pic=$request->file('Main_pic');
           
             $filename=time().'.'.$Main_pic->getClientOriginalExtension();
             Image::make($Main_pic)->resize(960,640)->save(public_path('/uploads/Poruwa/'. $filename));

             
             $Poruwa->Main_pic=$filename;
             
         }

         if($request->hasFile('pic1'))
          {
             $pic1=$request->file('pic1');
           
             $filename=time().'.'.$pic1->getClientOriginalExtension();
             Image::make($pic1)->resize(960,640)->save(public_path('/uploads/Poruwa/'. $filename));

             
             $Poruwa->pic1=$filename;
             
         }

         if($request->hasFile('pic2'))
          {
             $pic2=$request->file('pic2');
           
             $filename=time().'.'.$pic2->getClientOriginalExtension();
             Image::make($pic2)->resize(960,640)->save(public_path('/uploads/Poruwa/'. $filename));

             
             $Poruwa->pic2=$filename;
             
         }

         if($request->hasFile('pic3'))
          {
             $pic3=$request->file('pic3');
           
             $filename=time().'.'.$pic3->getClientOriginalExtension();
             Image::make($pic3)->resize(960,640)->save(public_path('/uploads/Poruwa/'. $filename));

             
             $Poruwa->pic3=$filename;
             
         }

         if($request->hasFile('pic4'))
          {
             $pic4=$request->file('pic4');
           
             $filename=time().'.'.$pic4->getClientOriginalExtension();
             Image::make($pic4)->resize(960,640)->save(public_path('/uploads/Poruwa/'. $filename));

             
             $Poruwa->pic4=$filename;
             
         }
            $Poruwa->save();

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
                ->join('poruwa_ceramonies','users.id','=','poruwa_ceramonies.user_id')
                ->where('category','=','Poruwa_Ceramony')
                ->get();

        $deto=DB::table('users')
                ->join('poruwa_packages','users.id','=','poruwa_packages.user_id')
                ->where('users.id','=',$id)
                ->select('poruwa_packages.id','Package_Name', 'Services','Price','Pdf')
                ->get();

                return view('PoruwaCeramonyView',compact('data','deto'));
    }

    public function profile()
    {
        $id1 = Auth::id();
        $data = DB::table('poruwa_ceramonies')
                ->join('users','users.id','=','poruwa_ceramonies.user_id')
                ->where('category','=','Poruwa_Ceramony')
                ->where('users.id','=',$id1)
                ->select('users.id as userid','users.name as CName','email','poruwa_ceramonies.id as poruwaid','poruwa_ceramonies.Name as PName', 'Address', 'Contact_No','Link','Description','Poruwa_rituals','Poruwa_items','match_making','Astrological_support','jayamangala_gatha','Wedding_dancers','Cost','Main_pic','pic1','pic2','pic3','pic4')
                ->get();

        $deto=DB::table('users')
                ->join('poruwa_packages','users.id','=','poruwa_packages.user_id')
                ->where('users.id','=',$id1)
                ->select('poruwa_packages.id','Package_Name', 'Services','Price','Pdf')
                ->get();

                return view('PoruwaCeramonyUserProfile',compact('data','deto'));
    }

    public function featureUpdate(Request $request, $id)
    {
        //
        $poruwa = Poruwa_ceramony::find($id); 
        $poruwa ->Poruwa_rituals=$request->Poruwa_rituals;
        $poruwa ->Poruwa_items=$request->Poruwa_items;
        $poruwa ->match_making =$request->match_making;
        $poruwa ->Astrological_support =$request->Astrological_support;
        $poruwa ->jayamangala_gatha =$request->jayamangala_gatha;
        $poruwa ->Wedding_dancers =$request->Wedding_dancers;
        
        $poruwa ->update();

        return redirect('/Profile');
    }

    public function InfoUpdate(Request $request, $userid, $poruwaid)
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
            'Cost' => 'required|numeric|min:0',
            
           
        ],
        ['Name.required'=> "Fill out this field",
        'Address.required'=> "Fill out this field",
        'Contact_No.required'=> "Fill out this field",
        'Link.required'=> "Fill out this field",
        'Description.required'=> "Fill out this field",
        'name.required'=> "Fill out this field",
        'email.required'=> "Fill out this field",
        'Cost.required'=> "Fill out this field",
         ]
    );
        
        
        $poruwa = Poruwa_ceramony::find($poruwaid); 
        $poruwa ->Name=$request->Name;
        $poruwa ->Address=$request->Address;
        $poruwa ->Description =$request->Description;
        $poruwa ->Contact_No =$request->Contact_No;
        $poruwa ->Link =$request->Link;
        $poruwa ->Cost =$request->Cost;
        $poruwa ->update();

        $poruwa1 = User::find($userid); 
        $poruwa1 ->name=$request->name;
        $poruwa1 ->email=$request->email;
        $poruwa1 ->update();

        
        return redirect('/Profile');
        
    }

    public function removeAccount($id)
    {
        $id1 = Auth::user()->id;

      

            if($id==$id1)
            {
                $poruwa1 = User::findOrFail($id); 
                $poruwa1->delete();
                $poruwa = Poruwa_ceramony::where('user_id',$id)->delete();
                $poruwa2 = Poruwa_package::where('user_id',$id)->delete();
                
                
                
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
                ->join('poruwa_ceramonies','users.id','=','poruwa_ceramonies.user_id')
                ->where('users.id','=',$id1)
                ->select('poruwa_ceramonies.id')
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
                        Image::make($Main_pic)->fit(480,480)->save(public_path('/uploads/poruwa/'. $filename));

                        $picture=Poruwa_ceramony::where('id',$id)
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
                ->join('poruwa_ceramonies','users.id','=','poruwa_ceramonies.user_id')
                ->where('users.id','=',$id1)
                ->select('poruwa_ceramonies.id')
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
                        Image::make($pic1)->fit(1920,1080)->save(public_path('/uploads/poruwa/'. $filename));

                        $picture=Poruwa_ceramony::where('id',$id)
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
                ->join('poruwa_ceramonies','users.id','=','poruwa_ceramonies.user_id')
                ->where('users.id','=',$id1)
                ->select('poruwa_ceramonies.id')
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
                        Image::make($pic2)->fit(1920,1080)->save(public_path('/uploads/poruwa/'. $filename));

                        $picture=Poruwa_ceramony::where('id',$id)
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
                ->join('poruwa_ceramonies','users.id','=','poruwa_ceramonies.user_id')
                ->where('users.id','=',$id1)
                ->select('poruwa_ceramonies.id')
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
                        Image::make($pic3)->fit(1920,1080)->save(public_path('/uploads/poruwa/'. $filename));

                        $picture=Poruwa_ceramony::where('id',$id)
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
                ->join('poruwa_ceramonies','users.id','=','poruwa_ceramonies.user_id')
                ->where('users.id','=',$id1)
                ->select('poruwa_ceramonies.id')
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
                        Image::make($pic4)->fit(1920,1080)->save(public_path('/uploads/poruwa/'. $filename));

                        $picture=Poruwa_ceramony::where('id',$id)
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
            'Services' =>'required|string|max:500',
            'Price' =>'required|numeric|min:0',
            'Pdf' =>'required|mimes:pdf',
            
            
           
        ],
        ['Package_Name.required'=> "Fill out this field",
        'Services.required'=> "Fill out this field",
        'Price.required'=> "Fill out this field",
        'Pdf.required'=> "Fill out this field",
        
        ]
    );
        
        $poruwa_package = new Poruwa_package;
        $poruwa_package->user_id = Auth::user()->id;
        $poruwa_package->Package_Name=$request->Package_Name;
        $poruwa_package->Services =$request->Services;
        $poruwa_package->Price =$request->Price;

        if($request->hasFile('Pdf'))
          {
             $Pdf=$request->file('Pdf');
           
             $filename=time().'.'.$Pdf->getClientOriginalExtension();
             $Pdf->move(public_path('/files/poruwa') , $filename);
             $poruwa_package->Pdf=$filename;
             
         }
        
         $poruwa_package->save();

         return redirect('/Profile')->with('flash_message','Add New Package Successfully');
    }

    public function EditPackage(request $request,$id)
    {
        $request->validate(
            ['Package_Name1' => 'required|string|max:255',
            'Services1' =>'required|string|max:500',
            'Price1' =>'required|numeric|min:0',
           
            
            
           
        ],
        ['Package_Name1.required'=> "Fill out this field",
        'Services1.required'=> "Fill out this field",
        'Price1.required'=> "Fill out this field",
        
        
        ]
    );
        
        
        
        
        $data=Poruwa_package::where('id',$id)
            
        ->update([
                'Package_Name'=>$request->Package_Name1,
                'Services'=>$request->Services1,
                'Price'=>$request->Price1,
                

            ]);
        
            
        

        return redirect('/Profile')->with('flash_message','Package Updated Successfully');
    }

    public function deletePackage($id)
    {
        $id1 = Auth::user()->id;

        $data=DB::table('users')
            ->join('poruwa_packages','users.id','=','poruwa_packages.user_id')
            ->where('poruwa_packages.id','=',$id)
            ->select('users.id')
            ->get();

        foreach($data as $data1)
        {
            if($id1==$data1->id)
            {
                $deco1 = Poruwa_package::findOrFail($id);
                $deco1->delete();

                return redirect('/Profile')->with('warning_message','Package Removed Successfully');
            }
            else 
            {
                return redirect('/');
            }
            
        }

    }



    
}
