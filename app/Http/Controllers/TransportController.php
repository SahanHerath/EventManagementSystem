<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Transporter;
use App\Transport_Category;
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
                ->get();

                return view('TransportView',compact('data'));
    }

    public function profile()
    {
        
    }
}
