<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use PDF;
use Carbon;
use Gate;

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
        if(Gate::allows('isAdmin'))
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
        else 
        {
            return view('403error');
        }
    }

    public function venue()
    {
        if(Gate::allows('isAdmin'))
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
        else 
        {
            return view('403error');
        }
    }

    public function photography()
    {
        if(Gate::allows('isAdmin'))
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
        else 
        {
            return view('403error');
        }
    }

    public function cake()
    {
        if(Gate::allows('isAdmin'))
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
        else 
        {
            return view('403error');
        }
    }

    public function dance()
    {
        if(Gate::allows('isAdmin'))
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
        else 
        {
            return view('403error');
        }
    }

    public function  decoration()
    {
        
        if(Gate::allows('isAdmin'))
        { 
        $data = DB::table('users')
                ->join('decorators','users.id','=','decorators.user_id')
                ->join('decorator_events','users.id','=','decorator_events.user_id')
                ->get();

                $mytime = Carbon\Carbon::now();
                $time=$mytime->toDateTimeString();
                $pdf=PDF::loadview('DecoratorReport',compact('data','time'))->setPaper('a2', 'landscape');
                return $pdf->download('DecoratorReport.pdf');
        }
        else 
        {
            return view('403error');
        }
    }
    public function  actor()
    {
        
        if(Gate::allows('isAdmin'))
        { 
        $data = DB::table('users')
                ->join('actors','users.id','=','actors.user_id')
                ->join('actor_events','users.id','=','actor_events.user_id')
                ->get();

                $mytime = Carbon\Carbon::now();
                $time=$mytime->toDateTimeString();
                $pdf=PDF::loadview('ActorReport',compact('data','time'))->setPaper('a2', 'landscape');
                return $pdf->download('ActorReport.pdf');
        }
        else 
        {
            return view('403error');
        }
    }

    public function  catering()
    {
        
        if(Gate::allows('isAdmin'))
        { 
        $data = DB::table('users')
                ->join('caterings','users.id','=','caterings.user_id')
                ->join('catering_events','users.id','=','catering_events.user_id')
                ->where('category','=','Catering')
                ->get();

                $mytime = Carbon\Carbon::now();
                $time=$mytime->toDateTimeString();
                $pdf=PDF::loadview('CateringReport',compact('data','time'))->setPaper('a2', 'landscape');
                return $pdf->download('CateringReport.pdf');
        }
        else 
        {
            return view('403error');
        }
    }

    public function  costume()
    {
        
        if(Gate::allows('isAdmin'))
        { 
        $data = DB::table('users')
                ->join('costume_designers','users.id','=','costume_designers.user_id')
                ->join('costume_designer_events','users.id','=','costume_designer_events.user_id')
                ->where('category','=','Cloth_Designers')
               ->get();

                $mytime = Carbon\Carbon::now();
                $time=$mytime->toDateTimeString();
                $pdf=PDF::loadview('CostumeReport',compact('data','time'))->setPaper('a2', 'landscape');
                return $pdf->download('CostumeDesignerReport.pdf');
        }
        else 
        {
            return view('403error');
        }
    }

    public function  planner()
    {
        
        if(Gate::allows('isAdmin'))
        { 
        $data = DB::table('users')
                ->join('event_planners','users.id','=','event_planners.user_id')
                ->join('event_planners_events','users.id','=','event_planners_events.user_id')
                ->where('category','=','Event_Planners')
                ->get();

                $mytime = Carbon\Carbon::now();
                $time=$mytime->toDateTimeString();
                $pdf=PDF::loadview('PlannerReport',compact('data','time'))->setPaper('a2', 'landscape');
                return $pdf->download('PlannerReport.pdf');
        }
        else 
        {
            return view('403error');
        }
    }

    public function  music()
    {
        
        if(Gate::allows('isAdmin'))
        { 
        $data = DB::table('users')
                ->join('musicians','users.id','=','musicians.user_id')
                ->join('musician_events','users.id','=','musician_events.user_id')
                ->where('category','=','Music')
                ->get();

                $mytime = Carbon\Carbon::now();
                $time=$mytime->toDateTimeString();
                $pdf=PDF::loadview('MusicReport',compact('data','time'))->setPaper('a2', 'landscape');
                return $pdf->download('MusicReport.pdf');
        }
        else 
        {
            return view('403error');
        }
    }

    public function  poruwa()
    {
        
        if(Gate::allows('isAdmin'))
        { 
        $data = DB::table('users')
                ->join('poruwa_ceramonies','users.id','=','poruwa_ceramonies.user_id')
                ->where('category','=','Poruwa_Ceramony')
                ->get();

                $mytime = Carbon\Carbon::now();
                $time=$mytime->toDateTimeString();
                $pdf=PDF::loadview('PoruwaReport',compact('data','time'))->setPaper('a2', 'landscape');
                return $pdf->download('PoruwaRitualReport.pdf');
        }
        else 
        {
            return view('403error');
        }
    }

    public function  salon()
    {
        
        if(Gate::allows('isAdmin'))
        { 
        $data = DB::table('users')
                ->join('salons','users.id','=','salons.user_id')
                ->join('salon_events','users.id','=','salon_events.user_id')
                ->where('category','=','Bridel_Designers')
               ->get();

                $mytime = Carbon\Carbon::now();
                $time=$mytime->toDateTimeString();
                $pdf=PDF::loadview('SalonReport',compact('data','time'))->setPaper('a2', 'landscape');
                return $pdf->download('SalonReport.pdf');
        }
        else 
        {
            return view('403error');
        }
    }

    public function  transport()
    {
        
        if(Gate::allows('isAdmin'))
        { 
        $data = DB::table('users')
                ->join('transporters','users.id','=','transporters.user_id')
                ->join('transport_categories','users.id','=','transport_categories.user_id')
                ->get();

                $mytime = Carbon\Carbon::now();
                $time=$mytime->toDateTimeString();
                $pdf=PDF::loadview('TransportReport',compact('data','time'))->setPaper('a2', 'landscape');
                return $pdf->download('TransportReport.pdf');
        }
        else 
        {
            return view('403error');
        }
    }

    public function  comments()
    {
        
        if(Gate::allows('isAdmin'))
        { 
        $data = DB::table('ratings')
            ->get();

                $mytime = Carbon\Carbon::now();
                $time=$mytime->toDateTimeString();
                $pdf=PDF::loadview('RatingReport',compact('data','time'))->setPaper('a4', 'landscape');
                return $pdf->download('RatingReport.pdf');
        }
        else 
        {
            return view('403error');
        }
    }

    public function  complaints()
    {
        
        if(Gate::allows('isAdmin'))
        { 
        $data = DB::table('complaints')
            ->get();

                $mytime = Carbon\Carbon::now();
                $time=$mytime->toDateTimeString();
                $pdf=PDF::loadview('ComplaintReport',compact('data','time'))->setPaper('a4', 'landscape');
                return $pdf->download('ComplaintReport.pdf');
        }
        else 
        {
            return view('403error');
        }
    }
    
    public function  suggestions()
    {
        
        if(Gate::allows('isAdmin'))
        { 
        $data = DB::table('suggestions')
            ->get();

                $mytime = Carbon\Carbon::now();
                $time=$mytime->toDateTimeString();
                $pdf=PDF::loadview('SuggestionReport',compact('data','time'))->setPaper('a4', 'landscape');
                return $pdf->download('SuggestionReport.pdf');
        }
        else 
        {
            return view('403error');
        }
    }

    public function fullReport()
    {
        if(Gate::allows('isAdmin'))
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

        $data = DB::table('users')
              ->join('photographies','users.id','=','photographies.user_id')
              ->join('photography_events','users.id','=','photography_events.user_id')
              ->get();

        $data1 = DB::table('users')
              ->join('cake_designers','users.id','=','cake_designers.user_id')
              ->where('category','=','Cake_Designers')
              ->get();

        $data2 = DB::table('users')
              ->join('dancers','users.id','=','dancers.user_id')
              ->join('dancer_events','users.id','=','dancer_events.user_id')
              ->where('category','=','Dancing')
              ->get();

        $data3 = DB::table('users')
              ->join('decorators','users.id','=','decorators.user_id')
              ->join('decorator_events','users.id','=','decorator_events.user_id')
              ->get();

        $data4 = DB::table('users')
              ->join('actors','users.id','=','actors.user_id')
              ->join('actor_events','users.id','=','actor_events.user_id')
              ->get();

        $data5 = DB::table('users')
              ->join('caterings','users.id','=','caterings.user_id')
              ->join('catering_events','users.id','=','catering_events.user_id')
              ->where('category','=','Catering')
              ->get();

        $data6 = DB::table('users')
              ->join('costume_designers','users.id','=','costume_designers.user_id')
              ->join('costume_designer_events','users.id','=','costume_designer_events.user_id')
              ->where('category','=','Cloth_Designers')
             ->get();

        $data7 = DB::table('users')
             ->join('event_planners','users.id','=','event_planners.user_id')
             ->join('event_planners_events','users.id','=','event_planners_events.user_id')
             ->where('category','=','Event_Planners')
             ->get();

        $data8 = DB::table('users')
             ->join('musicians','users.id','=','musicians.user_id')
             ->join('musician_events','users.id','=','musician_events.user_id')
             ->where('category','=','Music')
             ->get();

        $data9 = DB::table('users')
             ->join('poruwa_ceramonies','users.id','=','poruwa_ceramonies.user_id')
             ->where('category','=','Poruwa_Ceramony')
             ->get();

        $data10 = DB::table('users')
             ->join('salons','users.id','=','salons.user_id')
             ->join('salon_events','users.id','=','salon_events.user_id')
             ->where('category','=','Bridel_Designers')
            ->get();

        $data11 = DB::table('users')
            ->join('transporters','users.id','=','transporters.user_id')
            ->join('transport_categories','users.id','=','transport_categories.user_id')
            ->get();

        $data12 = DB::table('ratings')
            ->get();

        $data13 = DB::table('complaints')
            ->get();

        $data14 = DB::table('suggestions')
            ->get();
        
            $mytime = Carbon\Carbon::now();
            $time=$mytime->toDateTimeString();
            $pdf=PDF::loadview('FullReport',compact('Hotel','hall','data','data1','data2','data3','data4','data5','data6','data7','data8','data9','data10','data11','data12','data13','data14','time'))->setPaper('a1', 'landscape');
            return $pdf->download('FullReport.pdf');
        }
        else 
        {
            return view('403error');
        }
    }
    

}
