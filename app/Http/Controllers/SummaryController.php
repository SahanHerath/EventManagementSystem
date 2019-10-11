<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class SummaryController extends Controller
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
    public function types()
    {
        $data=DB::table('actors')->count();
        $data1=DB::table('caterings')->count();
        $data2=DB::table('complaints')->count();
        $data3=DB::table('cake_designers')->count();
        $data4=DB::table('costume_designers')->count();
        $data5=DB::table('dancers')->count();
        $data6=DB::table('decorators')->count();
        $data7=DB::table('event_planners')->count();
        $data8=DB::table('hotels')->count();
        $data9=DB::table('musicians')->count();
        $data10=DB::table('photographies')->count();
        $data11=DB::table('poruwa_ceramonies')->count();
        $data12=DB::table('ratings')->count();
        $data13=DB::table('salons')->count();
        $data14=DB::table('suggestions')->count();
        $data15=DB::table('transporters')->count();
        

        return view('Summary',compact('data','data1','data2','data3','data4','data5','data6','data7','data8','data9','data10','data11','data12','data13','data14','data15'));

    }
}
