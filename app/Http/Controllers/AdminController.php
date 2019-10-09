<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Admin;
use App\User;
use Auth;
use Hash;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data=DB::table('users')
            ->where('admin','=','1')
            ->get();

        return view('admins',compact('data'));
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
        $request->validate(
            ['name' => 'required|string|max:255',
            'email' => 'required|string|max:255|email|unique:users',
            'city' => 'required|string|max:255',
            'category' => 'required|string|max:20',
            'Address' => 'required|string|max:255',
            'Contact_No' =>'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'fname' =>'required|string|max:255',
            'lname' =>'required|string|max:255',
            'password' => 'required|string|min:8|confirmed',

            
            

        ],
        ['name.required'=> "Fill out this field",
        'email.required'=> "Fill out this field",
        'city.required'=> "Fill out this field",
        'category.required'=> "Fill out this field",
        'Address.required'=> "Fill out this field",
        'Contact_No.required'=> "Fill out this field",
        'fname.required'=> "Fill out this field",
        'lname.required'=> "Fill out this field",
        'password.required'=> "Fill out this field",
        
        
       

        ]
    );
        $user = new User;
        $user->name=$request->name;
        $user->email=$request->email;
        $user->category =$request->category;
        $user->city =$request->city;
        $user->admin ="1";
        $user->password =Hash::make($request['password']);
        $user->save();
        
        $admin=new Admin;
        $admin->user_id =$user->id;
        $admin->fname=$request->fname;
        $admin->lname=$request->lname;
        $admin->Address =$request->Address;
        $admin->Contact_No=$request->Contact_No;
        $admin->save();

        return redirect('/admins');
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
        $admin1 = User::findOrFail($id); 
        $admin1 ->delete();
        $admin2  = Admin::where('user_id',$id)->delete();

        return redirect()->back();
               
    }

    public function registerAdmin()
    {
        return view('registerAdmin');
    }

    public function profile()
    {
        $id1 = Auth::id();
        $data=DB::table('users')
             ->join('admins','users.id','=','admins.user_id')
             ->where('users.id','=',$id1)
             ->select('users.id as userid','email','name','city','fname','lname','admins.id as adminid','Address','Contact_No','About_me','Main_pic','Cover_pic')
             ->get();

            return view('profile',compact('data'));
    }

}
