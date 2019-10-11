<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Complaint;

class ComplaintController extends Controller
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

    public function form($id)
    {
        //
        $data=DB::table('users')
             ->where('users.id','=',$id)
             ->get();

        return view('YourComplaint',compact('data'));
    }

    public function addcomplaint(request $request)
    {
        //
        $request->validate(
            ['user_email' => 'required|string|max:255|email',
            'complaint_about' =>'required|string|max:20',
            'complaint' =>'required|string|max:500',
            
            
            
           
        ],
        ['user_email.required'=> "Fill out this field",
        'complaint_about.required'=> "Fill out this field",
        'complaint.required'=> "Fill out this field",
        
        
        ]
    );
        
        $complaint = new Complaint;
        
        $complaint->user_email=$request->user_email;
        $complaint->user_id =$request->id;
        $complaint->complaint_about =$request->complaint_about;
        $complaint->complaint =$request->complaint;
        $complaint->save();

         return redirect()->back()->with('flash_message','Your Complaint is Added');

    }

    public function allcomplaints()
    {
        $data=DB::table('complaints')
            ->join('users','complaints.user_id','=','users.id')
            ->select('user_email','complaints.id as complaintid','complaint_about','user_id','complaint','state')
            ->get();

        return view('complaint.all',compact('data'));
    }

    public function reviewComplaint($id)
    {
        $complaint=Complaint::where('id',$id)
                    ->update([
                            'state'=>1

                        ]);

        return redirect()->back();
    }

    public function SolveComplaint($id)
    {
        $complaint=Complaint::where('id',$id)
                    ->update([
                            'state'=>2

                        ]);

        return redirect()->back();
    }

    public function DeleteComplaint($id)
    {
        $complain=Complaint::where('id',$id)->delete();

        return redirect()->back();
    }

    public function Hotelcomplaints()
    {
        $data=DB::table('complaints')
            ->join('users','complaints.user_id','=','users.id')
            ->where('category','=','Hall')
            ->select('user_email','complaints.id as complaintid','complaint_about','user_id','complaint','state')
            ->get();

        return view('complaint.Hotel',compact('data'));
    }
    public function Photographycomplaints()
    {
        $data=DB::table('complaints')
            ->join('users','complaints.user_id','=','users.id')
            ->where('category','=','Photography')
            ->select('user_email','complaints.id as complaintid','complaint_about','user_id','complaint','state')
            ->get();

        return view('complaint.Photography',compact('data'));
    }
    public function Saloncomplaints()
    {
        $data=DB::table('complaints')
            ->join('users','complaints.user_id','=','users.id')
            ->where('category','=','Bridel_Designers')
            ->select('user_email','complaints.id as complaintid','complaint_about','user_id','complaint','state')
            ->get();

        return view('complaint.Salon',compact('data'));
    }
    public function DJcomplaints()
    {
        $data=DB::table('complaints')
            ->join('users','complaints.user_id','=','users.id')
            ->where('category','=','Music')
            ->select('user_email','complaints.id as complaintid','complaint_about','user_id','complaint','state')
            ->get();

        return view('complaint.Band',compact('data'));
    }
    public function Cateringcomplaints()
    {
        $data=DB::table('complaints')
            ->join('users','complaints.user_id','=','users.id')
            ->where('category','=','Catering')
            ->select('user_email','complaints.id as complaintid','complaint_about','user_id','complaint','state')
            ->get();

        return view('complaint.Catering',compact('data'));
    }
    public function Actorcomplaints()
    {
        $data=DB::table('complaints')
            ->join('users','complaints.user_id','=','users.id')
            ->where('category','=','Actors')
            ->select('user_email','complaints.id as complaintid','complaint_about','user_id','complaint','state')
            ->get();

        return view('complaint.Artist',compact('data'));
    }
    public function Cakecomplaints()
    {
        $data=DB::table('complaints')
            ->join('users','complaints.user_id','=','users.id')
            ->where('category','=','Cake_Designers')
            ->select('user_email','complaints.id as complaintid','complaint_about','user_id','complaint','state')
            ->get();

        return view('complaint.Cake',compact('data'));
    }
    public function Costumecomplaints()
    {
        $data=DB::table('complaints')
            ->join('users','complaints.user_id','=','users.id')
            ->where('category','=','Costume_Designers')
            ->select('user_email','complaints.id as complaintid','complaint_about','user_id','complaint','state')
            ->get();

        return view('complaint.Costume',compact('data'));
    }
    public function Dancingcomplaints()
    {
        $data=DB::table('complaints')
            ->join('users','complaints.user_id','=','users.id')
            ->where('category','=','Dancing')
            ->select('user_email','complaints.id as complaintid','complaint_about','user_id','complaint','state')
            ->get();

        return view('complaint.Dancing',compact('data'));
    }
    public function Decorationcomplaints()
    {
        $data=DB::table('complaints')
            ->join('users','complaints.user_id','=','users.id')
            ->where('category','=','Decoration')
            ->select('user_email','complaints.id as complaintid','complaint_about','user_id','complaint','state')
            ->get();

        return view('complaint.Decoration',compact('data'));
    }
}
