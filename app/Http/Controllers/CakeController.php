<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Cake_designer;
use Auth;
use Image;
use DB;


class CakeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $cake = DB::table('cake_designers')
                ->join('users','users.id','=','cake_designers.user_id')
                ->get();


        return view('Cake', compact('cake'));
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
            ['Organization_Name' => 'required|string|max:255',
            'Address' => 'required|string|max:255',
            'Contact_No' =>'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'Link' =>'required|string|max:255',
            'Description' =>'required|string|max:500',
           
            'Main_pic'=> 'required|image|dimensions:min_width=300,min_height=100',
            'pic1' => 'required|image|dimensions:min_width=300,min_height=100',
            'pic2' => 'required|image|dimensions:min_width=300,min_height=100',
            'pic3' => 'required|image|dimensions:min_width=300,min_height=100',
            'pic4' => 'required|image|dimensions:min_width=300,min_height=100',
            'Wedding_cake' => 'required|string|max:20',
            'Birthday_cake' => 'required|string|max:20',
            'Cake_Structure' => 'required|string|max:20',
            'Pastry_cake'=> 'required|string|max:20',
            'Cup_Cake'=> 'required|string|max:20',
            'Other'=> 'required|string|max:20',

        ],
        ['Organization_Name.required'=> "Fill out this field",
        'Address.required'=> "Fill out this field",
        'Contact_No.required'=> "Fill out this field",
        'Link.required'=> "Fill out this field",
        'Description.required'=> "Fill out this field",
        
        'Main_pic.required'=> "Add a image here",
        'pic1.required'=> "Add a image here",
        'pic2.required'=> "Add a image here",
        'pic3.required' => "Add a image here",
        'pic4.required'=> "Add a image here",
        'Wedding_cake.required'=> "Fill out this field",
        'Birthday_cake.required'=> "Fill out this field",
        'Cake_Structure.required' => "Fill out this field",
        'Pastry_cake.required'=> "Fill out this field",
        'Cup_Cake.required'=> "Fill out this field",
        'Other.required'=> "Fill out this field"
       

        ]
    );
        $cake = new Cake_designer;
        $cake->Organization_Name=$request->Organization_Name;
        $cake->Address=$request->Address;
        $cake->Contact_No =$request->Contact_No;
        $cake->Link =$request->Link;
        $cake->Description =$request->Description;
        $cake->Wedding_cake =$request->Wedding_cake;
        $cake->Birthday_cake =$request->Birthday_cake;
        $cake->Cake_Structure=$request->Cake_Structure;
        $cake->Pastry_cake=$request->Pastry_cake;
        $cake->Cup_Cake =$request->Cup_Cake;
        $cake->Other=$request->Other;
        
        $cake->user_id = Auth::user()->id;
        
        if($request->hasFile('Main_pic'))
          {
             $Main_pic=$request->file('Main_pic');
           
             $filename=time().'.'.$Main_pic->getClientOriginalExtension();
             Image::make($Main_pic)->fit(960,640)->save(public_path('/uploads/cake/'. $filename));

             
             $cake->Main_pic=$filename;
             
         }

         if($request->hasFile('pic1'))
          {
             $pic1=$request->file('pic1');
           
             $filename=time().'.'.$pic1->getClientOriginalExtension();
             Image::make($pic1)->fit(960,640)->save(public_path('/uploads/cake/'. $filename));

             
             $cake->pic1=$filename;
             
         }

         if($request->hasFile('pic2'))
          {
             $pic2=$request->file('pic2');
           
             $filename=time().'.'.$pic2->getClientOriginalExtension();
             Image::make($pic2)->fit(960,640)->save(public_path('/uploads/cake/'. $filename));

             
             $cake->pic2=$filename;
             
         }

         if($request->hasFile('pic3'))
          {
             $pic3=$request->file('pic3');
           
             $filename=time().'.'.$pic3->getClientOriginalExtension();
             Image::make($pic3)->fit(960,640)->save(public_path('/uploads/cake/'. $filename));

             
             $cake->pic3=$filename;
             
         }

         if($request->hasFile('pic4'))
          {
             $pic4=$request->file('pic4');
           
             $filename=time().'.'.$pic4->getClientOriginalExtension();
             Image::make($pic4)->fit(960,640)->save(public_path('/uploads/cake/'. $filename));

             
             $cake->pic4=$filename;
             
         }
                $cake->save();

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
                ->join('cake_designers','users.id','=','cake_designers.user_id')
                
                ->where('category','=','Cake_Designers')
                ->get();

                return view('Cakeview',compact('data'));
    }

    public function wedding()
    {
        //
        $cake = DB::table('cake_designers')
                ->join('users','users.id','=','cake_designers.user_id')
                ->where('Wedding_cake','=','Available')
                ->get();


        return view('Cake', compact('cake'));
    }

    public function birthday()
    {
        //
        $cake = DB::table('cake_designers')
                ->join('users','users.id','=','cake_designers.user_id')
                ->where('Birthday_cake','=','Available')
                ->get();


        return view('Cake', compact('cake'));
    }

    public function profile()
    {
        $id1 = Auth::id();
        $data = DB::table('cake_designers')
                ->join('users','users.id','=','cake_designers.user_id')
                ->where('users.id','=',$id1)
                ->where('category','=','Cake_Designers')
                ->select('users.id as userid','name','email', 'cake_designers.id as cakeid','Organization_Name', 'Address', 'Contact_No','Link','Description','Wedding_cake','Birthday_cake','Cake_Structure','Pastry_cake','Cup_Cake','Other','Main_pic','pic1','pic2','pic3','pic4')
                ->get();

                return view('CakeUserProfile',compact('data'));
    }

    public function featureUpdate(Request $request, $id)
    {
        //
        

        $data=Cake_designer::where('id',$id)
            
        ->update([
                'Wedding_cake'=>$request->Wedding_cake,
                'Birthday_cake'=>$request->Birthday_cake,
                'Cake_Structure'=>$request->Cake_Structure,
                'Pastry_cake'=>$request->Pastry_cake,
                'Cup_Cake'=>$request->Cup_Cake,
                'Other'=>$request->Other,
                
            ]);

        return redirect('/Profile');
    }

    public function InfoUpdate(Request $request, $userid, $cakeid)
    {
        //
        $request->validate(
            ['Organization_Name' => 'required|string|max:255',
            'Address' => 'required|string|max:255',
            'Contact_No' =>'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'Link' =>'required|string|max:255',
            'Description' =>'required|string|max:500',
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            
            
           
        ],
        ['Organization_Name.required'=> "Fill out this field",
        'Address.required'=> "Fill out this field",
        'Contact_No.required'=> "Fill out this field",
        'Link.required'=> "Fill out this field",
        'Description.required'=> "Fill out this field",
        'name.required'=> "Fill out this field",
        'email.required'=> "Fill out this field",
        
        
         ]
    );
        
        
       

        $data=Cake_designer::where('id',$cakeid)
            
        ->update([
                'Organization_Name'=>$request->Organization_Name,
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

    public function removeAccount($id)
    {
        $id1 = Auth::user()->id;

      

            if($id==$id1)
            {
                $cake1 = User::findOrFail($id); 
                $cake1 ->delete();
                $cake2  = Cake_designer::where('user_id',$id)->delete();
                
                
                
                return redirect('/');
            }
            else 
            {
                return redirect('/home'); 
            }
        
    }

}
