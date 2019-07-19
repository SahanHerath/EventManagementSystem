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
                return view('createDancers');
            }
            if(($data1->category)=='Poruwa_Ceramony')
            {
                return view('createPoruwaCeramony');
            }
            if(($data1->category)=='Wedding_Transport')
            {
                return view('createWeddingTransport');
            }
            if(($data1->category)=='Decoration')
            {
                return view('createDecorator');
            }
            if(($data1->category)=='Cake_Designers')
            {
                return view('createCakeDesigner');
            }
            if(($data1->category)=='Actors')
            {
                return view('createActors');
            }
            if(($data1->category)=='Bridel_Designers')
            {
                return view('createBridelDesigner');
            }
            if(($data1->category)=='Catering')
            {
                return view('createCateringService');
            }
            if(($data1->category)=='Cloth_Designers')
            {
                return view('createClothDesigners');
            }
           
        }
    }
   

    
}
