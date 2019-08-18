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
                return view('createhall');
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
                return view('createCakeDesigner');
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
           
        }
    }
   

    
}
