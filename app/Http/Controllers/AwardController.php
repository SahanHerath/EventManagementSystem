<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Award;
use Gate;

class AwardController extends Controller
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
    public function all()
    {
        //
        if(Gate::allows('isAdmin'))
        { 
        $data=DB::table('users')
             ->join('awards','users.id','=','awards.user_id')
             ->select('awards.id as awardid','users.id as userid','Gold','Platinum','name','Silver','Bronze','email')
             ->get();

        return view('awards.all',compact('data'));
        }
        else 
        {
            return view('403error');
        }
    }

    public function platinum($id)
    {
        if(Gate::allows('isAdmin'))
        { 
        $data=Award::where('id',$id)
            
        ->update([
                'Platinum'=>1,
                'Gold'=>0,
                'Silver'=>0,
                'Bronze'=>0,
                

            ]);

            return redirect()->back();
        }
        else 
        {
            return view('403error');
        }
    }
    public function gold($id)
    {
        if(Gate::allows('isAdmin'))
        { 
        $data=Award::where('id',$id)
            
        ->update([
                'Platinum'=>0,
                'Gold'=>1,
                'Silver'=>0,
                'Bronze'=>0,
                

            ]);

            return redirect()->back();
        }
        else 
        {
            return view('403error');
        }
    }

    public function silver($id)
    {
        if(Gate::allows('isAdmin'))
        { 
        $data=Award::where('id',$id)
            
        ->update([
                'Platinum'=>0,
                'Gold'=>0,
                'Silver'=>1,
                'Bronze'=>0,
                

            ]);

            return redirect()->back();
        }
        else 
        {
            return view('403error');
        }
    }

    public function bronze($id)
    {
        if(Gate::allows('isAdmin'))
        { 
        $data=Award::where('id',$id)
            
        ->update([
                'Platinum'=>0,
                'Gold'=>0,
                'Silver'=>0,
                'Bronze'=>1,
                

            ]);

            return redirect()->back();
        }
        else 
        {
            return view('403error');
        }
    }

    public function remove($id)
    {
        if(Gate::allows('isAdmin'))
        { 
        $data=Award::where('id',$id)
            
        ->update([
                'Platinum'=>0,
                'Gold'=>0,
                'Silver'=>0,
                'Bronze'=>0,
                

            ]);

            return redirect()->back();
        }
        else 
        {
            return view('403error');
        }
    }

    public function Hotel()
    {
        //
        if(Gate::allows('isAdmin'))
        { 
        $data=DB::table('users')
             ->join('awards','users.id','=','awards.user_id')
             ->where('category','=','Hall')
             ->select('awards.id as awardid','users.id as userid','Gold','Platinum','name','Silver','Bronze','email')
             ->get();

        return view('awards.hotel',compact('data'));
        }
        else 
        {
            return view('403error');
        }
    }

    public function Photography()
    {
        //
        if(Gate::allows('isAdmin'))
        { 
        $data=DB::table('users')
             ->join('awards','users.id','=','awards.user_id')
             ->where('category','=','Photography')
             ->select('awards.id as awardid','users.id as userid','Gold','Platinum','name','Silver','Bronze','email')
             ->get();

        return view('awards.photography',compact('data'));
        }
        else 
        {
            return view('403error');
        }
    }

    public function Salon()
    {
        //
        if(Gate::allows('isAdmin'))
        { 
        $data=DB::table('users')
             ->join('awards','users.id','=','awards.user_id')
             ->where('category','=','Bridel_Designers')
             ->select('awards.id as awardid','users.id as userid','Gold','Platinum','name','Silver','Bronze','email')
             ->get();

        return view('awards.beautician',compact('data'));
        }
        else 
        {
            return view('403error');
        }
    }
    public function Music()
    {
        //
        if(Gate::allows('isAdmin'))
        { 
        $data=DB::table('users')
             ->join('awards','users.id','=','awards.user_id')
             ->where('category','=','Music')
             ->select('awards.id as awardid','users.id as userid','Gold','Platinum','name','Silver','Bronze','email')
             ->get();

        return view('awards.music',compact('data'));
        }
        else 
        {
            return view('403error');
        }
    }

    public function Catering()
    {
        //
        if(Gate::allows('isAdmin'))
        { 
        $data=DB::table('users')
             ->join('awards','users.id','=','awards.user_id')
             ->where('category','=','Catering')
             ->select('awards.id as awardid','users.id as userid','Gold','Platinum','name','Silver','Bronze','email')
             ->get();

        return view('awards.catering',compact('data'));
        }
        else 
        {
            return view('403error');
        }
    }
    public function Actor()
    {
        //
        if(Gate::allows('isAdmin'))
        { 
        $data=DB::table('users')
             ->join('awards','users.id','=','awards.user_id')
             ->where('category','=','Actors')
             ->select('awards.id as awardid','users.id as userid','Gold','Platinum','name','Silver','Bronze','email')
             ->get();

        return view('awards.actor',compact('data'));
        }
        else 
        {
            return view('403error');
        }
    }
    public function Cake()
    {
        //
        if(Gate::allows('isAdmin'))
        { 
        $data=DB::table('users')
             ->join('awards','users.id','=','awards.user_id')
             ->where('category','=','Cake_Designers')
             ->select('awards.id as awardid','users.id as userid','Gold','Platinum','name','Silver','Bronze','email')
             ->get();

        return view('awards.cake',compact('data'));
        }
        else 
        {
            return view('403error');
        }
    }
    public function Costume()
    {
        //
        if(Gate::allows('isAdmin'))
        { 
        $data=DB::table('users')
             ->join('awards','users.id','=','awards.user_id')
             ->where('category','=','Cloth_Designers')
             ->select('awards.id as awardid','users.id as userid','Gold','Platinum','name','Silver','Bronze','email')
             ->get();

        return view('awards.costumedesigner',compact('data'));
        }
        else 
        {
            return view('403error');
        }
    }
    public function Dancing()
    {
        //
        if(Gate::allows('isAdmin'))
        { 
        $data=DB::table('users')
             ->join('awards','users.id','=','awards.user_id')
             ->where('category','=','Dancing')
             ->select('awards.id as awardid','users.id as userid','Gold','Platinum','name','Silver','Bronze','email')
             ->get();

        return view('awards.dancing',compact('data'));
        }
        else 
        {
            return view('403error');
        }
    }

    public function Decoration()
    {
        //
        if(Gate::allows('isAdmin'))
        { 
        $data=DB::table('users')
             ->join('awards','users.id','=','awards.user_id')
             ->where('category','=','Decoration')
             ->select('awards.id as awardid','users.id as userid','Gold','Platinum','name','Silver','Bronze','email')
             ->get();

        return view('awards.decoration',compact('data'));
        }
        else 
        {
            return view('403error');
        }
    }
    public function Transport()
    {
        //
        if(Gate::allows('isAdmin'))
        { 
        $data=DB::table('users')
             ->join('awards','users.id','=','awards.user_id')
             ->where('category','=','Wedding_Transport')
             ->select('awards.id as awardid','users.id as userid','Gold','Platinum','name','Silver','Bronze','email')
             ->get();

        return view('awards.transport',compact('data'));
        }
        else 
        {
            return view('403error');
        }
    }

    public function Event()
    {
        //
        if(Gate::allows('isAdmin'))
        { 
        $data=DB::table('users')
             ->join('awards','users.id','=','awards.user_id')
             ->where('category','=','Event_Planners')
             ->select('awards.id as awardid','users.id as userid','Gold','Platinum','name','Silver','Bronze','email')
             ->get();

        return view('awards.eventplanner',compact('data'));
        } else 
        {
            return view('403error');
        }
    }
    public function Poruwa()
    {
        //
        if(Gate::allows('isAdmin'))
        { 
        $data=DB::table('users')
             ->join('awards','users.id','=','awards.user_id')
             ->where('category','=','Poruwa_Ceramon')
             ->select('awards.id as awardid','users.id as userid','Gold','Platinum','name','Silver','Bronze','email')
             ->get();

        return view('awards.poruwa',compact('data'));
        }
        else 
        {
            return view('403error');
        }
    }
   
}
