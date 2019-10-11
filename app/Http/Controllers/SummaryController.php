<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use PDF;
use Carbon;

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

    public function venue()
    {
        $Hotel=DB::table('users')
              ->join('hotels','hotels.user_id','=','users.id')
              ->get();
              
        $hall=DB::table('reception_halls')
              ->join('hotels','reception_halls.hotel_id','=','hotels.id')
              ->join('hall_features','reception_halls.id','=','hall_features.hall_id')
              ->join('hall_events','reception_halls.id','=','hall_events.hall_id')
              ->join('hall_table_arrangements','reception_halls.id','=','hall_table_arrangements.hall_id')
              ->get();

        
        
        
        
            $mytime = Carbon\Carbon::now();
            $time=$mytime->toDateTimeString();
            $pdf=PDF::loadview('VenueReport',compact('Hotel','time','hall'))->setPaper('a1', 'landscape');
            return $pdf->download('VenueReport.pdf');
    }

    public function photography()
    {
        $data = DB::table('users')
                ->join('photographies','users.id','=','photographies.user_id')
                ->join('photography_events','users.id','=','photography_events.user_id')
                ->get();
        
        
        
        
            $mytime = Carbon\Carbon::now();
            $time=$mytime->toDateTimeString();
            $pdf=PDF::loadview('PhotographyReport',compact('data','time'))->setPaper('a2', 'landscape');
            return $pdf->download('PhotographyReport.pdf');
    }

    public function cake()
    {
        $data = DB::table('users')
                ->join('cake_designers','users.id','=','cake_designers.user_id')
                ->where('category','=','Cake_Designers')
                ->get();

                $mytime = Carbon\Carbon::now();
                $time=$mytime->toDateTimeString();
                $pdf=PDF::loadview('CakeDesignerReport',compact('data','time'))->setPaper('a2', 'landscape');
                return $pdf->download('CakeDesignerReport.pdf');
    }

    public function dance()
    {
        $data = DB::table('users')
                ->join('dancers','users.id','=','dancers.user_id')
                ->join('dancer_events','users.id','=','dancer_events.user_id')
                ->where('category','=','Dancing')
                ->get();

                $mytime = Carbon\Carbon::now();
                $time=$mytime->toDateTimeString();
                $pdf=PDF::loadview('DancerReport',compact('data','time'))->setPaper('a2', 'landscape');
                return $pdf->download('DancerReport.pdf');
    }
}
