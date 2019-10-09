<?php

namespace App\Http\Controllers;
use Auth;
use DB;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function category()
    {
        $id1 = Auth::id();
        $data=DB::table('users')
             ->where('users.id','=',$id1)
             ->select('category')
             ->get();

        foreach($data as $data1)
        {
            if(($data1->category)=='Hall')
            {
                return view('CreateHotel');
            }
            if(($data1->category)=='Photography')
            {
                return view('createPhotographyer');
            }
            if(($data1->category)=='Music')
            {
                return view('CreateMusician');
            }
            if(($data1->category)=='Dancing')
            {
                return view('CreateDancing');
            }
            if(($data1->category)=='Poruwa_Ceramony')
            {
                return view('CreatePoruwaCeramony');
            }
            if(($data1->category)=='Wedding_Transport')
            {
                return view('CreateTransport');
            }
            if(($data1->category)=='Decoration')
            {
                return view('CreateDecorator');
            }
            if(($data1->category)=='Cake_Designers')
            {
                return view('CreateCakeDesigner');
            }
            if(($data1->category)=='Actors')
            {
                return view('CreateActors');
            }
            if(($data1->category)=='Bridel_Designers')
            {
                return view('CreateSalon');
            }
            if(($data1->category)=='Catering')
            {
                return view('CreateCateringService');
            }
            if(($data1->category)=='Cloth_Designers')
            {
                return view('createClothDesigners');
            }
            if(($data1->category)=='Event_Planners')
            {
                return view('CreateEventPlanners');
            }
           
        }
    }

    
    public function profilecategory()
    {
        $id1 = Auth::id();
        $data=DB::table('users')
             ->where('users.id','=',$id1)
             ->select('category')
             ->get();

        foreach($data as $data1)
        {
            if(($data1->category)=='Hall')
            {
                return app('App\Http\Controllers\HallController')->profile();
            }
            if(($data1->category)=='Photography')
            {
                return app('App\Http\Controllers\PhotographyController')->profile();
            }
            if(($data1->category)=='Music')
            {
                return app('App\Http\Controllers\musicianController')->profile();
            }
            if(($data1->category)=='Dancing')
            {
                return app('App\Http\Controllers\DancingController')->profile();
            }
            if(($data1->category)=='Poruwa_Ceramony')
            {
                return app('App\Http\Controllers\PoruwaController')->profile();
            }
            if(($data1->category)=='Wedding_Transport')
            {
                return app('App\Http\Controllers\TransportController')->profile();
            }
            if(($data1->category)=='Decoration')
            {
               return app('App\Http\Controllers\decorationController')->profile();
            }
            if(($data1->category)=='Cake_Designers')
            {
                return app('App\Http\Controllers\CakeController')->profile();
            }
            if(($data1->category)=='Actors')
            {
                return app('App\Http\Controllers\ActorController')->profile();
            }
            if(($data1->category)=='Bridel_Designers')
            {
                return app('App\Http\Controllers\salonController')->profile();
            }
            if(($data1->category)=='Catering')
            {
                return app('App\Http\Controllers\CateringController')->profile();
            }
            if(($data1->category)=='Cloth_Designers')
            {
                return app('App\Http\Controllers\CostumeDesignerController')->profile();
            }
            if(($data1->category)=='Event_Planners')
            {
                return app('App\Http\Controllers\EventPlanersController')->profile();
            }
            if(($data1->category)=='admin')
            {
                return app('App\Http\Controllers\AdminController')->profile();
            }
           
        }
    }
   

    
}
