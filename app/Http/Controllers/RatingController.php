<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rating;
use Image;
use DB;
use Gate;

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

    public function allcomments()
    {
        if(Gate::allows('isAdmin'))
        {
        $data=DB::table('ratings')
             ->join('users','users.id','=','ratings.user_id')
             ->select('ratings.id','user_id','ratings.Email', 'Comment','image','rating','blocked','user_name')
             ->get();

            return view('comment.all',compact('data'));
        }
        else 
        {
            return view('403error');
        }
    }

    public function blockComment($id)
    {
        if(Gate::allows('isAdmin'))
        {
        $comment=Rating::where('id',$id)
                    ->update([
                            'blocked'=>1


                    ]);

        return redirect()->back()->with('flash_message','You have blocked comment Successfully');
        }
        else 
        {
            return view('403error');
        }
    }

    public function unblockComment($id)
    {
        if(Gate::allows('isAdmin'))
        {
        $comment=Rating::where('id',$id)
                    ->update([
                            'blocked'=>0


                    ]);

        return redirect()->back()->with('flash_message','You have unblocked comment Successfully');
        }
        else 
        {
            return view('403error');
        }
    }

    public function deleteComment($id)
    {
        if(Gate::allows('isAdmin'))
        {
        $rating=Rating::where('id',$id)->delete();

        return redirect()->back()->with('flash_message','You have deleted  comment Successfully');
        
        }
        else 
        {
            return view('403error');
        }
    }

    public function Hotelcomments()
    {
        if(Gate::allows('isAdmin'))
        {
        $data=DB::table('ratings')
             ->join('users','users.id','=','ratings.user_id')
             ->where('category','=','Hall')
             ->select('ratings.id','user_id','ratings.Email', 'Comment','image','rating','blocked','user_name')
             ->get();

            return view('comment.Hotel',compact('data'));
        }
        else 
        {
            return view('403error');
        }
    }
    public function Photographycomments()
    {
        if(Gate::allows('isAdmin'))
        {
        $data=DB::table('ratings')
             ->join('users','users.id','=','ratings.user_id')
             ->where('category','=','Photography')
             ->select('ratings.id','user_id','ratings.Email', 'Comment','image','rating','blocked','user_name')
             ->get();

            return view('comment.Photography',compact('data'));
        }
        else 
        {
            return view('403error');
        }
    }
    public function Saloncomments()
    {
        if(Gate::allows('isAdmin'))
        {
        $data=DB::table('ratings')
             ->join('users','users.id','=','ratings.user_id')
             ->where('category','=','Bridel_Designers')
             ->select('ratings.id','user_id','ratings.Email', 'Comment','image','rating','blocked','user_name')
             ->get();

            return view('comment.Salon',compact('data'));
        }
        else 
        {
            return view('403error');
        }
    }
    public function DJcomments()
    {
        if(Gate::allows('isAdmin'))
        {
        $data=DB::table('ratings')
             ->join('users','users.id','=','ratings.user_id')
             ->where('category','=','Music')
             ->select('ratings.id','user_id','ratings.Email', 'Comment','image','rating','blocked','user_name')
             ->get();

            return view('comment.Band',compact('data'));
        }
        else 
        {
            return view('403error');
        }
    }
    public function Cateringcomments()
    {
        if(Gate::allows('isAdmin'))
        {
        $data=DB::table('ratings')
             ->join('users','users.id','=','ratings.user_id')
             ->where('category','=','Catering')
             ->select('ratings.id','user_id','ratings.Email', 'Comment','image','rating','blocked','user_name')
             ->get();

            return view('comment.Catering',compact('data'));
        }
        else 
        {
            return view('403error');
        }
    }
    public function Actorcomments()
    {
        if(Gate::allows('isAdmin'))
        {
        $data=DB::table('ratings')
             ->join('users','users.id','=','ratings.user_id')
             ->where('category','=','Actors')
             ->select('ratings.id','user_id','ratings.Email', 'Comment','image','rating','blocked','user_name')
             ->get();

            return view('comment.Artist',compact('data'));
        }
        else 
        {
            return view('403error');
        }
    }
    public function Cakecomments()
    {
        if(Gate::allows('isAdmin'))
        {
        $data=DB::table('ratings')
             ->join('users','users.id','=','ratings.user_id')
             ->where('category','=','Cake_Designers')
             ->select('ratings.id','user_id','ratings.Email', 'Comment','image','rating','blocked','user_name')
             ->get();

            return view('comment.Cake',compact('data'));
        }
        else 
        {
            return view('403error');
        }
    }
    public function Costumecomments()
    {
        if(Gate::allows('isAdmin'))
        {
        $data=DB::table('ratings')
             ->join('users','users.id','=','ratings.user_id')
             ->where('category','=','Cloth_Designers')
             ->select('ratings.id','user_id','ratings.Email', 'Comment','image','rating','blocked','user_name')
             ->get();

            return view('comment.Costume',compact('data'));
        }
        else 
        {
            return view('403error');
        }
    }
    public function Dancingcomments()
    {
        if(Gate::allows('isAdmin'))
        {
        $data=DB::table('ratings')
             ->join('users','users.id','=','ratings.user_id')
             ->where('category','=','Dancing')
             ->select('ratings.id','user_id','ratings.Email', 'Comment','image','rating','blocked','user_name')
             ->get();

            return view('comment.Dancing',compact('data'));
        }
        else 
        {
            return view('403error');
        }
    }
    public function decorationcomments()
    {
        if(Gate::allows('isAdmin'))
        {
        $data=DB::table('ratings')
             ->join('users','users.id','=','ratings.user_id')
             ->where('category','=','Decoration')
             ->select('ratings.id','user_id','ratings.Email', 'Comment','image','rating','blocked','user_name')
             ->get();

            return view('comment.Decoration',compact('data'));
        }
        else 
        {
            return view('403error');
        }
    }
    public function Transportcomments()
    {
        if(Gate::allows('isAdmin'))
        {
        $data=DB::table('ratings')
             ->join('users','users.id','=','ratings.user_id')
             ->where('category','=','Wedding_Transport')
             ->select('ratings.id','user_id','ratings.Email', 'Comment','image','rating','blocked','user_name')
             ->get();

            return view('comment.Transport',compact('data'));
        }
        else 
        {
            return view('403error');
        }
    }
    public function EventPlannercomments()
    {
        if(Gate::allows('isAdmin'))
        {
        $data=DB::table('ratings')
             ->join('users','users.id','=','ratings.user_id')
             ->where('category','=','Event_Planners')
             ->select('ratings.id','user_id','ratings.Email', 'Comment','image','rating','blocked','user_name')
             ->get();

            return view('comment.Event',compact('data'));
        }
        else 
        {
            return view('403error');
        }
    }
    public function Poruwacomments()
    {
        if(Gate::allows('isAdmin'))
        {
        $data=DB::table('ratings')
             ->join('users','users.id','=','ratings.user_id')
             ->where('category','=','Poruwa_Ceramony')
             ->select('ratings.id','user_id','ratings.Email', 'Comment','image','rating','blocked','user_name')
             ->get();

            return view('comment.Poruwa',compact('data'));
        }
        else 
        {
            return view('403error');
        }
    }
}
