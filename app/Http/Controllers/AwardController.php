<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Award;

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
        $data=DB::table('users')
             ->join('awards','users.id','=','awards.user_id')
             ->select('awards.id as awardid','users.id as userid','Gold','Platinum','name','Silver','Bronze','email')
             ->get();

        return view('awards.all',compact('data'));
    }

    public function platinum($id)
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
    public function gold($id)
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

    public function silver($id)
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

    public function bronze($id)
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

    public function remove($id)
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

    public function Hotel()
    {
        //
        $data=DB::table('users')
             ->join('awards','users.id','=','awards.user_id')
             ->where('category','=','Hall')
             ->select('awards.id as awardid','users.id as userid','Gold','Platinum','name','Silver','Bronze','email')
             ->get();

        return view('awards.hotel',compact('data'));
    }

    public function Photography()
    {
        //
        $data=DB::table('users')
             ->join('awards','users.id','=','awards.user_id')
             ->where('category','=','Photography')
             ->select('awards.id as awardid','users.id as userid','Gold','Platinum','name','Silver','Bronze','email')
             ->get();

        return view('awards.photography',compact('data'));
    }

    public function Salon()
    {
        //
        $data=DB::table('users')
             ->join('awards','users.id','=','awards.user_id')
             ->where('category','=','Bridel_Designers')
             ->select('awards.id as awardid','users.id as userid','Gold','Platinum','name','Silver','Bronze','email')
             ->get();

        return view('awards.beautician',compact('data'));
    }
    public function Music()
    {
        //
        $data=DB::table('users')
             ->join('awards','users.id','=','awards.user_id')
             ->where('category','=','Music')
             ->select('awards.id as awardid','users.id as userid','Gold','Platinum','name','Silver','Bronze','email')
             ->get();

        return view('awards.music',compact('data'));
    }
}
