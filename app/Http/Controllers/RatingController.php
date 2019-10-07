<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rating;
use Image;

class RatingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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

    public function addrating(request $request,$id)
    {
        $request->validate(
            ['Email' => 'required|string|max:255|email',
            'selected_rating' => 'required|numeric|max:255|min:0|max:5',
            'image' => 'image',
            'Comment' => 'required|string|max:500',
            'user_name' => 'required|string|max:255',
            
            
            
           
        ],
        ['Email.required'=> "Fill out this field",
        'selected_rating.required'=> "Fill out this field",
        
        'Comment.required'=> "Fill out this field",
        'user_name.required'=> "Fill out this field",
        
        ]
        );

        $rating = new Rating;
        $rating->user_id = $id;
        $rating->Email = $request->Email;
        $rating->rating=$request->selected_rating;
        $rating->Comment=$request->Comment;
        $rating->user_name=$request->user_name;
        
        

        if($request->hasFile('image'))
          {
             $image=$request->file('image');
           
             $filename=time().'.'.$image->getClientOriginalExtension();
             Image::make($image)->resize(960,640)->save(public_path('/uploads/avatar/'. $filename));

             
             $rating->image=$filename;
             
         }
        
         $rating->save();
    
         return redirect()->back();

    }
}
